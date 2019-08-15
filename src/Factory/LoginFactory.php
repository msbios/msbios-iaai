<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\IaaI\Factory;

use Interop\Container\ContainerInterface;
use MSBios\IaaI\Login;
use MSBios\IaaI\Module;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class LoginFactory
 * @package MSBios\IaaI\Factory
 */
class LoginFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Login
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var array $config */
        $config = $container->get(Module::class);
        return new Login($config['username'], $config['password']);
    }
}