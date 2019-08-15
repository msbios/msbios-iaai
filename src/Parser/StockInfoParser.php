<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\Parser;
use Zend\Config\Reader\Xml;

/**
 * Class StockInfoParser
 * @package MSBios\IaaI\Parser
 */
class StockInfoParser
{
    /**
     * @param string $stockInfo
     * @return array
     */
    public function parse(string $stockInfo): array
    {
        return (new Xml)->fromString($stockInfo);
    }
}