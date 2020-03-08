<?php

use Illuminate\View\Compilers\BladeCompiler;

/** @var BladeCompiler $bladeCompiler */

$bladeCompiler->component('_components.codeblock', 'code');
$bladeCompiler->component('_components.paragraph');
$bladeCompiler->component('_components.quote');
