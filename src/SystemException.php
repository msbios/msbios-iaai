<?php

namespace MSBios\IaaI;

/**
 * Class SystemException
 * @package MSBios\IaaI
 */
class SystemException extends Exception
{

    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
      parent::__construct($any, $FactoryType);
    }

}
