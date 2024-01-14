<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ERRORVALTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ERRORVALTYPE extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - ref: xsd:Error
     * @var string|null
     */
    protected ?string $Error = null;
    /**
     * The DescError
     * Meta information extracted from the WSDL
     * - ref: xsd:DescError
     * @var string|null
     */
    protected ?string $DescError = null;
    /**
     * Constructor method for ERRORVALTYPE
     * @uses ERRORVALTYPE::setError()
     * @uses ERRORVALTYPE::setDescError()
     * @param string $error
     * @param string $descError
     */
    public function __construct(?string $error = null, ?string $descError = null)
    {
        $this
            ->setError($error)
            ->setDescError($descError);
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
     * @return \StructType\ERRORVALTYPE
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
     * @return \StructType\ERRORVALTYPE
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
