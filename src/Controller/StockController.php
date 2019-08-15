<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\Controller;

use MSBios\IaaI\ClientInterface;
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

    /**
     * StockController constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     *
     */
    public function synchAction(): void
    {
        // var_dump($this->client->Login());
    }
}