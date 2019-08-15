<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\StockInfo;
use Zend\Db\RowGateway\RowGatewayInterface;

/**
 * Class Updater
 * @package MSBios\IaaI\StockInfo
 */
class Updater
{
    /** @var Parser */
    protected $parser;

    /**
     * Updater constructor.
     * @param Parser $parser
     */
    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param string $item
     * @return RowGatewayInterface
     */
    public function updateItem(string $item): RowGatewayInterface
    {

        //var_dump($this->parser->parse($item)['branchphone']); die;

        /** @var RowGatewayInterface $row */
        $row = Model::factory($this->parser->parse($item));
        $row->save();

        var_dump($item); die();

        return $row;
    }

    /**
     * @param array $items
     * @return \Generator
     */
    public function updateItems(array $items)
    {
        /** @var array $item */
        foreach ($items as $item) {
            $this->updateItem($item);
        }
    }
}