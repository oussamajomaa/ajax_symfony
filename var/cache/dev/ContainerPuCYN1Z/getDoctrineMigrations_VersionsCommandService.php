<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.versions_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DoctrineCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/ListCommand.php';

$this->privates['doctrine_migrations.versions_command'] = $instance = new \Doctrine\Migrations\Tools\Console\Command\ListCommand(($this->privates['doctrine.migrations.dependency_factory'] ?? $this->load('getDoctrine_Migrations_DependencyFactoryService.php')), 'doctrine:migrations:versions');

$instance->setName('doctrine:migrations:list');

return $instance;
