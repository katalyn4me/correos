<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BultosSimples StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BultosSimples extends AbstractStructBase
{
    /**
     * The BultoSimple
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\DATOSBULTOSIMPLETYPE[]
     */
    protected ?array $BultoSimple = null;
    /**
     * Constructor method for BultosSimples
     * @uses BultosSimples::setBultoSimple()
     * @param \StructType\DATOSBULTOSIMPLETYPE[] $bultoSimple
     */
    public function __construct(?array $bultoSimple = null)
    {
        $this
            ->setBultoSimple($bultoSimple);
    }
    /**
     * Get BultoSimple value
     * @return \StructType\DATOSBULTOSIMPLETYPE[]
     */
    public function getBultoSimple(): ?array
    {
        return $this->BultoSimple;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBultoSimple method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBultoSimple method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoSimpleForArrayConstraintFromSetBultoSimple(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bultosSimplesBultoSimpleItem) {
            // validation for constraint: itemType
            if (!$bultosSimplesBultoSimpleItem instanceof \StructType\DATOSBULTOSIMPLETYPE) {
                $invalidValues[] = is_object($bultosSimplesBultoSimpleItem) ? get_class($bultosSimplesBultoSimpleItem) : sprintf('%s(%s)', gettype($bultosSimplesBultoSimpleItem), var_export($bultosSimplesBultoSimpleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BultoSimple property can only contain items of type \StructType\DATOSBULTOSIMPLETYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BultoSimple value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOSIMPLETYPE[] $bultoSimple
     * @return \StructType\BultosSimples
     */
    public function setBultoSimple(?array $bultoSimple = null): self
    {
        // validation for constraint: array
        if ('' !== ($bultoSimpleArrayErrorMessage = self::validateBultoSimpleForArrayConstraintFromSetBultoSimple($bultoSimple))) {
            throw new InvalidArgumentException($bultoSimpleArrayErrorMessage, __LINE__);
        }
        $this->BultoSimple = $bultoSimple;
        
        return $this;
    }
    /**
     * Add item to BultoSimple value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOSIMPLETYPE $item
     * @return \StructType\BultosSimples
     */
    public function addToBultoSimple(\StructType\DATOSBULTOSIMPLETYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSBULTOSIMPLETYPE) {
            throw new InvalidArgumentException(sprintf('The BultoSimple property can only contain items of type \StructType\DATOSBULTOSIMPLETYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BultoSimple[] = $item;
        
        return $this;
    }
}
