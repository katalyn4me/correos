<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for REEMBOLSOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class REEMBOLSOTYPE extends AbstractStructBase
{
    /**
     * The TipoReembolso
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - ref: xsd:TipoReembolso
     * @var string|null
     */
    protected ?string $TipoReembolso = null;
    /**
     * The Importe
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Importe
     * @var string|null
     */
    protected ?string $Importe = null;
    /**
     * The NumeroCuenta
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * - ref: xsd:NumeroCuenta
     * @var string|null
     */
    protected ?string $NumeroCuenta = null;
    /**
     * The Transferagrupada
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Transferagrupada
     * @var string|null
     */
    protected ?string $Transferagrupada = null;
    /**
     * Constructor method for REEMBOLSOTYPE
     * @uses REEMBOLSOTYPE::setTipoReembolso()
     * @uses REEMBOLSOTYPE::setImporte()
     * @uses REEMBOLSOTYPE::setNumeroCuenta()
     * @uses REEMBOLSOTYPE::setTransferagrupada()
     * @param string $tipoReembolso
     * @param string $importe
     * @param string $numeroCuenta
     * @param string $transferagrupada
     */
    public function __construct(?string $tipoReembolso = null, ?string $importe = null, ?string $numeroCuenta = null, ?string $transferagrupada = null)
    {
        $this
            ->setTipoReembolso($tipoReembolso)
            ->setImporte($importe)
            ->setNumeroCuenta($numeroCuenta)
            ->setTransferagrupada($transferagrupada);
    }
    /**
     * Get TipoReembolso value
     * @return string|null
     */
    public function getTipoReembolso(): ?string
    {
        return $this->TipoReembolso;
    }
    /**
     * Set TipoReembolso value
     * @param string $tipoReembolso
     * @return \StructType\REEMBOLSOTYPE
     */
    public function setTipoReembolso(?string $tipoReembolso = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoReembolso) && !is_string($tipoReembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoReembolso, true), gettype($tipoReembolso)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($tipoReembolso) && mb_strlen((string) $tipoReembolso) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $tipoReembolso)), __LINE__);
        }
        $this->TipoReembolso = $tipoReembolso;
        
        return $this;
    }
    /**
     * Get Importe value
     * @return string|null
     */
    public function getImporte(): ?string
    {
        return $this->Importe;
    }
    /**
     * Set Importe value
     * @param string $importe
     * @return \StructType\REEMBOLSOTYPE
     */
    public function setImporte(?string $importe = null): self
    {
        // validation for constraint: string
        if (!is_null($importe) && !is_string($importe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importe, true), gettype($importe)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($importe) && mb_strlen((string) $importe) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $importe)), __LINE__);
        }
        $this->Importe = $importe;
        
        return $this;
    }
    /**
     * Get NumeroCuenta value
     * @return string|null
     */
    public function getNumeroCuenta(): ?string
    {
        return $this->NumeroCuenta;
    }
    /**
     * Set NumeroCuenta value
     * @param string $numeroCuenta
     * @return \StructType\REEMBOLSOTYPE
     */
    public function setNumeroCuenta(?string $numeroCuenta = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroCuenta) && !is_string($numeroCuenta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCuenta, true), gettype($numeroCuenta)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numeroCuenta) && mb_strlen((string) $numeroCuenta) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numeroCuenta)), __LINE__);
        }
        $this->NumeroCuenta = $numeroCuenta;
        
        return $this;
    }
    /**
     * Get Transferagrupada value
     * @return string|null
     */
    public function getTransferagrupada(): ?string
    {
        return $this->Transferagrupada;
    }
    /**
     * Set Transferagrupada value
     * @param string $transferagrupada
     * @return \StructType\REEMBOLSOTYPE
     */
    public function setTransferagrupada(?string $transferagrupada = null): self
    {
        // validation for constraint: string
        if (!is_null($transferagrupada) && !is_string($transferagrupada)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferagrupada, true), gettype($transferagrupada)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($transferagrupada) && mb_strlen((string) $transferagrupada) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $transferagrupada)), __LINE__);
        }
        $this->Transferagrupada = $transferagrupada;
        
        return $this;
    }
}
