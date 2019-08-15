<?php

namespace MSBios\IaaI;

/**
 * Class LoginResponse
 * @package MSBios\IaaI
 */
class LoginResponse
{
    /**
     * @var string $LoginResult
     */
    protected $LoginResult = null;

    /**
     * @param string $LoginResult
     */
    public function __construct($LoginResult)
    {
      $this->LoginResult = $LoginResult;
    }

    /**
     * @return string
     */
    public function getLoginResult()
    {
      return $this->LoginResult;
    }

    /**
     * @param string $LoginResult
     * @return \MSBios\IaaI\LoginResponse
     */
    public function setLoginResult($LoginResult)
    {
      $this->LoginResult = $LoginResult;
      return $this;
    }

}
