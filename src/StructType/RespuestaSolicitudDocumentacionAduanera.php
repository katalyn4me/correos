<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaSolicitudDocumentacionAduanera StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaSolicitudDocumentacionAduanera extends AbstractStructBase
{
    /**
     * The Fichero
     * Meta information extracted from the WSDL
     * - ref: xsd:Fichero
     * @var string|null
     */
    protected ?string $Fichero = null;
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
     * The Resultado
     * Meta information extracted from the WSDL
     * - ref: xsd:Resultado
     * @var string|null
     */
    protected ?string $Resultado = null;
    /**
     * The MotivoError
     * Meta information extracted from the WSDL
     * - ref: xsd:MotivoError
     * @var string|null
     */
    protected ?string $MotivoError = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for RespuestaSolicitudDocumentacionAduanera
     * @uses RespuestaSolicitudDocumentacionAduanera::setFichero()
     * @uses RespuestaSolicitudDocumentacionAduanera::setCodEnvio()
     * @uses RespuestaSolicitudDocumentacionAduanera::setResultado()
     * @uses RespuestaSolicitudDocumentacionAduanera::setMotivoError()
     * @uses RespuestaSolicitudDocumentacionAduanera::setIdiomaErrores()
     * @param string $fichero
     * @param string $codEnvio
     * @param string $resultado
     * @param string $motivoError
     * @param string $idiomaErrores
     */
    public function __construct(?string $fichero = null, ?string $codEnvio = null, ?string $resultado = null, ?string $motivoError = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFichero($fichero)
            ->setCodEnvio($codEnvio)
            ->setResultado($resultado)
            ->setMotivoError($motivoError)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get Fichero value
     * @return string|null
     */
    public function getFichero(): ?string
    {
        return $this->Fichero;
    }
    /**
     * Set Fichero value
     * @param string $fichero
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera
     */
    public function setFichero(?string $fichero = null): self
    {
        // validation for constraint: string
        if (!is_null($fichero) && !is_string($fichero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fichero, true), gettype($fichero)), __LINE__);
        }
        $this->Fichero = $fichero;
        
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
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera
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
     * Get Resultado value
     * @return string|null
     */
    public function getResultado(): ?string
    {
        return $this->Resultado;
    }
    /**
     * Set Resultado value
     * @uses \EnumType\Resultado::valueIsValid()
     * @uses \EnumType\Resultado::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resultado
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera
     */
    public function setResultado(?string $resultado = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Resultado::valueIsValid($resultado)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Resultado', is_array($resultado) ? implode(', ', $resultado) : var_export($resultado, true), implode(', ', \EnumType\Resultado::getValidValues())), __LINE__);
        }
        $this->Resultado = $resultado;
        
        return $this;
    }
    /**
     * Get MotivoError value
     * @return string|null
     */
    public function getMotivoError(): ?string
    {
        return $this->MotivoError;
    }
    /**
     * Set MotivoError value
     * @param string $motivoError
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera
     */
    public function setMotivoError(?string $motivoError = null): self
    {
        // validation for constraint: string
        if (!is_null($motivoError) && !is_string($motivoError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($motivoError, true), gettype($motivoError)), __LINE__);
        }
        $this->MotivoError = $motivoError;
        
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
     * @return \StructType\RespuestaSolicitudDocumentacionAduanera
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
