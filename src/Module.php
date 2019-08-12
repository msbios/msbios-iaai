<?php
/**
 * @access protected
 */

namespace MSBios\IaaI;

/**
 * Class Module
 * @package MSBios\IaaI
 */
class Module extends \MSBios\Module
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
}
