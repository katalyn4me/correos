<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PERSONALIZADOSTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PERSONALIZADOSTYPE extends AbstractStructBase
{
    /**
     * The Personalizado
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PERSONALIZADOTYPE[]
     */
    protected ?array $Personalizado = null;
    /**
     * Constructor method for PERSONALIZADOSTYPE
     * @uses PERSONALIZADOSTYPE::setPersonalizado()
     * @param \StructType\PERSONALIZADOTYPE[] $personalizado
     */
    public function __construct(?array $personalizado = null)
    {
        $this
            ->setPersonalizado($personalizado);
    }
    /**
     * Get Personalizado value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PERSONALIZADOTYPE[]
     */
    public function getPersonalizado(): ?array
    {
        return $this->Personalizado ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPersonalizado method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPersonalizado method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonalizadoForArrayConstraintFromSetPersonalizado(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pERSONALIZADOSTYPEPersonalizadoItem) {
            // validation for constraint: itemType
            if (!$pERSONALIZADOSTYPEPersonalizadoItem instanceof \StructType\PERSONALIZADOTYPE) {
                $invalidValues[] = is_object($pERSONALIZADOSTYPEPersonalizadoItem) ? get_class($pERSONALIZADOSTYPEPersonalizadoItem) : sprintf('%s(%s)', gettype($pERSONALIZADOSTYPEPersonalizadoItem), var_export($pERSONALIZADOSTYPEPersonalizadoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Personalizado property can only contain items of type \StructType\PERSONALIZADOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Personalizado value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\PERSONALIZADOTYPE[] $personalizado
     * @return \StructType\PERSONALIZADOSTYPE
     */
    public function setPersonalizado(?array $personalizado = null): self
    {
        // validation for constraint: array
        if ('' !== ($personalizadoArrayErrorMessage = self::validatePersonalizadoForArrayConstraintFromSetPersonalizado($personalizado))) {
            throw new InvalidArgumentException($personalizadoArrayErrorMessage, __LINE__);
        }
        if (is_null($personalizado) || (is_array($personalizado) && empty($personalizado))) {
            unset($this->Personalizado);
        } else {
            $this->Personalizado = $personalizado;
        }
        
        return $this;
    }
    /**
     * Add item to Personalizado value
     * @throws InvalidArgumentException
     * @param \StructType\PERSONALIZADOTYPE $item
     * @return \StructType\PERSONALIZADOSTYPE
     */
    public function addToPersonalizado(\StructType\PERSONALIZADOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PERSONALIZADOTYPE) {
            throw new InvalidArgumentException(sprintf('The Personalizado property can only contain items of type \StructType\PERSONALIZADOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Personalizado[] = $item;
        
        return $this;
    }
}
