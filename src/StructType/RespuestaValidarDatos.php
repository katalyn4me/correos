<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaValidarDatos StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaValidarDatos extends AbstractStructBase
{
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
     * The ErroresValidacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ErroresValidacion
     * @var \StructType\LISTAERRORESVALIDACIONTYPE|null
     */
    protected ?\StructType\LISTAERRORESVALIDACIONTYPE $ErroresValidacion = null;
    /**
     * The Alertas
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Alertas
     * @var \StructType\Alertas|null
     */
    protected ?\StructType\Alertas $Alertas = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for RespuestaValidarDatos
     * @uses RespuestaValidarDatos::setFechaRespuesta()
     * @uses RespuestaValidarDatos::setResultado()
     * @uses RespuestaValidarDatos::setErroresValidacion()
     * @uses RespuestaValidarDatos::setAlertas()
     * @uses RespuestaValidarDatos::setIdiomaErrores()
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param \StructType\LISTAERRORESVALIDACIONTYPE $erroresValidacion
     * @param \StructType\Alertas $alertas
     * @param string $idiomaErrores
     */
    public function __construct(?string $fechaRespuesta = null, ?string $resultado = null, ?\StructType\LISTAERRORESVALIDACIONTYPE $erroresValidacion = null, ?\StructType\Alertas $alertas = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setErroresValidacion($erroresValidacion)
            ->setAlertas($alertas)
            ->setIdiomaErrores($idiomaErrores);
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
     * @return \StructType\RespuestaValidarDatos
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
     * @return \StructType\RespuestaValidarDatos
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
     * Get ErroresValidacion value
     * @return \StructType\LISTAERRORESVALIDACIONTYPE|null
     */
    public function getErroresValidacion(): ?\StructType\LISTAERRORESVALIDACIONTYPE
    {
        return $this->ErroresValidacion;
    }
    /**
     * Set ErroresValidacion value
     * @param \StructType\LISTAERRORESVALIDACIONTYPE $erroresValidacion
     * @return \StructType\RespuestaValidarDatos
     */
    public function setErroresValidacion(?\StructType\LISTAERRORESVALIDACIONTYPE $erroresValidacion = null): self
    {
        $this->ErroresValidacion = $erroresValidacion;
        
        return $this;
    }
    /**
     * Get Alertas value
     * @return \StructType\Alertas|null
     */
    public function getAlertas(): ?\StructType\Alertas
    {
        return $this->Alertas;
    }
    /**
     * Set Alertas value
     * @param \StructType\Alertas $alertas
     * @return \StructType\RespuestaValidarDatos
     */
    public function setAlertas(?\StructType\Alertas $alertas = null): self
    {
        $this->Alertas = $alertas;
        
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
     * @return \StructType\RespuestaValidarDatos
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
