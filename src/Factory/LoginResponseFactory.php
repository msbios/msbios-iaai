<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\Factory;

use Interop\Container\ContainerInterface;
use MSBios\IaaI\ClientInterface;
use MSBios\IaaI\Login;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class LoginResponseFactory
 * @package MSBios\IaaI\Factory
 */
class LoginResponseFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return \MSBios\IaaI\LoginResponse
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var ClientInterface $client */
        $client = $container->get(ClientInterface::class);
        return $client->Login($container->get(Login::class));
    }
}