<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver\\ServiceValueResolver.php';

return $this->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('anuncio.controller::build' => function () {
    return ($this->privates['.service_locator..7uNotq'] ?? $this->load('get_ServiceLocator__7uNotqService.php'));
}, 'anuncio.controller::registerCommands' => function () {
    return ($this->privates['.service_locator.bxfMTph'] ?? $this->load('get_ServiceLocator_BxfMTphService.php'));
}, 'anuncio.controller:build' => function () {
    return ($this->privates['.service_locator..7uNotq'] ?? $this->load('get_ServiceLocator__7uNotqService.php'));
}, 'anuncio.controller:registerCommands' => function () {
    return ($this->privates['.service_locator.bxfMTph'] ?? $this->load('get_ServiceLocator_BxfMTphService.php'));
})));
