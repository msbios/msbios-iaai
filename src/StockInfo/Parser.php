<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\StockInfo;
use Zend\Config\Reader\Xml;

/**
 * Class Parser
 * @package MSBios\IaaI\StockInfo
 */
class Parser
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