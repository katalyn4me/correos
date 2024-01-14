<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SolicitudEtiquetaExp StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SolicitudEtiquetaExp extends AbstractStructBase
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
     * The CodEnvio
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - ref: xsd:CodEnvio
     * @var string|null
     */
    protected ?string $CodEnvio = null;
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
     * Constructor method for SolicitudEtiquetaExp
     * @uses SolicitudEtiquetaExp::setFechaOperacion()
     * @uses SolicitudEtiquetaExp::setCodEtiquetador()
     * @uses SolicitudEtiquetaExp::setNumContrato()
     * @uses SolicitudEtiquetaExp::setNumCliente()
     * @uses SolicitudEtiquetaExp::setCodEnvio()
     * @uses SolicitudEtiquetaExp::setCare()
     * @uses SolicitudEtiquetaExp::setModDevEtiqueta()
     * @uses SolicitudEtiquetaExp::setIdiomaErrores()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $codEnvio
     * @param string $care
     * @param string $modDevEtiqueta
     * @param string $idiomaErrores
     */
    public function __construct(?string $fechaOperacion = null, ?string $codEtiquetador = null, ?string $numContrato = null, ?string $numCliente = null, ?string $codEnvio = null, ?string $care = null, ?string $modDevEtiqueta = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCodEnvio($codEnvio)
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
     * @return \StructType\SolicitudEtiquetaExp
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
