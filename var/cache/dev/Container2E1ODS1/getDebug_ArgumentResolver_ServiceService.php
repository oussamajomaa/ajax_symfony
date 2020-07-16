<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(['App\\Controller\\PostController::index' => function () {
    return ($this->privates['.service_locator.qh2ix8p'] ?? $this->load('get_ServiceLocator_Qh2ix8pService.php'));
}, 'App\\Controller\\PostController::like' => function () {
    return ($this->privates['.service_locator.v3DdqQH'] ?? $this->load('get_ServiceLocator_V3DdqQHService.php'));
}, 'App\\Controller\\PostController:index' => function () {
    return ($this->privates['.service_locator.qh2ix8p'] ?? $this->load('get_ServiceLocator_Qh2ix8pService.php'));
}, 'App\\Controller\\PostController:like' => function () {
    return ($this->privates['.service_locator.v3DdqQH'] ?? $this->load('get_ServiceLocator_V3DdqQHService.php'));
}])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));