<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescAduanera StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DescAduanera extends AbstractStructBase
{
    /**
     * The DATOSADUANA
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * @var \StructType\DATOSADUANATYPE[]
     */
    protected ?array $DATOSADUANA = null;
    /**
     * Constructor method for DescAduanera
     * @uses DescAduanera::setDATOSADUANA()
     * @param \StructType\DATOSADUANATYPE[] $dATOSADUANA
     */
    public function __construct(?array $dATOSADUANA = null)
    {
        $this
            ->setDATOSADUANA($dATOSADUANA);
    }
    /**
     * Get DATOSADUANA value
     * @return \StructType\DATOSADUANATYPE[]
     */
    public function getDATOSADUANA(): ?array
    {
        return $this->DATOSADUANA;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDATOSADUANA method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDATOSADUANA method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDATOSADUANAForArrayConstraintFromSetDATOSADUANA(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $descAduaneraDATOSADUANAItem) {
            // validation for constraint: itemType
            if (!$descAduaneraDATOSADUANAItem instanceof \StructType\DATOSADUANATYPE) {
                $invalidValues[] = is_object($descAduaneraDATOSADUANAItem) ? get_class($descAduaneraDATOSADUANAItem) : sprintf('%s(%s)', gettype($descAduaneraDATOSADUANAItem), var_export($descAduaneraDATOSADUANAItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DATOSADUANA property can only contain items of type \StructType\DATOSADUANATYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DATOSADUANA value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSADUANATYPE[] $dATOSADUANA
     * @return \StructType\DescAduanera
     */
    public function setDATOSADUANA(?array $dATOSADUANA = null): self
    {
        // validation for constraint: array
        if ('' !== ($dATOSADUANAArrayErrorMessage = self::validateDATOSADUANAForArrayConstraintFromSetDATOSADUANA($dATOSADUANA))) {
            throw new InvalidArgumentException($dATOSADUANAArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($dATOSADUANA) && count($dATOSADUANA) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($dATOSADUANA)), __LINE__);
        }
        $this->DATOSADUANA = $dATOSADUANA;
        
        return $this;
    }
    /**
     * Add item to DATOSADUANA value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSADUANATYPE $item
     * @return \StructType\DescAduanera
     */
    public function addToDATOSADUANA(\StructType\DATOSADUANATYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSADUANATYPE) {
            throw new InvalidArgumentException(sprintf('The DATOSADUANA property can only contain items of type \StructType\DATOSADUANATYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->DATOSADUANA) && count($this->DATOSADUANA) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->DATOSADUANA)), __LINE__);
        }
        $this->DATOSADUANA[] = $item;
        
        return $this;
    }
}
