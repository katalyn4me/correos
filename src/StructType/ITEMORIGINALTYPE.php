<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ITEMORIGINALTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ITEMORIGINALTYPE extends AbstractStructBase
{
    /**
     * The IdentificadorEnvioOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdentificadorEnvioOriginal = null;
    /**
     * The IdItemEnvioOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdItemEnvioOriginal = null;
    /**
     * The OperadorEnvioOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $OperadorEnvioOriginal = null;
    /**
     * Constructor method for ITEMORIGINALTYPE
     * @uses ITEMORIGINALTYPE::setIdentificadorEnvioOriginal()
     * @uses ITEMORIGINALTYPE::setIdItemEnvioOriginal()
     * @uses ITEMORIGINALTYPE::setOperadorEnvioOriginal()
     * @param string $identificadorEnvioOriginal
     * @param string $idItemEnvioOriginal
     * @param string $operadorEnvioOriginal
     */
    public function __construct(?string $identificadorEnvioOriginal = null, ?string $idItemEnvioOriginal = null, ?string $operadorEnvioOriginal = null)
    {
        $this
            ->setIdentificadorEnvioOriginal($identificadorEnvioOriginal)
            ->setIdItemEnvioOriginal($idItemEnvioOriginal)
            ->setOperadorEnvioOriginal($operadorEnvioOriginal);
    }
    /**
     * Get IdentificadorEnvioOriginal value
     * @return string|null
     */
    public function getIdentificadorEnvioOriginal(): ?string
    {
        return $this->IdentificadorEnvioOriginal;
    }
    /**
     * Set IdentificadorEnvioOriginal value
     * @param string $identificadorEnvioOriginal
     * @return \StructType\ITEMORIGINALTYPE
     */
    public function setIdentificadorEnvioOriginal(?string $identificadorEnvioOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($identificadorEnvioOriginal) && !is_string($identificadorEnvioOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorEnvioOriginal, true), gettype($identificadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorEnvioOriginal) && mb_strlen((string) $identificadorEnvioOriginal) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $identificadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorEnvioOriginal) && mb_strlen((string) $identificadorEnvioOriginal) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $identificadorEnvioOriginal)), __LINE__);
        }
        $this->IdentificadorEnvioOriginal = $identificadorEnvioOriginal;
        
        return $this;
    }
    /**
     * Get IdItemEnvioOriginal value
     * @return string|null
     */
    public function getIdItemEnvioOriginal(): ?string
    {
        return $this->IdItemEnvioOriginal;
    }
    /**
     * Set IdItemEnvioOriginal value
     * @param string $idItemEnvioOriginal
     * @return \StructType\ITEMORIGINALTYPE
     */
    public function setIdItemEnvioOriginal(?string $idItemEnvioOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($idItemEnvioOriginal) && !is_string($idItemEnvioOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idItemEnvioOriginal, true), gettype($idItemEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($idItemEnvioOriginal) && mb_strlen((string) $idItemEnvioOriginal) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $idItemEnvioOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($idItemEnvioOriginal) && mb_strlen((string) $idItemEnvioOriginal) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $idItemEnvioOriginal)), __LINE__);
        }
        $this->IdItemEnvioOriginal = $idItemEnvioOriginal;
        
        return $this;
    }
    /**
     * Get OperadorEnvioOriginal value
     * @return string|null
     */
    public function getOperadorEnvioOriginal(): ?string
    {
        return $this->OperadorEnvioOriginal;
    }
    /**
     * Set OperadorEnvioOriginal value
     * @param string $operadorEnvioOriginal
     * @return \StructType\ITEMORIGINALTYPE
     */
    public function setOperadorEnvioOriginal(?string $operadorEnvioOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($operadorEnvioOriginal) && !is_string($operadorEnvioOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operadorEnvioOriginal, true), gettype($operadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($operadorEnvioOriginal) && mb_strlen((string) $operadorEnvioOriginal) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $operadorEnvioOriginal)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($operadorEnvioOriginal) && mb_strlen((string) $operadorEnvioOriginal) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $operadorEnvioOriginal)), __LINE__);
        }
        $this->OperadorEnvioOriginal = $operadorEnvioOriginal;
        
        return $this;
    }
}
