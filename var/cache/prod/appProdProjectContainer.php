<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4xw0gcl\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4xw0gcl/appProdProjectContainer.php') {
    touch(__DIR__.'/Container4xw0gcl.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container4xw0gcl\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container4xw0gcl\appProdProjectContainer(array(
    'container.build_hash' => '4xw0gcl',
    'container.build_id' => 'ea75c6b5',
    'container.build_time' => 1527234511,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4xw0gcl');
