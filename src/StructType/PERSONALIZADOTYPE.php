<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PERSONALIZADOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PERSONALIZADOTYPE extends AbstractStructBase
{
    /**
     * The Clave
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Clave = null;
    /**
     * The Valor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Valor = null;
    /**
     * Constructor method for PERSONALIZADOTYPE
     * @uses PERSONALIZADOTYPE::setClave()
     * @uses PERSONALIZADOTYPE::setValor()
     * @param string $clave
     * @param string $valor
     */
    public function __construct(?string $clave = null, ?string $valor = null)
    {
        $this
            ->setClave($clave)
            ->setValor($valor);
    }
    /**
     * Get Clave value
     * @return string|null
     */
    public function getClave(): ?string
    {
        return $this->Clave;
    }
    /**
     * Set Clave value
     * @param string $clave
     * @return \StructType\PERSONALIZADOTYPE
     */
    public function setClave(?string $clave = null): self
    {
        // validation for constraint: string
        if (!is_null($clave) && !is_string($clave)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clave, true), gettype($clave)), __LINE__);
        }
        $this->Clave = $clave;
        
        return $this;
    }
    /**
     * Get Valor value
     * @return string|null
     */
    public function getValor(): ?string
    {
        return $this->Valor;
    }
    /**
     * Set Valor value
     * @param string $valor
     * @return \StructType\PERSONALIZADOTYPE
     */
    public function setValor(?string $valor = null): self
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        $this->Valor = $valor;
        
        return $this;
    }
}
