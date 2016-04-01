<?php

use Symfony\CS\Config\Config;
use Symfony\CS\Finder\DefaultFinder;
use Symfony\CS\Fixer\Contrib\HeaderCommentFixer;
use Symfony\CS\FixerInterface;

$header = <<<'EOF'
This file is part of the Draft.php library.

(c) Webstronauts <contact@webstronauts.co>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'ordered_use',
        'unused_use',
        'remove_lines_between_uses',
        'remove_leading_slash_use',
        'phpdoc_no_empty_return',
        'phpdoc_params',
        'phpdoc_to_comment',
        'phpdoc_order',
        'header_comment',
        'single_array_no_trailing_comma',
        'multiline_array_trailing_comma',
        'concat_without_spaces',
        'single_quote',
        'ternary_spaces',
        'operators_spaces',
        'new_with_braces',
        '-psr0',
    ])
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__.'/src')
            ->in(__DIR__.'/spec')
    );