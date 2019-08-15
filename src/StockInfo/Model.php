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
     * Model constructor.
     *
     * @inheritdoc
     *
     * @param string $primaryKeyColumn
     * @param string $table
     * @param null $adapterOrSql
     */
    public function __construct($primaryKeyColumn = 'ItemID', $table = 'stocks', $adapterOrSql = null)
    {
        if (null === $adapterOrSql) {
            $adapterOrSql = GlobalAdapterFeature::getStaticAdapter();
        }

        parent::__construct($primaryKeyColumn, $table, $adapterOrSql);
    }

    /**
     * @param array $rowData
     * @return Model
     */
    public static function factory(array $rowData = []): self
    {
        return (new self)->populate($rowData);
    }
}