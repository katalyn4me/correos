<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PESOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PESOTYPE extends AbstractStructBase
{
    /**
     * The TipoPeso
     * Meta information extracted from the WSDL
     * - ref: xsd:TipoPeso
     * @var string|null
     */
    protected ?string $TipoPeso = null;
    /**
     * The Valor
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:Valor
     * @var string|null
     */
    protected ?string $Valor = null;
    /**
     * Constructor method for PESOTYPE
     * @uses PESOTYPE::setTipoPeso()
     * @uses PESOTYPE::setValor()
     * @param string $tipoPeso
     * @param string $valor
     */
    public function __construct(?string $tipoPeso = null, ?string $valor = null)
    {
        $this
            ->setTipoPeso($tipoPeso)
            ->setValor($valor);
    }
    /**
     * Get TipoPeso value
     * @return string|null
     */
    public function getTipoPeso(): ?string
    {
        return $this->TipoPeso;
    }
    /**
     * Set TipoPeso value
     * @uses \EnumType\TipoPeso::valueIsValid()
     * @uses \EnumType\TipoPeso::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tipoPeso
     * @return \StructType\PESOTYPE
     */
    public function setTipoPeso(?string $tipoPeso = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TipoPeso::valueIsValid($tipoPeso)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TipoPeso', is_array($tipoPeso) ? implode(', ', $tipoPeso) : var_export($tipoPeso, true), implode(', ', \EnumType\TipoPeso::getValidValues())), __LINE__);
        }
        $this->TipoPeso = $tipoPeso;
        
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
     * @return \StructType\PESOTYPE
     */
    public function setValor(?string $valor = null): self
    {
        // validation for constraint: string
        if (!is_null($valor) && !is_string($valor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($valor) && mb_strlen((string) $valor) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $valor)), __LINE__);
        }
        $this->Valor = $valor;
        
        return $this;
    }
}
