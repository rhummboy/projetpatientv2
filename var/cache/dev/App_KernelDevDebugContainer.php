<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxSqMcO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxSqMcO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxSqMcO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxSqMcO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPxSqMcO\App_KernelDevDebugContainer([
    'container.build_hash' => 'PxSqMcO',
    'container.build_id' => 'bb716a73',
    'container.build_time' => 1615211563,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxSqMcO');
