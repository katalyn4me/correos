<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSBULTOERRORTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSBULTOERRORTYPE extends AbstractStructBase
{
    /**
     * The NumBulto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NumBulto
     * @var int|null
     */
    protected ?int $NumBulto = null;
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Error
     * @var string|null
     */
    protected ?string $Error = null;
    /**
     * The CodEnvio
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodEnvio
     * @var string|null
     */
    protected ?string $CodEnvio = null;
    /**
     * The DescError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DescError
     * @var string|null
     */
    protected ?string $DescError = null;
    /**
     * Constructor method for DATOSBULTOERRORTYPE
     * @uses DATOSBULTOERRORTYPE::setNumBulto()
     * @uses DATOSBULTOERRORTYPE::setError()
     * @uses DATOSBULTOERRORTYPE::setCodEnvio()
     * @uses DATOSBULTOERRORTYPE::setDescError()
     * @param int $numBulto
     * @param string $error
     * @param string $codEnvio
     * @param string $descError
     */
    public function __construct(?int $numBulto = null, ?string $error = null, ?string $codEnvio = null, ?string $descError = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setError($error)
            ->setCodEnvio($codEnvio)
            ->setDescError($descError);
    }
    /**
     * Get NumBulto value
     * @return int|null
     */
    public function getNumBulto(): ?int
    {
        return $this->NumBulto;
    }
    /**
     * Set NumBulto value
     * @param int $numBulto
     * @return \StructType\DATOSBULTOERRORTYPE
     */
    public function setNumBulto(?int $numBulto = null): self
    {
        // validation for constraint: int
        if (!is_null($numBulto) && !(is_int($numBulto) || ctype_digit($numBulto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numBulto, true), gettype($numBulto)), __LINE__);
        }
        $this->NumBulto = $numBulto;
        
        return $this;
    }
    /**
     * Get Error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $error
     * @return \StructType\DATOSBULTOERRORTYPE
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->Error = $error;
        
        return $this;
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
     * @return \StructType\DATOSBULTOERRORTYPE
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
    /**
     * Get DescError value
     * @return string|null
     */
    public function getDescError(): ?string
    {
        return $this->DescError;
    }
    /**
     * Set DescError value
     * @param string $descError
     * @return \StructType\DATOSBULTOERRORTYPE
     */
    public function setDescError(?string $descError = null): self
    {
        // validation for constraint: string
        if (!is_null($descError) && !is_string($descError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descError, true), gettype($descError)), __LINE__);
        }
        $this->DescError = $descError;
        
        return $this;
    }
}
