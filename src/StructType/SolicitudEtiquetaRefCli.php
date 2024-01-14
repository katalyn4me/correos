<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SolicitudEtiquetaRefCli StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SolicitudEtiquetaRefCli extends AbstractStructBase
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
     * - minOccurs: 0
     * - ref: xsd:CodEtiquetador
     * @var string|null
     */
    protected ?string $CodEtiquetador = null;
    /**
     * The NumContrato
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumContrato
     * @var string|null
     */
    protected ?string $NumContrato = null;
    /**
     * The NumCliente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumCliente
     * @var string|null
     */
    protected ?string $NumCliente = null;
    /**
     * The ReferenciaCliente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:ReferenciaCliente
     * @var string|null
     */
    protected ?string $ReferenciaCliente = null;
    /**
     * The ReferenciaCliente2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:ReferenciaCliente2
     * @var string|null
     */
    protected ?string $ReferenciaCliente2 = null;
    /**
     * The ReferenciaCliente3
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:ReferenciaCliente3
     * @var string|null
     */
    protected ?string $ReferenciaCliente3 = null;
    /**
     * The Care
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Care
     * @var string|null
     */
    protected ?string $Care = null;
    /**
     * The ModDevEtiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:ModDevEtiqueta
     * @var string|null
     */
    protected ?string $ModDevEtiqueta = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for SolicitudEtiquetaRefCli
     * @uses SolicitudEtiquetaRefCli::setFechaOperacion()
     * @uses SolicitudEtiquetaRefCli::setCodEtiquetador()
     * @uses SolicitudEtiquetaRefCli::setNumContrato()
     * @uses SolicitudEtiquetaRefCli::setNumCliente()
     * @uses SolicitudEtiquetaRefCli::setReferenciaCliente()
     * @uses SolicitudEtiquetaRefCli::setReferenciaCliente2()
     * @uses SolicitudEtiquetaRefCli::setReferenciaCliente3()
     * @uses SolicitudEtiquetaRefCli::setCare()
     * @uses SolicitudEtiquetaRefCli::setModDevEtiqueta()
     * @uses SolicitudEtiquetaRefCli::setIdiomaErrores()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $referenciaCliente
     * @param string $referenciaCliente2
     * @param string $referenciaCliente3
     * @param string $care
     * @param string $modDevEtiqueta
     * @param string $idiomaErrores
     */
    public function __construct(?string $fechaOperacion = null, ?string $codEtiquetador = null, ?string $numContrato = null, ?string $numCliente = null, ?string $referenciaCliente = null, ?string $referenciaCliente2 = null, ?string $referenciaCliente3 = null, ?string $care = null, ?string $modDevEtiqueta = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setReferenciaCliente($referenciaCliente)
            ->setReferenciaCliente2($referenciaCliente2)
            ->setReferenciaCliente3($referenciaCliente3)
            ->setCare($care)
            ->setModDevEtiqueta($modDevEtiqueta)
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
     * @return \StructType\SolicitudEtiquetaRefCli
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
     * @return \StructType\SolicitudEtiquetaRefCli
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
     * Get NumContrato value
     * @return string|null
     */
    public function getNumContrato(): ?string
    {
        return $this->NumContrato;
    }
    /**
     * Set NumContrato value
     * @param string $numContrato
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setNumContrato(?string $numContrato = null): self
    {
        // validation for constraint: string
        if (!is_null($numContrato) && !is_string($numContrato)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numContrato, true), gettype($numContrato)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numContrato) && mb_strlen((string) $numContrato) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numContrato)), __LINE__);
        }
        $this->NumContrato = $numContrato;
        
        return $this;
    }
    /**
     * Get NumCliente value
     * @return string|null
     */
    public function getNumCliente(): ?string
    {
        return $this->NumCliente;
    }
    /**
     * Set NumCliente value
     * @param string $numCliente
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setNumCliente(?string $numCliente = null): self
    {
        // validation for constraint: string
        if (!is_null($numCliente) && !is_string($numCliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numCliente, true), gettype($numCliente)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numCliente) && mb_strlen((string) $numCliente) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numCliente)), __LINE__);
        }
        $this->NumCliente = $numCliente;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente value
     * @return string|null
     */
    public function getReferenciaCliente(): ?string
    {
        return $this->ReferenciaCliente;
    }
    /**
     * Set ReferenciaCliente value
     * @param string $referenciaCliente
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setReferenciaCliente(?string $referenciaCliente = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente) && !is_string($referenciaCliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente, true), gettype($referenciaCliente)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente) && mb_strlen((string) $referenciaCliente) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente)), __LINE__);
        }
        $this->ReferenciaCliente = $referenciaCliente;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente2 value
     * @return string|null
     */
    public function getReferenciaCliente2(): ?string
    {
        return $this->ReferenciaCliente2;
    }
    /**
     * Set ReferenciaCliente2 value
     * @param string $referenciaCliente2
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setReferenciaCliente2(?string $referenciaCliente2 = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente2) && !is_string($referenciaCliente2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente2, true), gettype($referenciaCliente2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente2) && mb_strlen((string) $referenciaCliente2) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente2)), __LINE__);
        }
        $this->ReferenciaCliente2 = $referenciaCliente2;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente3 value
     * @return string|null
     */
    public function getReferenciaCliente3(): ?string
    {
        return $this->ReferenciaCliente3;
    }
    /**
     * Set ReferenciaCliente3 value
     * @param string $referenciaCliente3
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setReferenciaCliente3(?string $referenciaCliente3 = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente3) && !is_string($referenciaCliente3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente3, true), gettype($referenciaCliente3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente3) && mb_strlen((string) $referenciaCliente3) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente3)), __LINE__);
        }
        $this->ReferenciaCliente3 = $referenciaCliente3;
        
        return $this;
    }
    /**
     * Get Care value
     * @return string|null
     */
    public function getCare(): ?string
    {
        return $this->Care;
    }
    /**
     * Set Care value
     * @param string $care
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setCare(?string $care = null): self
    {
        // validation for constraint: string
        if (!is_null($care) && !is_string($care)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($care, true), gettype($care)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($care) && mb_strlen((string) $care) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $care)), __LINE__);
        }
        $this->Care = $care;
        
        return $this;
    }
    /**
     * Get ModDevEtiqueta value
     * @return string|null
     */
    public function getModDevEtiqueta(): ?string
    {
        return $this->ModDevEtiqueta;
    }
    /**
     * Set ModDevEtiqueta value
     * @uses \EnumType\ModDevEtiqueta::valueIsValid()
     * @uses \EnumType\ModDevEtiqueta::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modDevEtiqueta
     * @return \StructType\SolicitudEtiquetaRefCli
     */
    public function setModDevEtiqueta(?string $modDevEtiqueta = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModDevEtiqueta::valueIsValid($modDevEtiqueta)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModDevEtiqueta', is_array($modDevEtiqueta) ? implode(', ', $modDevEtiqueta) : var_export($modDevEtiqueta, true), implode(', ', \EnumType\ModDevEtiqueta::getValidValues())), __LINE__);
        }
        $this->ModDevEtiqueta = $modDevEtiqueta;
        
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
     * @return \StructType\SolicitudEtiquetaRefCli
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
