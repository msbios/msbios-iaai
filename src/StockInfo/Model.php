<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\StockInfo;

use Zend\Db\RowGateway\RowGateway;
use Zend\Db\TableGateway\Feature\GlobalAdapterFeature;

/**
 * Class Model
 * @package MSBios\IaaI\StockInfo
 */
class Model extends RowGateway
{
    /**
     * @param array $rowData
     * @return Model
     */
    public static function factory(array $rowData = []): self
    {
        return (new self('id', 'stocks', GlobalAdapterFeature::getStaticAdapter()))
            ->populate($rowData);
    }
}