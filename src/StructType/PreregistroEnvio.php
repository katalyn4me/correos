<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreregistroEnvio StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreregistroEnvio extends AbstractStructBase
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
     * The Care
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Care
     * @var string|null
     */
    protected ?string $Care = null;
    /**
     * The TotalBultos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int|null
     */
    protected ?int $TotalBultos = null;
    /**
     * The ModDevEtiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:ModDevEtiqueta
     * @var string|null
     */
    protected ?string $ModDevEtiqueta = null;
    /**
     * The Remitente
     * Meta information extracted from the WSDL
     * - ref: xsd:Remitente
     * @var \StructType\DATOSREMITENTETYPE|null
     */
    protected ?\StructType\DATOSREMITENTETYPE $Remitente = null;
    /**
     * The Destinatario
     * Meta information extracted from the WSDL
     * - ref: xsd:Destinatario
     * @var \StructType\DATOSDESTINATARIOTYPE|null
     */
    protected ?\StructType\DATOSDESTINATARIOTYPE $Destinatario = null;
    /**
     * The Envio
     * Meta information extracted from the WSDL
     * - ref: xsd:Envio
     * @var \StructType\DATOSENVIOTYPE|null
     */
    protected ?\StructType\DATOSENVIOTYPE $Envio = null;
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
     * The CodManifiesto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 24
     * - minOccurs: 0
     * - ref: xsd:CodManifiesto
     * @var string|null
     */
    protected ?string $CodManifiesto = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PreregistroEnvio
     * @uses PreregistroEnvio::setFechaOperacion()
     * @uses PreregistroEnvio::setCodEtiquetador()
     * @uses PreregistroEnvio::setNumContrato()
     * @uses PreregistroEnvio::setNumCliente()
     * @uses PreregistroEnvio::setCare()
     * @uses PreregistroEnvio::setTotalBultos()
     * @uses PreregistroEnvio::setModDevEtiqueta()
     * @uses PreregistroEnvio::setRemitente()
     * @uses PreregistroEnvio::setDestinatario()
     * @uses PreregistroEnvio::setEnvio()
     * @uses PreregistroEnvio::setEntregaParcial()
     * @uses PreregistroEnvio::setCodExpedicion()
     * @uses PreregistroEnvio::setCodManifiesto()
     * @uses PreregistroEnvio::setIdiomaErrores()
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param string $modDevEtiqueta
     * @param \StructType\DATOSREMITENTETYPE $remitente
     * @param \StructType\DATOSDESTINATARIOTYPE $destinatario
     * @param \StructType\DATOSENVIOTYPE $envio
     * @param string $entregaParcial
     * @param string $codExpedicion
     * @param string $codManifiesto
     * @param string $idiomaErrores
     */
    public function __construct(?string $fechaOperacion = null, ?string $codEtiquetador = null, ?string $numContrato = null, ?string $numCliente = null, ?string $care = null, ?int $totalBultos = null, ?string $modDevEtiqueta = null, ?\StructType\DATOSREMITENTETYPE $remitente = null, ?\StructType\DATOSDESTINATARIOTYPE $destinatario = null, ?\StructType\DATOSENVIOTYPE $envio = null, ?string $entregaParcial = null, ?string $codExpedicion = null, ?string $codManifiesto = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setModDevEtiqueta($modDevEtiqueta)
            ->setRemitente($remitente)
            ->setDestinatario($destinatario)
            ->setEnvio($envio)
            ->setEntregaParcial($entregaParcial)
            ->setCodExpedicion($codExpedicion)
            ->setCodManifiesto($codManifiesto)
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * Get Remitente value
     * @return \StructType\DATOSREMITENTETYPE|null
     */
    public function getRemitente(): ?\StructType\DATOSREMITENTETYPE
    {
        return $this->Remitente;
    }
    /**
     * Set Remitente value
     * @param \StructType\DATOSREMITENTETYPE $remitente
     * @return \StructType\PreregistroEnvio
     */
    public function setRemitente(?\StructType\DATOSREMITENTETYPE $remitente = null): self
    {
        $this->Remitente = $remitente;
        
        return $this;
    }
    /**
     * Get Destinatario value
     * @return \StructType\DATOSDESTINATARIOTYPE|null
     */
    public function getDestinatario(): ?\StructType\DATOSDESTINATARIOTYPE
    {
        return $this->Destinatario;
    }
    /**
     * Set Destinatario value
     * @param \StructType\DATOSDESTINATARIOTYPE $destinatario
     * @return \StructType\PreregistroEnvio
     */
    public function setDestinatario(?\StructType\DATOSDESTINATARIOTYPE $destinatario = null): self
    {
        $this->Destinatario = $destinatario;
        
        return $this;
    }
    /**
     * Get Envio value
     * @return \StructType\DATOSENVIOTYPE|null
     */
    public function getEnvio(): ?\StructType\DATOSENVIOTYPE
    {
        return $this->Envio;
    }
    /**
     * Set Envio value
     * @param \StructType\DATOSENVIOTYPE $envio
     * @return \StructType\PreregistroEnvio
     */
    public function setEnvio(?\StructType\DATOSENVIOTYPE $envio = null): self
    {
        $this->Envio = $envio;
        
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
     * @return \StructType\PreregistroEnvio
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
     * @return \StructType\PreregistroEnvio
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
     * Get CodManifiesto value
     * @return string|null
     */
    public function getCodManifiesto(): ?string
    {
        return $this->CodManifiesto;
    }
    /**
     * Set CodManifiesto value
     * @param string $codManifiesto
     * @return \StructType\PreregistroEnvio
     */
    public function setCodManifiesto(?string $codManifiesto = null): self
    {
        // validation for constraint: string
        if (!is_null($codManifiesto) && !is_string($codManifiesto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codManifiesto, true), gettype($codManifiesto)), __LINE__);
        }
        // validation for constraint: maxLength(24)
        if (!is_null($codManifiesto) && mb_strlen((string) $codManifiesto) > 24) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 24', mb_strlen((string) $codManifiesto)), __LINE__);
        }
        $this->CodManifiesto = $codManifiesto;
        
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
     * @return \StructType\PreregistroEnvio
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
