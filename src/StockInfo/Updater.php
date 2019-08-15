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
        /** @var RowGatewayInterface $row */
        $row = Model::factory($this->parser->parse($item));
        $row->save();
        return $row;
    }

    /**
     * @param array $items
     * @return iterable
     */
    public function updateItems(array $items): iterable
    {
        /** @var array $item */
        foreach ($items as $item) {
            yield $this->updateItem($item);
        }
    }
}