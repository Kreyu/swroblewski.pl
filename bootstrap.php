<?php

/** @noinspection PhpUndefinedMethodInspection */

use Illuminate\Container\Container;
use TightenCo\Jigsaw\Events\EventBus;

/** @var $container Container */
/** @var $events EventBus */

$events->afterBuild(App\Listeners\GenerateSitemap::class);
