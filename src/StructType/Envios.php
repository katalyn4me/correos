<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Envios StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Envios extends AbstractStructBase
{
    /**
     * The Envio
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\DATOSENVIOMULTIBULTOTYPE[]
     */
    protected ?array $Envio = null;
    /**
     * Constructor method for Envios
     * @uses Envios::setEnvio()
     * @param \StructType\DATOSENVIOMULTIBULTOTYPE[] $envio
     */
    public function __construct(?array $envio = null)
    {
        $this
            ->setEnvio($envio);
    }
    /**
     * Get Envio value
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE[]
     */
    public function getEnvio(): ?array
    {
        return $this->Envio;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEnvio method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEnvio method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEnvioForArrayConstraintFromSetEnvio(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $enviosEnvioItem) {
            // validation for constraint: itemType
            if (!$enviosEnvioItem instanceof \StructType\DATOSENVIOMULTIBULTOTYPE) {
                $invalidValues[] = is_object($enviosEnvioItem) ? get_class($enviosEnvioItem) : sprintf('%s(%s)', gettype($enviosEnvioItem), var_export($enviosEnvioItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Envio property can only contain items of type \StructType\DATOSENVIOMULTIBULTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Envio value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSENVIOMULTIBULTOTYPE[] $envio
     * @return \StructType\Envios
     */
    public function setEnvio(?array $envio = null): self
    {
        // validation for constraint: array
        if ('' !== ($envioArrayErrorMessage = self::validateEnvioForArrayConstraintFromSetEnvio($envio))) {
            throw new InvalidArgumentException($envioArrayErrorMessage, __LINE__);
        }
        $this->Envio = $envio;
        
        return $this;
    }
    /**
     * Add item to Envio value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSENVIOMULTIBULTOTYPE $item
     * @return \StructType\Envios
     */
    public function addToEnvio(\StructType\DATOSENVIOMULTIBULTOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSENVIOMULTIBULTOTYPE) {
            throw new InvalidArgumentException(sprintf('The Envio property can only contain items of type \StructType\DATOSENVIOMULTIBULTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Envio[] = $item;
        
        return $this;
    }
}
