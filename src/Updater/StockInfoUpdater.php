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
     */
    public function updateItem(string $item)
    {
        /** @var array $result */
        $result = $this->parser->parse($item);

        r($result); die;
    }

    /**
     * @param array $items
     * @return StockInfoUpdater
     */
    public function updateItems(array $items): self
    {
        /** @var array $item */
        foreach ($items as $item) {
            $this->updateItem($item);
        }

        return $this;
    }
}