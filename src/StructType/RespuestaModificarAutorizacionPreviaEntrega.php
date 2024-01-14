<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaModificarAutorizacionPreviaEntrega StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaModificarAutorizacionPreviaEntrega extends AbstractStructBase
{
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
     * The FechaRespuesta
     * Meta information extracted from the WSDL
     * - ref: xsd:FechaRespuesta
     * @var string|null
     */
    protected ?string $FechaRespuesta = null;
    /**
     * The Resultado
     * Meta information extracted from the WSDL
     * - ref: xsd:Resultado
     * @var string|null
     */
    protected ?string $Resultado = null;
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Error
     * @var string|null
     */
    protected ?string $Error = null;
    /**
     * The DescError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DescError
     * @var string|null
     */
    protected ?string $DescError = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for RespuestaModificarAutorizacionPreviaEntrega
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setCodEnvio()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setFechaRespuesta()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setResultado()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setError()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setDescError()
     * @uses RespuestaModificarAutorizacionPreviaEntrega::setIdiomaErrores()
     * @param string $codEnvio
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param string $error
     * @param string $descError
     * @param string $idiomaErrores
     */
    public function __construct(?string $codEnvio = null, ?string $fechaRespuesta = null, ?string $resultado = null, ?string $error = null, ?string $descError = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodEnvio($codEnvio)
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setError($error)
            ->setDescError($descError)
            ->setIdiomaErrores($idiomaErrores);
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
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega
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
     * Get FechaRespuesta value
     * @return string|null
     */
    public function getFechaRespuesta(): ?string
    {
        return $this->FechaRespuesta;
    }
    /**
     * Set FechaRespuesta value
     * @param string $fechaRespuesta
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega
     */
    public function setFechaRespuesta(?string $fechaRespuesta = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaRespuesta) && !is_string($fechaRespuesta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaRespuesta, true), gettype($fechaRespuesta)), __LINE__);
        }
        $this->FechaRespuesta = $fechaRespuesta;
        
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
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega
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
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega
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
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega
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
     * @return \StructType\RespuestaModificarAutorizacionPreviaEntrega
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
