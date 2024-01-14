<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FACTURAORIGINALTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FACTURAORIGINALTYPE extends AbstractStructBase
{
    /**
     * The IdentificadorFacturaOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdentificadorFacturaOriginal = null;
    /**
     * The NumeroFacturaOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NumeroFacturaOriginal = null;
    /**
     * The FechaFacturaOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FechaFacturaOriginal = null;
    /**
     * Constructor method for FACTURAORIGINALTYPE
     * @uses FACTURAORIGINALTYPE::setIdentificadorFacturaOriginal()
     * @uses FACTURAORIGINALTYPE::setNumeroFacturaOriginal()
     * @uses FACTURAORIGINALTYPE::setFechaFacturaOriginal()
     * @param string $identificadorFacturaOriginal
     * @param string $numeroFacturaOriginal
     * @param string $fechaFacturaOriginal
     */
    public function __construct(?string $identificadorFacturaOriginal = null, ?string $numeroFacturaOriginal = null, ?string $fechaFacturaOriginal = null)
    {
        $this
            ->setIdentificadorFacturaOriginal($identificadorFacturaOriginal)
            ->setNumeroFacturaOriginal($numeroFacturaOriginal)
            ->setFechaFacturaOriginal($fechaFacturaOriginal);
    }
    /**
     * Get IdentificadorFacturaOriginal value
     * @return string|null
     */
    public function getIdentificadorFacturaOriginal(): ?string
    {
        return $this->IdentificadorFacturaOriginal;
    }
    /**
     * Set IdentificadorFacturaOriginal value
     * @param string $identificadorFacturaOriginal
     * @return \StructType\FACTURAORIGINALTYPE
     */
    public function setIdentificadorFacturaOriginal(?string $identificadorFacturaOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($identificadorFacturaOriginal) && !is_string($identificadorFacturaOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorFacturaOriginal, true), gettype($identificadorFacturaOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorFacturaOriginal) && mb_strlen((string) $identificadorFacturaOriginal) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $identificadorFacturaOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorFacturaOriginal) && mb_strlen((string) $identificadorFacturaOriginal) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $identificadorFacturaOriginal)), __LINE__);
        }
        $this->IdentificadorFacturaOriginal = $identificadorFacturaOriginal;
        
        return $this;
    }
    /**
     * Get NumeroFacturaOriginal value
     * @return string|null
     */
    public function getNumeroFacturaOriginal(): ?string
    {
        return $this->NumeroFacturaOriginal;
    }
    /**
     * Set NumeroFacturaOriginal value
     * @param string $numeroFacturaOriginal
     * @return \StructType\FACTURAORIGINALTYPE
     */
    public function setNumeroFacturaOriginal(?string $numeroFacturaOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroFacturaOriginal) && !is_string($numeroFacturaOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroFacturaOriginal, true), gettype($numeroFacturaOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($numeroFacturaOriginal) && mb_strlen((string) $numeroFacturaOriginal) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $numeroFacturaOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroFacturaOriginal) && mb_strlen((string) $numeroFacturaOriginal) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $numeroFacturaOriginal)), __LINE__);
        }
        $this->NumeroFacturaOriginal = $numeroFacturaOriginal;
        
        return $this;
    }
    /**
     * Get FechaFacturaOriginal value
     * @return string|null
     */
    public function getFechaFacturaOriginal(): ?string
    {
        return $this->FechaFacturaOriginal;
    }
    /**
     * Set FechaFacturaOriginal value
     * @param string $fechaFacturaOriginal
     * @return \StructType\FACTURAORIGINALTYPE
     */
    public function setFechaFacturaOriginal(?string $fechaFacturaOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaFacturaOriginal) && !is_string($fechaFacturaOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaFacturaOriginal, true), gettype($fechaFacturaOriginal)), __LINE__);
        }
        $this->FechaFacturaOriginal = $fechaFacturaOriginal;
        
        return $this;
    }
}
