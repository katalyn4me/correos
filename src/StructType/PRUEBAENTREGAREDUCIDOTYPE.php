<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PRUEBAENTREGAREDUCIDOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PRUEBAENTREGAREDUCIDOTYPE extends AbstractStructBase
{
    /**
     * The Formato
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Formato
     * @var string|null
     */
    protected ?string $Formato = null;
    /**
     * Constructor method for PRUEBAENTREGAREDUCIDOTYPE
     * @uses PRUEBAENTREGAREDUCIDOTYPE::setFormato()
     * @param string $formato
     */
    public function __construct(?string $formato = null)
    {
        $this
            ->setFormato($formato);
    }
    /**
     * Get Formato value
     * @return string|null
     */
    public function getFormato(): ?string
    {
        return $this->Formato;
    }
    /**
     * Set Formato value
     * @uses \EnumType\Formato::valueIsValid()
     * @uses \EnumType\Formato::getValidValues()
     * @throws InvalidArgumentException
     * @param string $formato
     * @return \StructType\PRUEBAENTREGAREDUCIDOTYPE
     */
    public function setFormato(?string $formato = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Formato::valueIsValid($formato)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Formato', is_array($formato) ? implode(', ', $formato) : var_export($formato, true), implode(', ', \EnumType\Formato::getValidValues())), __LINE__);
        }
        $this->Formato = $formato;
        
        return $this;
    }
}
