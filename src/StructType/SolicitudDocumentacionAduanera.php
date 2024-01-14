<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SolicitudDocumentacionAduanera StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SolicitudDocumentacionAduanera extends AbstractStructBase
{
    /**
     * The TipoESAD
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:TipoESAD
     * @var string|null
     */
    protected ?string $TipoESAD = null;
    /**
     * The NumContrato
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - ref: xsd:NumContrato
     * @var string|null
     */
    protected ?string $NumContrato = null;
    /**
     * The NumCliente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - ref: xsd:NumCliente
     * @var string|null
     */
    protected ?string $NumCliente = null;
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
     * The Provincia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - ref: xsd:Provincia
     * @var string|null
     */
    protected ?string $Provincia = null;
    /**
     * The PaisDestino
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - ref: xsd:PaisDestino
     * @var string|null
     */
    protected ?string $PaisDestino = null;
    /**
     * The NombreDestinatario
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - ref: xsd:NombreDestinatario
     * @var string|null
     */
    protected ?string $NombreDestinatario = null;
    /**
     * The NumeroEnvios
     * Meta information extracted from the WSDL
     * - ref: xsd:NumeroEnvios
     * @var string|null
     */
    protected ?string $NumeroEnvios = null;
    /**
     * The LocalidadFirma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:LocalidadFirma
     * @var string|null
     */
    protected ?string $LocalidadFirma = null;
    /**
     * The FechaFirma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaFirma
     * @var string|null
     */
    protected ?string $FechaFirma = null;
    /**
     * The NifFirma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NifFirma
     * @var string|null
     */
    protected ?string $NifFirma = null;
    /**
     * The NombreFirma
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NombreFirma
     * @var string|null
     */
    protected ?string $NombreFirma = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for SolicitudDocumentacionAduanera
     * @uses SolicitudDocumentacionAduanera::setTipoESAD()
     * @uses SolicitudDocumentacionAduanera::setNumContrato()
     * @uses SolicitudDocumentacionAduanera::setNumCliente()
     * @uses SolicitudDocumentacionAduanera::setCodEtiquetador()
     * @uses SolicitudDocumentacionAduanera::setProvincia()
     * @uses SolicitudDocumentacionAduanera::setPaisDestino()
     * @uses SolicitudDocumentacionAduanera::setNombreDestinatario()
     * @uses SolicitudDocumentacionAduanera::setNumeroEnvios()
     * @uses SolicitudDocumentacionAduanera::setLocalidadFirma()
     * @uses SolicitudDocumentacionAduanera::setFechaFirma()
     * @uses SolicitudDocumentacionAduanera::setNifFirma()
     * @uses SolicitudDocumentacionAduanera::setNombreFirma()
     * @uses SolicitudDocumentacionAduanera::setIdiomaErrores()
     * @param string $tipoESAD
     * @param string $numContrato
     * @param string $numCliente
     * @param string $codEtiquetador
     * @param string $provincia
     * @param string $paisDestino
     * @param string $nombreDestinatario
     * @param string $numeroEnvios
     * @param string $localidadFirma
     * @param string $fechaFirma
     * @param string $nifFirma
     * @param string $nombreFirma
     * @param string $idiomaErrores
     */
    public function __construct(?string $tipoESAD = null, ?string $numContrato = null, ?string $numCliente = null, ?string $codEtiquetador = null, ?string $provincia = null, ?string $paisDestino = null, ?string $nombreDestinatario = null, ?string $numeroEnvios = null, ?string $localidadFirma = null, ?string $fechaFirma = null, ?string $nifFirma = null, ?string $nombreFirma = null, ?string $idiomaErrores = null)
    {
        $this
            ->setTipoESAD($tipoESAD)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCodEtiquetador($codEtiquetador)
            ->setProvincia($provincia)
            ->setPaisDestino($paisDestino)
            ->setNombreDestinatario($nombreDestinatario)
            ->setNumeroEnvios($numeroEnvios)
            ->setLocalidadFirma($localidadFirma)
            ->setFechaFirma($fechaFirma)
            ->setNifFirma($nifFirma)
            ->setNombreFirma($nombreFirma)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get TipoESAD value
     * @return string|null
     */
    public function getTipoESAD(): ?string
    {
        return $this->TipoESAD;
    }
    /**
     * Set TipoESAD value
     * @param string $tipoESAD
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setTipoESAD(?string $tipoESAD = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoESAD) && !is_string($tipoESAD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoESAD, true), gettype($tipoESAD)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($tipoESAD) && mb_strlen((string) $tipoESAD) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $tipoESAD)), __LINE__);
        }
        $this->TipoESAD = $tipoESAD;
        
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
     * @return \StructType\SolicitudDocumentacionAduanera
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
     * @return \StructType\SolicitudDocumentacionAduanera
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
     * @return \StructType\SolicitudDocumentacionAduanera
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
     * Get Provincia value
     * @return string|null
     */
    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }
    /**
     * Set Provincia value
     * @param string $provincia
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setProvincia(?string $provincia = null): self
    {
        // validation for constraint: string
        if (!is_null($provincia) && !is_string($provincia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($provincia) && mb_strlen((string) $provincia) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $provincia)), __LINE__);
        }
        $this->Provincia = $provincia;
        
        return $this;
    }
    /**
     * Get PaisDestino value
     * @return string|null
     */
    public function getPaisDestino(): ?string
    {
        return $this->PaisDestino;
    }
    /**
     * Set PaisDestino value
     * @param string $paisDestino
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setPaisDestino(?string $paisDestino = null): self
    {
        // validation for constraint: string
        if (!is_null($paisDestino) && !is_string($paisDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paisDestino, true), gettype($paisDestino)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($paisDestino) && mb_strlen((string) $paisDestino) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $paisDestino)), __LINE__);
        }
        $this->PaisDestino = $paisDestino;
        
        return $this;
    }
    /**
     * Get NombreDestinatario value
     * @return string|null
     */
    public function getNombreDestinatario(): ?string
    {
        return $this->NombreDestinatario;
    }
    /**
     * Set NombreDestinatario value
     * @param string $nombreDestinatario
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setNombreDestinatario(?string $nombreDestinatario = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreDestinatario) && !is_string($nombreDestinatario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreDestinatario, true), gettype($nombreDestinatario)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($nombreDestinatario) && mb_strlen((string) $nombreDestinatario) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $nombreDestinatario)), __LINE__);
        }
        $this->NombreDestinatario = $nombreDestinatario;
        
        return $this;
    }
    /**
     * Get NumeroEnvios value
     * @return string|null
     */
    public function getNumeroEnvios(): ?string
    {
        return $this->NumeroEnvios;
    }
    /**
     * Set NumeroEnvios value
     * @param string $numeroEnvios
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setNumeroEnvios(?string $numeroEnvios = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroEnvios) && !is_string($numeroEnvios)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroEnvios, true), gettype($numeroEnvios)), __LINE__);
        }
        $this->NumeroEnvios = $numeroEnvios;
        
        return $this;
    }
    /**
     * Get LocalidadFirma value
     * @return string|null
     */
    public function getLocalidadFirma(): ?string
    {
        return $this->LocalidadFirma;
    }
    /**
     * Set LocalidadFirma value
     * @param string $localidadFirma
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setLocalidadFirma(?string $localidadFirma = null): self
    {
        // validation for constraint: string
        if (!is_null($localidadFirma) && !is_string($localidadFirma)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localidadFirma, true), gettype($localidadFirma)), __LINE__);
        }
        $this->LocalidadFirma = $localidadFirma;
        
        return $this;
    }
    /**
     * Get FechaFirma value
     * @return string|null
     */
    public function getFechaFirma(): ?string
    {
        return $this->FechaFirma;
    }
    /**
     * Set FechaFirma value
     * @param string $fechaFirma
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setFechaFirma(?string $fechaFirma = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaFirma) && !is_string($fechaFirma)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaFirma, true), gettype($fechaFirma)), __LINE__);
        }
        $this->FechaFirma = $fechaFirma;
        
        return $this;
    }
    /**
     * Get NifFirma value
     * @return string|null
     */
    public function getNifFirma(): ?string
    {
        return $this->NifFirma;
    }
    /**
     * Set NifFirma value
     * @param string $nifFirma
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setNifFirma(?string $nifFirma = null): self
    {
        // validation for constraint: string
        if (!is_null($nifFirma) && !is_string($nifFirma)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nifFirma, true), gettype($nifFirma)), __LINE__);
        }
        $this->NifFirma = $nifFirma;
        
        return $this;
    }
    /**
     * Get NombreFirma value
     * @return string|null
     */
    public function getNombreFirma(): ?string
    {
        return $this->NombreFirma;
    }
    /**
     * Set NombreFirma value
     * @param string $nombreFirma
     * @return \StructType\SolicitudDocumentacionAduanera
     */
    public function setNombreFirma(?string $nombreFirma = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreFirma) && !is_string($nombreFirma)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreFirma, true), gettype($nombreFirma)), __LINE__);
        }
        $this->NombreFirma = $nombreFirma;
        
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
     * @return \StructType\SolicitudDocumentacionAduanera
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
