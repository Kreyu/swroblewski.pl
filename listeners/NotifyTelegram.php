<?php

namespace App\Listeners;

use DateTime;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exception;
use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;
use TightenCo\Jigsaw\Jigsaw;

class NotifyTelegram
{
    public function handle(Jigsaw $jigsaw)
    {
        $telegramToken = $jigsaw->getConfig('telegramToken');
        $telegramChatId = $jigsaw->getConfig('telegramChatId');

        if (!$telegramToken || !$telegramChatId) {
            echo PHP_EOL . "To send a notification to the Telegram, please specify 'telegramToken' and 'telegramChatId' in config.php" . PHP_EOL;
            return;
        }

        $bot = new BotApi($telegramToken);
        $buttons = [];

        if ($baseUrl = $jigsaw->getConfig('baseUrl')) {
            $buttons[] = [
                'text' => 'Go to website',
                'url' => 'https://swroblewski.pl',
            ];
        }

        if ($netlifyId = $jigsaw->getConfig('netlifyId')) {
            $buttons[] = [
                'text' => 'Show deploy information',
                'url' => "https://app.netlify.com/sites/{$netlifyId}/deploys",
            ];
        }

        if ($githubRepoUrl = $jigsaw->getConfig('githubRepoUrl')) {
            $buttons[] = [
                'text' => 'Go to GitHub',
                'url' => $jigsaw->getConfig('githubRepoUrl'),
            ];
        }

        $keyboard = new InlineKeyboardMarkup([$buttons]);
        $timestamp = (new DateTime)->format('d.m.Y H:i:s');

        $text = $timestamp . PHP_EOL . PHP_EOL;

        if ($baseUrl) {
            $text .= $baseUrl . PHP_EOL;
        }

        $text .= 'Project has been successfully built.';

        try {
            $bot->sendMessage($telegramChatId, $text, null, false, null, $keyboard);
        } catch (Exception $e) {
            echo PHP_EOL . 'An error occurred while sending a notification to Telegram' . PHP_EOL;
        }
    }
}
