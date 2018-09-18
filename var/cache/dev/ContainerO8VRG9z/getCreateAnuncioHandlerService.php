<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Domain\Anuncios\UseCases\CreateAnuncio\CreateAnuncioHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\Domain\\EventPublisher.php';
include_once $this->targetDirs[3].'\\src\\IO\\Events\\DomainEventPublisherRabbitMq.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\UseCases\\CreateAnuncio\\AnuncioCreator.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\UseCases\\CreateAnuncio\\CreateAnuncioHandler.php';

return $this->privates['App\Domain\Anuncios\UseCases\CreateAnuncio\CreateAnuncioHandler'] = new \App\Domain\Anuncios\UseCases\CreateAnuncio\CreateAnuncioHandler(new \App\Domain\Anuncios\UseCases\CreateAnuncio\AnuncioCreator(($this->privates['anuncio_repository_doctrine'] ?? $this->load('getAnuncioRepositoryDoctrineService.php')), ($this->privates['components_repository_doctrine'] ?? $this->load('getComponentsRepositoryDoctrineService.php')), new \App\IO\Events\DomainEventPublisherRabbitMq()));
