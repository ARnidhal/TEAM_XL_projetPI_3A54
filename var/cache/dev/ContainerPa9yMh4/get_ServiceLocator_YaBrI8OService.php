<?php

namespace ContainerPa9yMh4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YaBrI8OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yaBrI8O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yaBrI8O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'managerRegistry' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'categorieRepository' => 'App\\Repository\\CategoryRepository',
            'managerRegistry' => '?',
        ]);
    }
}
