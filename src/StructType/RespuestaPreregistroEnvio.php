<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaPreregistroEnvio StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaPreregistroEnvio extends AbstractStructBase
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
     * The ReferenciaExpedicion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:ReferenciaExpedicion
     * @var string|null
     */
    protected ?string $ReferenciaExpedicion = null;
    /**
     * The EntregaParcial
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaParcial
     * @var string|null
     */
    protected ?string $EntregaParcial = null;
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
     * Constructor method for RespuestaPreregistroEnvio
     * @uses RespuestaPreregistroEnvio::setCodExpedicion()
     * @uses RespuestaPreregistroEnvio::setReferenciaExpedicion()
     * @uses RespuestaPreregistroEnvio::setEntregaParcial()
     * @uses RespuestaPreregistroEnvio::setFechaRespuesta()
     * @uses RespuestaPreregistroEnvio::setResultado()
     * @uses RespuestaPreregistroEnvio::setTotalBultos()
     * @uses RespuestaPreregistroEnvio::setBulto()
     * @uses RespuestaPreregistroEnvio::setBultoError()
     * @uses RespuestaPreregistroEnvio::setAlertas()
     * @uses RespuestaPreregistroEnvio::setIdiomaErrores()
     * @param string $codExpedicion
     * @param string $referenciaExpedicion
     * @param string $entregaParcial
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param \StructType\DATOSBULTOTYPE $bulto
     * @param \StructType\DATOSBULTOERRORTYPE $bultoError
     * @param \StructType\Alertas $alertas
     * @param string $idiomaErrores
     */
    public function __construct(?string $codExpedicion = null, ?string $referenciaExpedicion = null, ?string $entregaParcial = null, ?string $fechaRespuesta = null, ?string $resultado = null, ?int $totalBultos = null, ?\StructType\DATOSBULTOTYPE $bulto = null, ?\StructType\DATOSBULTOERRORTYPE $bultoError = null, ?\StructType\Alertas $alertas = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodExpedicion($codExpedicion)
            ->setReferenciaExpedicion($referenciaExpedicion)
            ->setEntregaParcial($entregaParcial)
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * Get ReferenciaExpedicion value
     * @return string|null
     */
    public function getReferenciaExpedicion(): ?string
    {
        return $this->ReferenciaExpedicion;
    }
    /**
     * Set ReferenciaExpedicion value
     * @param string $referenciaExpedicion
     * @return \StructType\RespuestaPreregistroEnvio
     */
    public function setReferenciaExpedicion(?string $referenciaExpedicion = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaExpedicion) && !is_string($referenciaExpedicion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaExpedicion, true), gettype($referenciaExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referenciaExpedicion) && mb_strlen((string) $referenciaExpedicion) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $referenciaExpedicion)), __LINE__);
        }
        $this->ReferenciaExpedicion = $referenciaExpedicion;
        
        return $this;
    }
    /**
     * Get EntregaParcial value
     * @return string|null
     */
    public function getEntregaParcial(): ?string
    {
        return $this->EntregaParcial;
    }
    /**
     * Set EntregaParcial value
     * @param string $entregaParcial
     * @return \StructType\RespuestaPreregistroEnvio
     */
    public function setEntregaParcial(?string $entregaParcial = null): self
    {
        // validation for constraint: string
        if (!is_null($entregaParcial) && !is_string($entregaParcial)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaParcial, true), gettype($entregaParcial)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaParcial) && mb_strlen((string) $entregaParcial) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $entregaParcial)), __LINE__);
        }
        $this->EntregaParcial = $entregaParcial;
        
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * @return \StructType\RespuestaPreregistroEnvio
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
     * @return \StructType\RespuestaPreregistroEnvio
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
