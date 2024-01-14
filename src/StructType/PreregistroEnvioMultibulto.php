<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreregistroEnvioMultibulto StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PreregistroEnvioMultibulto extends AbstractStructBase
{
    /**
     * The Oid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 36
     * - ref: xsd:Oid
     * @var string|null
     */
    protected ?string $Oid = null;
    /**
     * The Eid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - ref: xsd:Eid
     * @var string|null
     */
    protected ?string $Eid = null;
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
     * The Envios
     * Meta information extracted from the WSDL
     * - ref: xsd:Envios
     * @var \StructType\Envios|null
     */
    protected ?\StructType\Envios $Envios = null;
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
     * The CodProducto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string|null
     */
    protected ?string $CodProducto = null;
    /**
     * The PesoTotal
     * @var string|null
     */
    protected ?string $PesoTotal = null;
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
     * The ValoresAnadidos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ValoresAnadidos
     * @var \StructType\VATYPE|null
     */
    protected ?\StructType\VATYPE $ValoresAnadidos = null;
    /**
     * The NotificacionBulto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NotificacionBulto
     * @var string|null
     */
    protected ?string $NotificacionBulto = null;
    /**
     * The ModalidadEntrega
     * Meta information extracted from the WSDL
     * - ref: xsd:ModalidadEntrega
     * @var string|null
     */
    protected ?string $ModalidadEntrega = null;
    /**
     * The OficinaElegida
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - minOccurs: 0
     * - ref: xsd:OficinaElegida
     * @var string|null
     */
    protected ?string $OficinaElegida = null;
    /**
     * The CodigoHomepaq
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - minOccurs: 0
     * - ref: xsd:CodigoHomepaq
     * @var string|null
     */
    protected ?string $CodigoHomepaq = null;
    /**
     * The AdmisionHomepaq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AdmisionHomepaq
     * @var string|null
     */
    protected ?string $AdmisionHomepaq = null;
    /**
     * The TipoFranqueo
     * Meta information extracted from the WSDL
     * - ref: xsd:TipoFranqueo
     * @var string|null
     */
    protected ?string $TipoFranqueo = null;
    /**
     * The NumMaquinaFranquear
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumMaquinaFranquear
     * @var string|null
     */
    protected ?string $NumMaquinaFranquear = null;
    /**
     * The ImporteFranqueado
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteFranqueado
     * @var string|null
     */
    protected ?string $ImporteFranqueado = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PreregistroEnvioMultibulto
     * @uses PreregistroEnvioMultibulto::setOid()
     * @uses PreregistroEnvioMultibulto::setEid()
     * @uses PreregistroEnvioMultibulto::setFechaOperacion()
     * @uses PreregistroEnvioMultibulto::setCodEtiquetador()
     * @uses PreregistroEnvioMultibulto::setNumContrato()
     * @uses PreregistroEnvioMultibulto::setNumCliente()
     * @uses PreregistroEnvioMultibulto::setCare()
     * @uses PreregistroEnvioMultibulto::setTotalBultos()
     * @uses PreregistroEnvioMultibulto::setModDevEtiqueta()
     * @uses PreregistroEnvioMultibulto::setRemitente()
     * @uses PreregistroEnvioMultibulto::setDestinatario()
     * @uses PreregistroEnvioMultibulto::setEnvios()
     * @uses PreregistroEnvioMultibulto::setEntregaParcial()
     * @uses PreregistroEnvioMultibulto::setCodExpedicion()
     * @uses PreregistroEnvioMultibulto::setCodManifiesto()
     * @uses PreregistroEnvioMultibulto::setCodProducto()
     * @uses PreregistroEnvioMultibulto::setPesoTotal()
     * @uses PreregistroEnvioMultibulto::setReferenciaExpedicion()
     * @uses PreregistroEnvioMultibulto::setValoresAnadidos()
     * @uses PreregistroEnvioMultibulto::setNotificacionBulto()
     * @uses PreregistroEnvioMultibulto::setModalidadEntrega()
     * @uses PreregistroEnvioMultibulto::setOficinaElegida()
     * @uses PreregistroEnvioMultibulto::setCodigoHomepaq()
     * @uses PreregistroEnvioMultibulto::setAdmisionHomepaq()
     * @uses PreregistroEnvioMultibulto::setTipoFranqueo()
     * @uses PreregistroEnvioMultibulto::setNumMaquinaFranquear()
     * @uses PreregistroEnvioMultibulto::setImporteFranqueado()
     * @uses PreregistroEnvioMultibulto::setIdiomaErrores()
     * @param string $oid
     * @param string $eid
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param string $modDevEtiqueta
     * @param \StructType\DATOSREMITENTETYPE $remitente
     * @param \StructType\DATOSDESTINATARIOTYPE $destinatario
     * @param \StructType\Envios $envios
     * @param string $entregaParcial
     * @param string $codExpedicion
     * @param string $codManifiesto
     * @param string $codProducto
     * @param string $pesoTotal
     * @param string $referenciaExpedicion
     * @param \StructType\VATYPE $valoresAnadidos
     * @param string $notificacionBulto
     * @param string $modalidadEntrega
     * @param string $oficinaElegida
     * @param string $codigoHomepaq
     * @param string $admisionHomepaq
     * @param string $tipoFranqueo
     * @param string $numMaquinaFranquear
     * @param string $importeFranqueado
     * @param string $idiomaErrores
     */
    public function __construct(?string $oid = null, ?string $eid = null, ?string $fechaOperacion = null, ?string $codEtiquetador = null, ?string $numContrato = null, ?string $numCliente = null, ?string $care = null, ?int $totalBultos = null, ?string $modDevEtiqueta = null, ?\StructType\DATOSREMITENTETYPE $remitente = null, ?\StructType\DATOSDESTINATARIOTYPE $destinatario = null, ?\StructType\Envios $envios = null, ?string $entregaParcial = null, ?string $codExpedicion = null, ?string $codManifiesto = null, ?string $codProducto = null, ?string $pesoTotal = null, ?string $referenciaExpedicion = null, ?\StructType\VATYPE $valoresAnadidos = null, ?string $notificacionBulto = null, ?string $modalidadEntrega = null, ?string $oficinaElegida = null, ?string $codigoHomepaq = null, ?string $admisionHomepaq = null, ?string $tipoFranqueo = null, ?string $numMaquinaFranquear = null, ?string $importeFranqueado = null, ?string $idiomaErrores = null)
    {
        $this
            ->setOid($oid)
            ->setEid($eid)
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setModDevEtiqueta($modDevEtiqueta)
            ->setRemitente($remitente)
            ->setDestinatario($destinatario)
            ->setEnvios($envios)
            ->setEntregaParcial($entregaParcial)
            ->setCodExpedicion($codExpedicion)
            ->setCodManifiesto($codManifiesto)
            ->setCodProducto($codProducto)
            ->setPesoTotal($pesoTotal)
            ->setReferenciaExpedicion($referenciaExpedicion)
            ->setValoresAnadidos($valoresAnadidos)
            ->setNotificacionBulto($notificacionBulto)
            ->setModalidadEntrega($modalidadEntrega)
            ->setOficinaElegida($oficinaElegida)
            ->setCodigoHomepaq($codigoHomepaq)
            ->setAdmisionHomepaq($admisionHomepaq)
            ->setTipoFranqueo($tipoFranqueo)
            ->setNumMaquinaFranquear($numMaquinaFranquear)
            ->setImporteFranqueado($importeFranqueado)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get Oid value
     * @return string|null
     */
    public function getOid(): ?string
    {
        return $this->Oid;
    }
    /**
     * Set Oid value
     * @param string $oid
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setOid(?string $oid = null): self
    {
        // validation for constraint: string
        if (!is_null($oid) && !is_string($oid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oid, true), gettype($oid)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($oid) && mb_strlen((string) $oid) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $oid)), __LINE__);
        }
        $this->Oid = $oid;
        
        return $this;
    }
    /**
     * Get Eid value
     * @return string|null
     */
    public function getEid(): ?string
    {
        return $this->Eid;
    }
    /**
     * Set Eid value
     * @param string $eid
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setEid(?string $eid = null): self
    {
        // validation for constraint: string
        if (!is_null($eid) && !is_string($eid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eid, true), gettype($eid)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($eid) && mb_strlen((string) $eid) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $eid)), __LINE__);
        }
        $this->Eid = $eid;
        
        return $this;
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setDestinatario(?\StructType\DATOSDESTINATARIOTYPE $destinatario = null): self
    {
        $this->Destinatario = $destinatario;
        
        return $this;
    }
    /**
     * Get Envios value
     * @return \StructType\Envios|null
     */
    public function getEnvios(): ?\StructType\Envios
    {
        return $this->Envios;
    }
    /**
     * Set Envios value
     * @param \StructType\Envios $envios
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setEnvios(?\StructType\Envios $envios = null): self
    {
        $this->Envios = $envios;
        
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * Get PesoTotal value
     * @return string|null
     */
    public function getPesoTotal(): ?string
    {
        return $this->PesoTotal;
    }
    /**
     * Set PesoTotal value
     * @param string $pesoTotal
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setPesoTotal(?string $pesoTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($pesoTotal) && !is_string($pesoTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoTotal, true), gettype($pesoTotal)), __LINE__);
        }
        $this->PesoTotal = $pesoTotal;
        
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
     * @return \StructType\PreregistroEnvioMultibulto
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
     * Get ValoresAnadidos value
     * @return \StructType\VATYPE|null
     */
    public function getValoresAnadidos(): ?\StructType\VATYPE
    {
        return $this->ValoresAnadidos;
    }
    /**
     * Set ValoresAnadidos value
     * @param \StructType\VATYPE $valoresAnadidos
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setValoresAnadidos(?\StructType\VATYPE $valoresAnadidos = null): self
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        
        return $this;
    }
    /**
     * Get NotificacionBulto value
     * @return string|null
     */
    public function getNotificacionBulto(): ?string
    {
        return $this->NotificacionBulto;
    }
    /**
     * Set NotificacionBulto value
     * @uses \EnumType\NotificacionBulto::valueIsValid()
     * @uses \EnumType\NotificacionBulto::getValidValues()
     * @throws InvalidArgumentException
     * @param string $notificacionBulto
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setNotificacionBulto(?string $notificacionBulto = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\NotificacionBulto::valueIsValid($notificacionBulto)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\NotificacionBulto', is_array($notificacionBulto) ? implode(', ', $notificacionBulto) : var_export($notificacionBulto, true), implode(', ', \EnumType\NotificacionBulto::getValidValues())), __LINE__);
        }
        $this->NotificacionBulto = $notificacionBulto;
        
        return $this;
    }
    /**
     * Get ModalidadEntrega value
     * @return string|null
     */
    public function getModalidadEntrega(): ?string
    {
        return $this->ModalidadEntrega;
    }
    /**
     * Set ModalidadEntrega value
     * @uses \EnumType\ModalidadEntrega::valueIsValid()
     * @uses \EnumType\ModalidadEntrega::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modalidadEntrega
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setModalidadEntrega(?string $modalidadEntrega = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModalidadEntrega::valueIsValid($modalidadEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModalidadEntrega', is_array($modalidadEntrega) ? implode(', ', $modalidadEntrega) : var_export($modalidadEntrega, true), implode(', ', \EnumType\ModalidadEntrega::getValidValues())), __LINE__);
        }
        $this->ModalidadEntrega = $modalidadEntrega;
        
        return $this;
    }
    /**
     * Get OficinaElegida value
     * @return string|null
     */
    public function getOficinaElegida(): ?string
    {
        return $this->OficinaElegida;
    }
    /**
     * Set OficinaElegida value
     * @param string $oficinaElegida
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setOficinaElegida(?string $oficinaElegida = null): self
    {
        // validation for constraint: string
        if (!is_null($oficinaElegida) && !is_string($oficinaElegida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oficinaElegida, true), gettype($oficinaElegida)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($oficinaElegida) && mb_strlen((string) $oficinaElegida) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen((string) $oficinaElegida)), __LINE__);
        }
        $this->OficinaElegida = $oficinaElegida;
        
        return $this;
    }
    /**
     * Get CodigoHomepaq value
     * @return string|null
     */
    public function getCodigoHomepaq(): ?string
    {
        return $this->CodigoHomepaq;
    }
    /**
     * Set CodigoHomepaq value
     * @param string $codigoHomepaq
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setCodigoHomepaq(?string $codigoHomepaq = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoHomepaq) && !is_string($codigoHomepaq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoHomepaq, true), gettype($codigoHomepaq)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($codigoHomepaq) && mb_strlen((string) $codigoHomepaq) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen((string) $codigoHomepaq)), __LINE__);
        }
        $this->CodigoHomepaq = $codigoHomepaq;
        
        return $this;
    }
    /**
     * Get AdmisionHomepaq value
     * @return string|null
     */
    public function getAdmisionHomepaq(): ?string
    {
        return $this->AdmisionHomepaq;
    }
    /**
     * Set AdmisionHomepaq value
     * @uses \EnumType\AdmisionHomepaq::valueIsValid()
     * @uses \EnumType\AdmisionHomepaq::getValidValues()
     * @throws InvalidArgumentException
     * @param string $admisionHomepaq
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setAdmisionHomepaq(?string $admisionHomepaq = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AdmisionHomepaq::valueIsValid($admisionHomepaq)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AdmisionHomepaq', is_array($admisionHomepaq) ? implode(', ', $admisionHomepaq) : var_export($admisionHomepaq, true), implode(', ', \EnumType\AdmisionHomepaq::getValidValues())), __LINE__);
        }
        $this->AdmisionHomepaq = $admisionHomepaq;
        
        return $this;
    }
    /**
     * Get TipoFranqueo value
     * @return string|null
     */
    public function getTipoFranqueo(): ?string
    {
        return $this->TipoFranqueo;
    }
    /**
     * Set TipoFranqueo value
     * @uses \EnumType\TipoFranqueo::valueIsValid()
     * @uses \EnumType\TipoFranqueo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tipoFranqueo
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setTipoFranqueo(?string $tipoFranqueo = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TipoFranqueo::valueIsValid($tipoFranqueo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TipoFranqueo', is_array($tipoFranqueo) ? implode(', ', $tipoFranqueo) : var_export($tipoFranqueo, true), implode(', ', \EnumType\TipoFranqueo::getValidValues())), __LINE__);
        }
        $this->TipoFranqueo = $tipoFranqueo;
        
        return $this;
    }
    /**
     * Get NumMaquinaFranquear value
     * @return string|null
     */
    public function getNumMaquinaFranquear(): ?string
    {
        return $this->NumMaquinaFranquear;
    }
    /**
     * Set NumMaquinaFranquear value
     * @param string $numMaquinaFranquear
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setNumMaquinaFranquear(?string $numMaquinaFranquear = null): self
    {
        // validation for constraint: string
        if (!is_null($numMaquinaFranquear) && !is_string($numMaquinaFranquear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numMaquinaFranquear, true), gettype($numMaquinaFranquear)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numMaquinaFranquear) && mb_strlen((string) $numMaquinaFranquear) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numMaquinaFranquear)), __LINE__);
        }
        $this->NumMaquinaFranquear = $numMaquinaFranquear;
        
        return $this;
    }
    /**
     * Get ImporteFranqueado value
     * @return string|null
     */
    public function getImporteFranqueado(): ?string
    {
        return $this->ImporteFranqueado;
    }
    /**
     * Set ImporteFranqueado value
     * @param string $importeFranqueado
     * @return \StructType\PreregistroEnvioMultibulto
     */
    public function setImporteFranqueado(?string $importeFranqueado = null): self
    {
        // validation for constraint: string
        if (!is_null($importeFranqueado) && !is_string($importeFranqueado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeFranqueado, true), gettype($importeFranqueado)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeFranqueado) && mb_strlen((string) $importeFranqueado) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $importeFranqueado)), __LINE__);
        }
        $this->ImporteFranqueado = $importeFranqueado;
        
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
     * @return \StructType\PreregistroEnvioMultibulto
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
