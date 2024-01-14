<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pesos StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pesos extends AbstractStructBase
{
    /**
     * The Peso
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * @var \StructType\PESOTYPE[]
     */
    protected ?array $Peso = null;
    /**
     * Constructor method for Pesos
     * @uses Pesos::setPeso()
     * @param \StructType\PESOTYPE[] $peso
     */
    public function __construct(?array $peso = null)
    {
        $this
            ->setPeso($peso);
    }
    /**
     * Get Peso value
     * @return \StructType\PESOTYPE[]
     */
    public function getPeso(): ?array
    {
        return $this->Peso;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPeso method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeso method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePesoForArrayConstraintFromSetPeso(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pesosPesoItem) {
            // validation for constraint: itemType
            if (!$pesosPesoItem instanceof \StructType\PESOTYPE) {
                $invalidValues[] = is_object($pesosPesoItem) ? get_class($pesosPesoItem) : sprintf('%s(%s)', gettype($pesosPesoItem), var_export($pesosPesoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Peso property can only contain items of type \StructType\PESOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Peso value
     * @throws InvalidArgumentException
     * @param \StructType\PESOTYPE[] $peso
     * @return \StructType\Pesos
     */
    public function setPeso(?array $peso = null): self
    {
        // validation for constraint: array
        if ('' !== ($pesoArrayErrorMessage = self::validatePesoForArrayConstraintFromSetPeso($peso))) {
            throw new InvalidArgumentException($pesoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($peso) && count($peso) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($peso)), __LINE__);
        }
        $this->Peso = $peso;
        
        return $this;
    }
    /**
     * Add item to Peso value
     * @throws InvalidArgumentException
     * @param \StructType\PESOTYPE $item
     * @return \StructType\Pesos
     */
    public function addToPeso(\StructType\PESOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PESOTYPE) {
            throw new InvalidArgumentException(sprintf('The Peso property can only contain items of type \StructType\PESOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Peso) && count($this->Peso) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Peso)), __LINE__);
        }
        $this->Peso[] = $item;
        
        return $this;
    }
}
