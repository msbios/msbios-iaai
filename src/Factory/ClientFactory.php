<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\IaaI\Factory;

use Interop\Container\ContainerInterface;
use MSBios\IaaI\ClientInterface;
use MSBios\IaaI\Module;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Soap\Client;

/**
 * Class ClientFactory
 * @package MSBios\IaaI\Factory
 */
class ClientFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Client|ClientInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $config */
        $config = $container->get(Module::class);
        return new Client($config['wsdl'], $config['options']);
    }
}