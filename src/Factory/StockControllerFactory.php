<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\IaaI\Factory;

use Interop\Container\ContainerInterface;
use MSBios\IaaI\ClientInterface;
use MSBios\IaaI\Controller\StockController;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class StockControllerFactory
 * @package MSBios\IaaI\Factory
 */
class StockControllerFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return StockController
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new StockController(
            $container->get(ClientInterface::class)
        );
    }
}