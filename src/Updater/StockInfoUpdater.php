<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\Updater;

use MSBios\IaaI\Parser\StockInfoParser;

/**
 * Class StockInfoUpdater
 * @package MSBios\IaaI\Updater
 */
class StockInfoUpdater
{
    /** @var StockInfoParser */
    protected $parser;

    /**
     * StockInfoUpdater constructor.
     * @param StockInfoParser $parser
     */
    public function __construct(StockInfoParser $parser)
    {
        $this->parser = $parser;
    }

    /**
     * @param string $item
     * @return array
     */
    public function updateItem(string $item): array
    {
        /** @var array $result */
        return $this->parser->parse($item);
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