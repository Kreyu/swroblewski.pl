<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    protected $exclude = [
        '/assets/*',
        '*/404*'
    ];

    public function handle(Jigsaw $jigsaw)
    {
        if (!$baseUrl = $jigsaw->getConfig('baseUrl')) {
            echo PHP_EOL . "To generate a sitemap.xml file, please specify a 'baseUrl' in config.php." . PHP_EOL;
            return;
        }

        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())
            ->reject(function ($path) {
                return Str::is($this->exclude, $path);
            })->each(function ($path) use ($baseUrl, $sitemap) {
                $sitemap->addItem(rtrim($baseUrl, '/') . $path, time(), Sitemap::DAILY);
        });

        $sitemap->write();
    }
}
