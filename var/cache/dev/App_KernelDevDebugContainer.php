<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKtbXfXA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKtbXfXA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKtbXfXA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKtbXfXA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKtbXfXA\App_KernelDevDebugContainer([
    'container.build_hash' => 'KtbXfXA',
    'container.build_id' => 'c34d7c9d',
    'container.build_time' => 1621078849,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKtbXfXA');
