<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaModificar StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaModificar extends AbstractStructBase
{
    /**
     * The CodExpedicion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minOccurs: 0
     * - ref: xsd:CodExpedicion
     * @var string|null
     */
    protected ?string $CodExpedicion = null;
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
     * The TotalBultos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int|null
     */
    protected ?int $TotalBultos = null;
    /**
     * The Bulto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Bulto
     * @var \StructType\DATOSBULTOTYPE|null
     */
    protected ?\StructType\DATOSBULTOTYPE $Bulto = null;
    /**
     * The BultoError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultoError
     * @var \StructType\DATOSBULTOERRORTYPE|null
     */
    protected ?\StructType\DATOSBULTOERRORTYPE $BultoError = null;
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
     * Constructor method for RespuestaModificar
     * @uses RespuestaModificar::setCodExpedicion()
     * @uses RespuestaModificar::setFechaRespuesta()
     * @uses RespuestaModificar::setResultado()
     * @uses RespuestaModificar::setTotalBultos()
     * @uses RespuestaModificar::setBulto()
     * @uses RespuestaModificar::setBultoError()
     * @uses RespuestaModificar::setAlertas()
     * @uses RespuestaModificar::setIdiomaErrores()
     * @param string $codExpedicion
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param \StructType\DATOSBULTOTYPE $bulto
     * @param \StructType\DATOSBULTOERRORTYPE $bultoError
     * @param \StructType\Alertas $alertas
     * @param string $idiomaErrores
     */
    public function __construct(?string $codExpedicion = null, ?string $fechaRespuesta = null, ?string $resultado = null, ?int $totalBultos = null, ?\StructType\DATOSBULTOTYPE $bulto = null, ?\StructType\DATOSBULTOERRORTYPE $bultoError = null, ?\StructType\Alertas $alertas = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodExpedicion($codExpedicion)
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBulto($bulto)
            ->setBultoError($bultoError)
            ->setAlertas($alertas)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get CodExpedicion value
     * @return string|null
     */
    public function getCodExpedicion(): ?string
    {
        return $this->CodExpedicion;
    }
    /**
     * Set CodExpedicion value
     * @param string $codExpedicion
     * @return \StructType\RespuestaModificar
     */
    public function setCodExpedicion(?string $codExpedicion = null): self
    {
        // validation for constraint: string
        if (!is_null($codExpedicion) && !is_string($codExpedicion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codExpedicion, true), gettype($codExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($codExpedicion) && mb_strlen((string) $codExpedicion) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $codExpedicion)), __LINE__);
        }
        $this->CodExpedicion = $codExpedicion;
        
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
     * @return \StructType\RespuestaModificar
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
     * @return \StructType\RespuestaModificar
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
     * Get TotalBultos value
     * @return int|null
     */
    public function getTotalBultos(): ?int
    {
        return $this->TotalBultos;
    }
    /**
     * Set TotalBultos value
     * @param int $totalBultos
     * @return \StructType\RespuestaModificar
     */
    public function setTotalBultos(?int $totalBultos = null): self
    {
        // validation for constraint: int
        if (!is_null($totalBultos) && !(is_int($totalBultos) || ctype_digit($totalBultos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBultos, true), gettype($totalBultos)), __LINE__);
        }
        $this->TotalBultos = $totalBultos;
        
        return $this;
    }
    /**
     * Get Bulto value
     * @return \StructType\DATOSBULTOTYPE|null
     */
    public function getBulto(): ?\StructType\DATOSBULTOTYPE
    {
        return $this->Bulto;
    }
    /**
     * Set Bulto value
     * @param \StructType\DATOSBULTOTYPE $bulto
     * @return \StructType\RespuestaModificar
     */
    public function setBulto(?\StructType\DATOSBULTOTYPE $bulto = null): self
    {
        $this->Bulto = $bulto;
        
        return $this;
    }
    /**
     * Get BultoError value
     * @return \StructType\DATOSBULTOERRORTYPE|null
     */
    public function getBultoError(): ?\StructType\DATOSBULTOERRORTYPE
    {
        return $this->BultoError;
    }
    /**
     * Set BultoError value
     * @param \StructType\DATOSBULTOERRORTYPE $bultoError
     * @return \StructType\RespuestaModificar
     */
    public function setBultoError(?\StructType\DATOSBULTOERRORTYPE $bultoError = null): self
    {
        $this->BultoError = $bultoError;
        
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
     * @return \StructType\RespuestaModificar
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
     * @return \StructType\RespuestaModificar
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
