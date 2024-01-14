<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IDENTIFICACIONTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IDENTIFICACIONTYPE extends IDENTIFICACIONREDUCIDOTYPE
{
    /**
     * The PersonaContacto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:PersonaContacto
     * @var string|null
     */
    protected ?string $PersonaContacto = null;
    /**
     * Constructor method for IDENTIFICACIONTYPE
     * @uses IDENTIFICACIONTYPE::setPersonaContacto()
     * @param string $personaContacto
     */
    public function __construct(?string $personaContacto = null)
    {
        $this
            ->setPersonaContacto($personaContacto);
    }
    /**
     * Get PersonaContacto value
     * @return string|null
     */
    public function getPersonaContacto(): ?string
    {
        return $this->PersonaContacto;
    }
    /**
     * Set PersonaContacto value
     * @param string $personaContacto
     * @return \StructType\IDENTIFICACIONTYPE
     */
    public function setPersonaContacto(?string $personaContacto = null): self
    {
        // validation for constraint: string
        if (!is_null($personaContacto) && !is_string($personaContacto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaContacto, true), gettype($personaContacto)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($personaContacto) && mb_strlen((string) $personaContacto) > 150) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen((string) $personaContacto)), __LINE__);
        }
        $this->PersonaContacto = $personaContacto;
        
        return $this;
    }
}
