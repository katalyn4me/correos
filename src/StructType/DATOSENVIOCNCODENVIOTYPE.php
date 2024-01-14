<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSENVIOCNCODENVIOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSENVIOCNCODENVIOTYPE extends DATOSENVIOCNTYPE
{
    /**
     * The CodEnvio
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - ref: xsd:CodEnvio
     * @var string|null
     */
    protected ?string $CodEnvio = null;
    /**
     * Constructor method for DATOSENVIOCNCODENVIOTYPE
     * @uses DATOSENVIOCNCODENVIOTYPE::setCodEnvio()
     * @param string $codEnvio
     */
    public function __construct(?string $codEnvio = null)
    {
        $this
            ->setCodEnvio($codEnvio);
    }
    /**
     * Get CodEnvio value
     * @return string|null
     */
    public function getCodEnvio(): ?string
    {
        return $this->CodEnvio;
    }
    /**
     * Set CodEnvio value
     * @param string $codEnvio
     * @return \StructType\DATOSENVIOCNCODENVIOTYPE
     */
    public function setCodEnvio(?string $codEnvio = null): self
    {
        // validation for constraint: string
        if (!is_null($codEnvio) && !is_string($codEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEnvio, true), gettype($codEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codEnvio) && mb_strlen((string) $codEnvio) > 23) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen((string) $codEnvio)), __LINE__);
        }
        $this->CodEnvio = $codEnvio;
        
        return $this;
    }
}
