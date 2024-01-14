<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculaTarifa StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculaTarifa extends AbstractStructBase
{
    /**
     * The FechaOperacion
     * Meta information extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string|null
     */
    protected ?string $FechaOperacion = null;
    /**
     * The CodEtiquetador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:CodEtiquetador
     * @var string|null
     */
    protected ?string $CodEtiquetador = null;
    /**
     * The CPRemitente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    protected ?string $CPRemitente = null;
    /**
     * The CPDestinatario
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * @var string|null
     */
    protected ?string $CPDestinatario = null;
    /**
     * The CodProducto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string|null
     */
    protected ?string $CodProducto = null;
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
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for CalculaTarifa
     * @uses CalculaTarifa::setFechaOperacion()
     * @uses CalculaTarifa::setCodEtiquetador()
     * @uses CalculaTarifa::setCPRemitente()
     * @uses CalculaTarifa::setCPDestinatario()
     * @uses CalculaTarifa::setCodProducto()
     * @uses CalculaTarifa::setTipoPeso()
     * @uses CalculaTarifa::setValor()
     * @uses CalculaTarifa::setIdiomaErrores()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $cPRemitente
     * @param string $cPDestinatario
     * @param string $codProducto
     * @param string $tipoPeso
     * @param string $valor
     * @param string $idiomaErrores
     */
    public function __construct(?string $fechaOperacion = null, ?string $codEtiquetador = null, ?string $cPRemitente = null, ?string $cPDestinatario = null, ?string $codProducto = null, ?string $tipoPeso = null, ?string $valor = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setCPRemitente($cPRemitente)
            ->setCPDestinatario($cPDestinatario)
            ->setCodProducto($codProducto)
            ->setTipoPeso($tipoPeso)
            ->setValor($valor)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get FechaOperacion value
     * @return string|null
     */
    public function getFechaOperacion(): ?string
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param string $fechaOperacion
     * @return \StructType\CalculaTarifa
     */
    public function setFechaOperacion(?string $fechaOperacion = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaOperacion) && !is_string($fechaOperacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOperacion, true), gettype($fechaOperacion)), __LINE__);
        }
        $this->FechaOperacion = $fechaOperacion;
        
        return $this;
    }
    /**
     * Get CodEtiquetador value
     * @return string|null
     */
    public function getCodEtiquetador(): ?string
    {
        return $this->CodEtiquetador;
    }
    /**
     * Set CodEtiquetador value
     * @param string $codEtiquetador
     * @return \StructType\CalculaTarifa
     */
    public function setCodEtiquetador(?string $codEtiquetador = null): self
    {
        // validation for constraint: string
        if (!is_null($codEtiquetador) && !is_string($codEtiquetador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEtiquetador, true), gettype($codEtiquetador)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($codEtiquetador) && mb_strlen((string) $codEtiquetador) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $codEtiquetador)), __LINE__);
        }
        $this->CodEtiquetador = $codEtiquetador;
        
        return $this;
    }
    /**
     * Get CPRemitente value
     * @return string|null
     */
    public function getCPRemitente(): ?string
    {
        return $this->CPRemitente;
    }
    /**
     * Set CPRemitente value
     * @param string $cPRemitente
     * @return \StructType\CalculaTarifa
     */
    public function setCPRemitente(?string $cPRemitente = null): self
    {
        // validation for constraint: string
        if (!is_null($cPRemitente) && !is_string($cPRemitente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPRemitente, true), gettype($cPRemitente)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($cPRemitente) && mb_strlen((string) $cPRemitente) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $cPRemitente)), __LINE__);
        }
        $this->CPRemitente = $cPRemitente;
        
        return $this;
    }
    /**
     * Get CPDestinatario value
     * @return string|null
     */
    public function getCPDestinatario(): ?string
    {
        return $this->CPDestinatario;
    }
    /**
     * Set CPDestinatario value
     * @param string $cPDestinatario
     * @return \StructType\CalculaTarifa
     */
    public function setCPDestinatario(?string $cPDestinatario = null): self
    {
        // validation for constraint: string
        if (!is_null($cPDestinatario) && !is_string($cPDestinatario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPDestinatario, true), gettype($cPDestinatario)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($cPDestinatario) && mb_strlen((string) $cPDestinatario) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $cPDestinatario)), __LINE__);
        }
        $this->CPDestinatario = $cPDestinatario;
        
        return $this;
    }
    /**
     * Get CodProducto value
     * @return string|null
     */
    public function getCodProducto(): ?string
    {
        return $this->CodProducto;
    }
    /**
     * Set CodProducto value
     * @param string $codProducto
     * @return \StructType\CalculaTarifa
     */
    public function setCodProducto(?string $codProducto = null): self
    {
        // validation for constraint: string
        if (!is_null($codProducto) && !is_string($codProducto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codProducto, true), gettype($codProducto)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($codProducto) && mb_strlen((string) $codProducto) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $codProducto)), __LINE__);
        }
        $this->CodProducto = $codProducto;
        
        return $this;
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
     * @return \StructType\CalculaTarifa
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
     * @return \StructType\CalculaTarifa
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
    /**
     * Get IdiomaErrores value
     * @return string|null
     */
    public function getIdiomaErrores(): ?string
    {
        return $this->IdiomaErrores;
    }
    /**
     * Set IdiomaErrores value
     * @param string $idiomaErrores
     * @return \StructType\CalculaTarifa
     */
    public function setIdiomaErrores(?string $idiomaErrores = null): self
    {
        // validation for constraint: string
        if (!is_null($idiomaErrores) && !is_string($idiomaErrores)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idiomaErrores, true), gettype($idiomaErrores)), __LINE__);
        }
        $this->IdiomaErrores = $idiomaErrores;
        
        return $this;
    }
}
