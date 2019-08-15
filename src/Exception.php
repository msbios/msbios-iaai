<?php

namespace MSBios\IaaI;

class Exception
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var QName $FactoryType
     */
    protected $FactoryType = null;

    /**
     * @param string $any
     * @param QName $FactoryType
     */
    public function __construct($any, $FactoryType)
    {
      $this->any = $any;
      $this->FactoryType = $FactoryType;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \MSBios\IaaI\Exception
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return QName
     */
    public function getFactoryType()
    {
      return $this->FactoryType;
    }

    /**
     * @param QName $FactoryType
     * @return \MSBios\IaaI\Exception
     */
    public function setFactoryType($FactoryType)
    {
      $this->FactoryType = $FactoryType;
      return $this;
    }

}
