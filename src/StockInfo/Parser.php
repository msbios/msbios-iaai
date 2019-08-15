<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\IaaI\StockInfo;
use Zend\Config\Reader\Xml;
use Zend\Filter\StringTrim;
use Zend\Filter\ToInt;
use Zend\InputFilter\Factory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterInterface;

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
        return $this->filter((new Xml)->fromString($stockInfo));
    }

    /**
     * @param array $data
     * @return bool
     */
    protected function filter(array $data)
    {
        /** @var InputFilter $inputFilter */
        $inputFilter = (new Factory)->createInputFilter([
            [
                'name' => 'ItemID',
                'required' => true,
                'filters' => [
                    [
                        'name' => StringTrim::class,
                    ], [
                        'name' => ToInt::class,
                    ],
                ],
            ]
        ]);

        $inputFilter->setData($data)->isValid();
        var_dump($inputFilter->getValues()); die();

        return $inputFilter->setData($data)->isValid();
    }
}