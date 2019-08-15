<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\Controller;

use MSBios\IaaI\ClientInterface;
use MSBios\IaaI\Login;
use MSBios\IaaI\LoginResponse;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Soap\Client;

/**
 * Class StockController
 * @package MSBios\IaaI\Controller
 */
class StockController extends AbstractActionController
{
    /** @var Client|ClientInterface */
    protected $client;

    /** @var Login */
    protected $login;

    /**
     * StockController constructor.
     * @param Client $client
     * @param Login $login
     */
    public function __construct(Client $client, Login $login)
    {
        $this->client = $client;
        $this->login = $login;
    }

    /**
     * 
     */
    public function synchAction(): void
    {
        /** @var LoginResponse $loginResponse */
        $loginResponse = $this->client->Login($this->login);
        var_dump($loginResponse->getLoginResult());
    }
}