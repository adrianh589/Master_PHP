<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPxNTqfT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPxNTqfT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPxNTqfT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPxNTqfT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPxNTqfT\App_KernelDevDebugContainer([
    'container.build_hash' => 'PxNTqfT',
    'container.build_id' => '0423438e',
    'container.build_time' => 1593812628,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPxNTqfT');