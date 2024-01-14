<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SMSTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SMSTYPE extends AbstractStructBase
{
    /**
     * The NumeroSMS
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
     * - minOccurs: 0
     * - ref: xsd:NumeroSMS
     * @var string|null
     */
    protected ?string $NumeroSMS = null;
    /**
     * The Idioma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Idioma
     * @var string|null
     */
    protected ?string $Idioma = null;
    /**
     * Constructor method for SMSTYPE
     * @uses SMSTYPE::setNumeroSMS()
     * @uses SMSTYPE::setIdioma()
     * @param string $numeroSMS
     * @param string $idioma
     */
    public function __construct(?string $numeroSMS = null, ?string $idioma = null)
    {
        $this
            ->setNumeroSMS($numeroSMS)
            ->setIdioma($idioma);
    }
    /**
     * Get NumeroSMS value
     * @return string|null
     */
    public function getNumeroSMS(): ?string
    {
        return $this->NumeroSMS;
    }
    /**
     * Set NumeroSMS value
     * @param string $numeroSMS
     * @return \StructType\SMSTYPE
     */
    public function setNumeroSMS(?string $numeroSMS = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroSMS) && !is_string($numeroSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSMS, true), gettype($numeroSMS)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($numeroSMS) && mb_strlen((string) $numeroSMS) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $numeroSMS)), __LINE__);
        }
        $this->NumeroSMS = $numeroSMS;
        
        return $this;
    }
    /**
     * Get Idioma value
     * @return string|null
     */
    public function getIdioma(): ?string
    {
        return $this->Idioma;
    }
    /**
     * Set Idioma value
     * @uses \EnumType\Idioma::valueIsValid()
     * @uses \EnumType\Idioma::getValidValues()
     * @throws InvalidArgumentException
     * @param string $idioma
     * @return \StructType\SMSTYPE
     */
    public function setIdioma(?string $idioma = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Idioma::valueIsValid($idioma)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Idioma', is_array($idioma) ? implode(', ', $idioma) : var_export($idioma, true), implode(', ', \EnumType\Idioma::getValidValues())), __LINE__);
        }
        $this->Idioma = $idioma;
        
        return $this;
    }
}
