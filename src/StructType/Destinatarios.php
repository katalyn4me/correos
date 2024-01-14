<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Destinatarios StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Destinatarios extends AbstractStructBase
{
    /**
     * The Destinatario
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * @var \StructType\DATOSDESTINATARIOCNENVIOTYPE[]
     */
    protected ?array $Destinatario = null;
    /**
     * Constructor method for Destinatarios
     * @uses Destinatarios::setDestinatario()
     * @param \StructType\DATOSDESTINATARIOCNENVIOTYPE[] $destinatario
     */
    public function __construct(?array $destinatario = null)
    {
        $this
            ->setDestinatario($destinatario);
    }
    /**
     * Get Destinatario value
     * @return \StructType\DATOSDESTINATARIOCNENVIOTYPE[]
     */
    public function getDestinatario(): ?array
    {
        return $this->Destinatario;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDestinatario method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDestinatario method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDestinatarioForArrayConstraintFromSetDestinatario(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $destinatariosDestinatarioItem) {
            // validation for constraint: itemType
            if (!$destinatariosDestinatarioItem instanceof \StructType\DATOSDESTINATARIOCNENVIOTYPE) {
                $invalidValues[] = is_object($destinatariosDestinatarioItem) ? get_class($destinatariosDestinatarioItem) : sprintf('%s(%s)', gettype($destinatariosDestinatarioItem), var_export($destinatariosDestinatarioItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Destinatario property can only contain items of type \StructType\DATOSDESTINATARIOCNENVIOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Destinatario value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSDESTINATARIOCNENVIOTYPE[] $destinatario
     * @return \StructType\Destinatarios
     */
    public function setDestinatario(?array $destinatario = null): self
    {
        // validation for constraint: array
        if ('' !== ($destinatarioArrayErrorMessage = self::validateDestinatarioForArrayConstraintFromSetDestinatario($destinatario))) {
            throw new InvalidArgumentException($destinatarioArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($destinatario) && count($destinatario) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($destinatario)), __LINE__);
        }
        $this->Destinatario = $destinatario;
        
        return $this;
    }
    /**
     * Add item to Destinatario value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSDESTINATARIOCNENVIOTYPE $item
     * @return \StructType\Destinatarios
     */
    public function addToDestinatario(\StructType\DATOSDESTINATARIOCNENVIOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSDESTINATARIOCNENVIOTYPE) {
            throw new InvalidArgumentException(sprintf('The Destinatario property can only contain items of type \StructType\DATOSDESTINATARIOCNENVIOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->Destinatario) && count($this->Destinatario) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->Destinatario)), __LINE__);
        }
        $this->Destinatario[] = $item;
        
        return $this;
    }
}
