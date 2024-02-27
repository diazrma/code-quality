<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\CodeQuality\Rector\Include_\AbsolutizeRequireAndIncludePathRector;
use Rector\Set\ValueObject\SetList;

return RectorConfig::configure()
    ->withFileExtensions(['php', 'phtml'])
    ->withPaths([
        __DIR__ . '/app/code',
        __DIR__ . '/app/design',
    ])
    ->withPhpSets(php81: true)
    ->withPreparedSets(codeQuality: true);

