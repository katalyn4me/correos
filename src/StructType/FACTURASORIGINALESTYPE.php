<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FACTURASORIGINALESTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FACTURASORIGINALESTYPE extends AbstractStructBase
{
    /**
     * The FacturaOriginal
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FACTURAORIGINALTYPE[]
     */
    protected ?array $FacturaOriginal = null;
    /**
     * Constructor method for FACTURASORIGINALESTYPE
     * @uses FACTURASORIGINALESTYPE::setFacturaOriginal()
     * @param \StructType\FACTURAORIGINALTYPE[] $facturaOriginal
     */
    public function __construct(?array $facturaOriginal = null)
    {
        $this
            ->setFacturaOriginal($facturaOriginal);
    }
    /**
     * Get FacturaOriginal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FACTURAORIGINALTYPE[]
     */
    public function getFacturaOriginal(): ?array
    {
        return $this->FacturaOriginal ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFacturaOriginal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFacturaOriginal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFacturaOriginalForArrayConstraintFromSetFacturaOriginal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fACTURASORIGINALESTYPEFacturaOriginalItem) {
            // validation for constraint: itemType
            if (!$fACTURASORIGINALESTYPEFacturaOriginalItem instanceof \StructType\FACTURAORIGINALTYPE) {
                $invalidValues[] = is_object($fACTURASORIGINALESTYPEFacturaOriginalItem) ? get_class($fACTURASORIGINALESTYPEFacturaOriginalItem) : sprintf('%s(%s)', gettype($fACTURASORIGINALESTYPEFacturaOriginalItem), var_export($fACTURASORIGINALESTYPEFacturaOriginalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FacturaOriginal property can only contain items of type \StructType\FACTURAORIGINALTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FacturaOriginal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\FACTURAORIGINALTYPE[] $facturaOriginal
     * @return \StructType\FACTURASORIGINALESTYPE
     */
    public function setFacturaOriginal(?array $facturaOriginal = null): self
    {
        // validation for constraint: array
        if ('' !== ($facturaOriginalArrayErrorMessage = self::validateFacturaOriginalForArrayConstraintFromSetFacturaOriginal($facturaOriginal))) {
            throw new InvalidArgumentException($facturaOriginalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($facturaOriginal) && count($facturaOriginal) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($facturaOriginal)), __LINE__);
        }
        if (is_null($facturaOriginal) || (is_array($facturaOriginal) && empty($facturaOriginal))) {
            unset($this->FacturaOriginal);
        } else {
            $this->FacturaOriginal = $facturaOriginal;
        }
        
        return $this;
    }
    /**
     * Add item to FacturaOriginal value
     * @throws InvalidArgumentException
     * @param \StructType\FACTURAORIGINALTYPE $item
     * @return \StructType\FACTURASORIGINALESTYPE
     */
    public function addToFacturaOriginal(\StructType\FACTURAORIGINALTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FACTURAORIGINALTYPE) {
            throw new InvalidArgumentException(sprintf('The FacturaOriginal property can only contain items of type \StructType\FACTURAORIGINALTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->FacturaOriginal) && count($this->FacturaOriginal) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->FacturaOriginal)), __LINE__);
        }
        $this->FacturaOriginal[] = $item;
        
        return $this;
    }
}
