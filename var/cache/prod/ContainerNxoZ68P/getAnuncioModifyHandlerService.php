<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Domain\Anuncios\UseCases\ModifyAnuncio\AnuncioModifyHandler' shared autowired service.

include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\UseCases\\ModifyAnuncio\\AnuncioModifier.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\UseCases\\ModifyAnuncio\\AnuncioModifyHandler.php';
include_once $this->targetDirs[3].'\\src\\Domain\\Anuncios\\Domain\\EventPublisher.php';
include_once $this->targetDirs[3].'\\src\\IO\\Events\\DomainEventPublisherRabbitMq.php';

return $this->privates['App\Domain\Anuncios\UseCases\ModifyAnuncio\AnuncioModifyHandler'] = new \App\Domain\Anuncios\UseCases\ModifyAnuncio\AnuncioModifyHandler(new \App\Domain\Anuncios\UseCases\ModifyAnuncio\AnuncioModifier(($this->privates['anuncio_repository_doctrine'] ?? $this->load('getAnuncioRepositoryDoctrineService.php')), ($this->privates['components_repository_doctrine'] ?? $this->load('getComponentsRepositoryDoctrineService.php')), ($this->privates['event_domain.publisher'] ?? $this->privates['event_domain.publisher'] = new \App\IO\Events\DomainEventPublisherRabbitMq())));