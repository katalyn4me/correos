<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITEMSORIGINALESTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ITEMSORIGINALESTYPE extends AbstractStructBase
{
    /**
     * The ItemOriginal
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ITEMORIGINALTYPE[]
     */
    protected ?array $ItemOriginal = null;
    /**
     * Constructor method for ITEMSORIGINALESTYPE
     * @uses ITEMSORIGINALESTYPE::setItemOriginal()
     * @param \StructType\ITEMORIGINALTYPE[] $itemOriginal
     */
    public function __construct(?array $itemOriginal = null)
    {
        $this
            ->setItemOriginal($itemOriginal);
    }
    /**
     * Get ItemOriginal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ITEMORIGINALTYPE[]
     */
    public function getItemOriginal(): ?array
    {
        return $this->ItemOriginal ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setItemOriginal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemOriginal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemOriginalForArrayConstraintFromSetItemOriginal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $iTEMSORIGINALESTYPEItemOriginalItem) {
            // validation for constraint: itemType
            if (!$iTEMSORIGINALESTYPEItemOriginalItem instanceof \StructType\ITEMORIGINALTYPE) {
                $invalidValues[] = is_object($iTEMSORIGINALESTYPEItemOriginalItem) ? get_class($iTEMSORIGINALESTYPEItemOriginalItem) : sprintf('%s(%s)', gettype($iTEMSORIGINALESTYPEItemOriginalItem), var_export($iTEMSORIGINALESTYPEItemOriginalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemOriginal property can only contain items of type \StructType\ITEMORIGINALTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemOriginal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ITEMORIGINALTYPE[] $itemOriginal
     * @return \StructType\ITEMSORIGINALESTYPE
     */
    public function setItemOriginal(?array $itemOriginal = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemOriginalArrayErrorMessage = self::validateItemOriginalForArrayConstraintFromSetItemOriginal($itemOriginal))) {
            throw new InvalidArgumentException($itemOriginalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($itemOriginal) && count($itemOriginal) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($itemOriginal)), __LINE__);
        }
        if (is_null($itemOriginal) || (is_array($itemOriginal) && empty($itemOriginal))) {
            unset($this->ItemOriginal);
        } else {
            $this->ItemOriginal = $itemOriginal;
        }
        
        return $this;
    }
    /**
     * Add item to ItemOriginal value
     * @throws InvalidArgumentException
     * @param \StructType\ITEMORIGINALTYPE $item
     * @return \StructType\ITEMSORIGINALESTYPE
     */
    public function addToItemOriginal(\StructType\ITEMORIGINALTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ITEMORIGINALTYPE) {
            throw new InvalidArgumentException(sprintf('The ItemOriginal property can only contain items of type \StructType\ITEMORIGINALTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->ItemOriginal) && count($this->ItemOriginal) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->ItemOriginal)), __LINE__);
        }
        $this->ItemOriginal[] = $item;
        
        return $this;
    }
}
