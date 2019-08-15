<?php
/**
 * @access protected
 */

namespace MSBios\IaaI;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\Mvc\ApplicationInterface;
use Zend\Mvc\MvcEvent;

/**
 * Class Module
 * @package MSBios\IaaI
 */
class Module extends \MSBios\Module implements BootstrapListenerInterface
{
    /** @const VERSION */
    const VERSION = '1.0.0';

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getDir()
    {
        return __DIR__;
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * @param EventInterface $e
     */
    public function onBootstrap(EventInterface $e)
    {
        /** @var ApplicationInterface $application */
        $application = $e->getTarget();
        $application->getEventManager()->attach(MvcEvent::EVENT_DISPATCH_ERROR, [$this, 'onDispatchError']);
    }

    /**
     * @param EventInterface $e
     */
    public function onDispatchError(EventInterface $e)
    {
        var_dump($e->getParam('exception')->getMessage());
        // var_dump($e->getParams());
        die;
    }
}
