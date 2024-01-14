<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bultos StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Bultos extends AbstractStructBase
{
    /**
     * The Bulto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\DATOSBULTOTYPE[]
     */
    protected ?array $Bulto = null;
    /**
     * Constructor method for Bultos
     * @uses Bultos::setBulto()
     * @param \StructType\DATOSBULTOTYPE[] $bulto
     */
    public function __construct(?array $bulto = null)
    {
        $this
            ->setBulto($bulto);
    }
    /**
     * Get Bulto value
     * @return \StructType\DATOSBULTOTYPE[]
     */
    public function getBulto(): ?array
    {
        return $this->Bulto;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBulto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBulto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoForArrayConstraintFromSetBulto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bultosBultoItem) {
            // validation for constraint: itemType
            if (!$bultosBultoItem instanceof \StructType\DATOSBULTOTYPE) {
                $invalidValues[] = is_object($bultosBultoItem) ? get_class($bultosBultoItem) : sprintf('%s(%s)', gettype($bultosBultoItem), var_export($bultosBultoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bulto property can only contain items of type \StructType\DATOSBULTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Bulto value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOTYPE[] $bulto
     * @return \StructType\Bultos
     */
    public function setBulto(?array $bulto = null): self
    {
        // validation for constraint: array
        if ('' !== ($bultoArrayErrorMessage = self::validateBultoForArrayConstraintFromSetBulto($bulto))) {
            throw new InvalidArgumentException($bultoArrayErrorMessage, __LINE__);
        }
        $this->Bulto = $bulto;
        
        return $this;
    }
    /**
     * Add item to Bulto value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOTYPE $item
     * @return \StructType\Bultos
     */
    public function addToBulto(\StructType\DATOSBULTOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSBULTOTYPE) {
            throw new InvalidArgumentException(sprintf('The Bulto property can only contain items of type \StructType\DATOSBULTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bulto[] = $item;
        
        return $this;
    }
}
