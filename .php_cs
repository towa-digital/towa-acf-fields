<?php

use PhpCsFixer\Config;
use Symfony\Component\Finder\Finder;

$finder = Finder::create()
                ->in(__DIR__)
                ->name('*.php')
                ->exclude([
                    'node_modules',
                    'vendor',
                ])
                ->ignoreDotFiles(true)
                ->ignoreVCS(true);

return Config::create()
             ->setRules([
                 '@PSR2' => true,
                 'array_syntax' => ['syntax' => 'short'],
                 'no_multiline_whitespace_before_semicolons' => true,
                 'no_short_echo_tag' => true,
                 'no_unused_imports' => true,
                 'not_operator_with_successor_space' => true,
                 'ordered_imports' => ['sortAlgorithm' => 'length'],
             ])
             ->setFinder($finder);
