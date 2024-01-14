<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VATYPE extends AbstractStructBase
{
    /**
     * The ImporteSeguro
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:ImporteSeguro
     * @var string|null
     */
    protected ?string $ImporteSeguro = null;
    /**
     * The Reembolso
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Reembolso
     * @var \StructType\REEMBOLSOTYPE|null
     */
    protected ?\StructType\REEMBOLSOTYPE $Reembolso = null;
    /**
     * The EntregaExclusivaDestinatario
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaExclusivaDestinatario
     * @var string|null
     */
    protected ?string $EntregaExclusivaDestinatario = null;
    /**
     * The PruebaEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:PruebaEntrega
     * @var \StructType\PRUEBAENTREGATYPE|null
     */
    protected ?\StructType\PRUEBAENTREGATYPE $PruebaEntrega = null;
    /**
     * The Recogidaadomicilio
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Recogidaadomicilio
     * @var string|null
     */
    protected ?string $Recogidaadomicilio = null;
    /**
     * The DevolucionAlbaran
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:DevolucionAlbaran
     * @var string|null
     */
    protected ?string $DevolucionAlbaran = null;
    /**
     * The RepartoenSabado
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:RepartoenSabado
     * @var string|null
     */
    protected ?string $RepartoenSabado = null;
    /**
     * The EntregaConcertada
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - ref: xsd:EntregaConcertada
     * @var string|null
     */
    protected ?string $EntregaConcertada = null;
    /**
     * The FranjaHorariaConcertada
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - ref: xsd:FranjaHorariaConcertada
     * @var string|null
     */
    protected ?string $FranjaHorariaConcertada = null;
    /**
     * The EntregaconRecogida
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaconRecogida
     * @var string|null
     */
    protected ?string $EntregaconRecogida = null;
    /**
     * The IndImprimirEtiqueta
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:IndImprimirEtiqueta
     * @var string|null
     */
    protected ?string $IndImprimirEtiqueta = null;
    /**
     * The TextoAdicional
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:TextoAdicional
     * @var string|null
     */
    protected ?string $TextoAdicional = null;
    /**
     * The TiempoEnLista
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TiempoEnLista
     * @var int|null
     */
    protected ?int $TiempoEnLista = null;
    /**
     * The IntentosDeEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IntentosDeEntrega
     * @var int|null
     */
    protected ?int $IntentosDeEntrega = null;
    /**
     * The EntregaSinFirmar
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:EntregaSinFirmar
     * @var string|null
     */
    protected ?string $EntregaSinFirmar = null;
    /**
     * The ComplejidadGestion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ComplejidadGestion
     * @var string|null
     */
    protected ?string $ComplejidadGestion = null;
    /**
     * The AutorizacionPreviaEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AutorizacionPreviaEntrega
     * @var string|null
     */
    protected ?string $AutorizacionPreviaEntrega = null;
    /**
     * The TarifaPlana
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TarifaPlana
     * @var string|null
     */
    protected ?string $TarifaPlana = null;
    /**
     * The IdClienteTarifaPlana
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:IdClienteTarifaPlana
     * @var string|null
     */
    protected ?string $IdClienteTarifaPlana = null;
    /**
     * The IdOperacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdOperacion
     * @var string|null
     */
    protected ?string $IdOperacion = null;
    /**
     * Constructor method for VATYPE
     * @uses VATYPE::setImporteSeguro()
     * @uses VATYPE::setReembolso()
     * @uses VATYPE::setEntregaExclusivaDestinatario()
     * @uses VATYPE::setPruebaEntrega()
     * @uses VATYPE::setRecogidaadomicilio()
     * @uses VATYPE::setDevolucionAlbaran()
     * @uses VATYPE::setRepartoenSabado()
     * @uses VATYPE::setEntregaConcertada()
     * @uses VATYPE::setFranjaHorariaConcertada()
     * @uses VATYPE::setEntregaconRecogida()
     * @uses VATYPE::setIndImprimirEtiqueta()
     * @uses VATYPE::setTextoAdicional()
     * @uses VATYPE::setTiempoEnLista()
     * @uses VATYPE::setIntentosDeEntrega()
     * @uses VATYPE::setEntregaSinFirmar()
     * @uses VATYPE::setComplejidadGestion()
     * @uses VATYPE::setAutorizacionPreviaEntrega()
     * @uses VATYPE::setTarifaPlana()
     * @uses VATYPE::setIdClienteTarifaPlana()
     * @uses VATYPE::setIdOperacion()
     * @param string $importeSeguro
     * @param \StructType\REEMBOLSOTYPE $reembolso
     * @param string $entregaExclusivaDestinatario
     * @param \StructType\PRUEBAENTREGATYPE $pruebaEntrega
     * @param string $recogidaadomicilio
     * @param string $devolucionAlbaran
     * @param string $repartoenSabado
     * @param string $entregaConcertada
     * @param string $franjaHorariaConcertada
     * @param string $entregaconRecogida
     * @param string $indImprimirEtiqueta
     * @param string $textoAdicional
     * @param int $tiempoEnLista
     * @param int $intentosDeEntrega
     * @param string $entregaSinFirmar
     * @param string $complejidadGestion
     * @param string $autorizacionPreviaEntrega
     * @param string $tarifaPlana
     * @param string $idClienteTarifaPlana
     * @param string $idOperacion
     */
    public function __construct(?string $importeSeguro = null, ?\StructType\REEMBOLSOTYPE $reembolso = null, ?string $entregaExclusivaDestinatario = null, ?\StructType\PRUEBAENTREGATYPE $pruebaEntrega = null, ?string $recogidaadomicilio = null, ?string $devolucionAlbaran = null, ?string $repartoenSabado = null, ?string $entregaConcertada = null, ?string $franjaHorariaConcertada = null, ?string $entregaconRecogida = null, ?string $indImprimirEtiqueta = null, ?string $textoAdicional = null, ?int $tiempoEnLista = null, ?int $intentosDeEntrega = null, ?string $entregaSinFirmar = null, ?string $complejidadGestion = null, ?string $autorizacionPreviaEntrega = null, ?string $tarifaPlana = null, ?string $idClienteTarifaPlana = null, ?string $idOperacion = null)
    {
        $this
            ->setImporteSeguro($importeSeguro)
            ->setReembolso($reembolso)
            ->setEntregaExclusivaDestinatario($entregaExclusivaDestinatario)
            ->setPruebaEntrega($pruebaEntrega)
            ->setRecogidaadomicilio($recogidaadomicilio)
            ->setDevolucionAlbaran($devolucionAlbaran)
            ->setRepartoenSabado($repartoenSabado)
            ->setEntregaConcertada($entregaConcertada)
            ->setFranjaHorariaConcertada($franjaHorariaConcertada)
            ->setEntregaconRecogida($entregaconRecogida)
            ->setIndImprimirEtiqueta($indImprimirEtiqueta)
            ->setTextoAdicional($textoAdicional)
            ->setTiempoEnLista($tiempoEnLista)
            ->setIntentosDeEntrega($intentosDeEntrega)
            ->setEntregaSinFirmar($entregaSinFirmar)
            ->setComplejidadGestion($complejidadGestion)
            ->setAutorizacionPreviaEntrega($autorizacionPreviaEntrega)
            ->setTarifaPlana($tarifaPlana)
            ->setIdClienteTarifaPlana($idClienteTarifaPlana)
            ->setIdOperacion($idOperacion);
    }
    /**
     * Get ImporteSeguro value
     * @return string|null
     */
    public function getImporteSeguro(): ?string
    {
        return $this->ImporteSeguro;
    }
    /**
     * Set ImporteSeguro value
     * @param string $importeSeguro
     * @return \StructType\VATYPE
     */
    public function setImporteSeguro(?string $importeSeguro = null): self
    {
        // validation for constraint: string
        if (!is_null($importeSeguro) && !is_string($importeSeguro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeSeguro, true), gettype($importeSeguro)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($importeSeguro) && mb_strlen((string) $importeSeguro) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $importeSeguro)), __LINE__);
        }
        $this->ImporteSeguro = $importeSeguro;
        
        return $this;
    }
    /**
     * Get Reembolso value
     * @return \StructType\REEMBOLSOTYPE|null
     */
    public function getReembolso(): ?\StructType\REEMBOLSOTYPE
    {
        return $this->Reembolso;
    }
    /**
     * Set Reembolso value
     * @param \StructType\REEMBOLSOTYPE $reembolso
     * @return \StructType\VATYPE
     */
    public function setReembolso(?\StructType\REEMBOLSOTYPE $reembolso = null): self
    {
        $this->Reembolso = $reembolso;
        
        return $this;
    }
    /**
     * Get EntregaExclusivaDestinatario value
     * @return string|null
     */
    public function getEntregaExclusivaDestinatario(): ?string
    {
        return $this->EntregaExclusivaDestinatario;
    }
    /**
     * Set EntregaExclusivaDestinatario value
     * @param string $entregaExclusivaDestinatario
     * @return \StructType\VATYPE
     */
    public function setEntregaExclusivaDestinatario(?string $entregaExclusivaDestinatario = null): self
    {
        // validation for constraint: string
        if (!is_null($entregaExclusivaDestinatario) && !is_string($entregaExclusivaDestinatario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaExclusivaDestinatario, true), gettype($entregaExclusivaDestinatario)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaExclusivaDestinatario) && mb_strlen((string) $entregaExclusivaDestinatario) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $entregaExclusivaDestinatario)), __LINE__);
        }
        $this->EntregaExclusivaDestinatario = $entregaExclusivaDestinatario;
        
        return $this;
    }
    /**
     * Get PruebaEntrega value
     * @return \StructType\PRUEBAENTREGATYPE|null
     */
    public function getPruebaEntrega(): ?\StructType\PRUEBAENTREGATYPE
    {
        return $this->PruebaEntrega;
    }
    /**
     * Set PruebaEntrega value
     * @param \StructType\PRUEBAENTREGATYPE $pruebaEntrega
     * @return \StructType\VATYPE
     */
    public function setPruebaEntrega(?\StructType\PRUEBAENTREGATYPE $pruebaEntrega = null): self
    {
        $this->PruebaEntrega = $pruebaEntrega;
        
        return $this;
    }
    /**
     * Get Recogidaadomicilio value
     * @return string|null
     */
    public function getRecogidaadomicilio(): ?string
    {
        return $this->Recogidaadomicilio;
    }
    /**
     * Set Recogidaadomicilio value
     * @param string $recogidaadomicilio
     * @return \StructType\VATYPE
     */
    public function setRecogidaadomicilio(?string $recogidaadomicilio = null): self
    {
        // validation for constraint: string
        if (!is_null($recogidaadomicilio) && !is_string($recogidaadomicilio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recogidaadomicilio, true), gettype($recogidaadomicilio)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($recogidaadomicilio) && mb_strlen((string) $recogidaadomicilio) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $recogidaadomicilio)), __LINE__);
        }
        $this->Recogidaadomicilio = $recogidaadomicilio;
        
        return $this;
    }
    /**
     * Get DevolucionAlbaran value
     * @return string|null
     */
    public function getDevolucionAlbaran(): ?string
    {
        return $this->DevolucionAlbaran;
    }
    /**
     * Set DevolucionAlbaran value
     * @param string $devolucionAlbaran
     * @return \StructType\VATYPE
     */
    public function setDevolucionAlbaran(?string $devolucionAlbaran = null): self
    {
        // validation for constraint: string
        if (!is_null($devolucionAlbaran) && !is_string($devolucionAlbaran)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devolucionAlbaran, true), gettype($devolucionAlbaran)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($devolucionAlbaran) && mb_strlen((string) $devolucionAlbaran) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $devolucionAlbaran)), __LINE__);
        }
        $this->DevolucionAlbaran = $devolucionAlbaran;
        
        return $this;
    }
    /**
     * Get RepartoenSabado value
     * @return string|null
     */
    public function getRepartoenSabado(): ?string
    {
        return $this->RepartoenSabado;
    }
    /**
     * Set RepartoenSabado value
     * @param string $repartoenSabado
     * @return \StructType\VATYPE
     */
    public function setRepartoenSabado(?string $repartoenSabado = null): self
    {
        // validation for constraint: string
        if (!is_null($repartoenSabado) && !is_string($repartoenSabado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repartoenSabado, true), gettype($repartoenSabado)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($repartoenSabado) && mb_strlen((string) $repartoenSabado) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $repartoenSabado)), __LINE__);
        }
        $this->RepartoenSabado = $repartoenSabado;
        
        return $this;
    }
    /**
     * Get EntregaConcertada value
     * @return string|null
     */
    public function getEntregaConcertada(): ?string
    {
        return $this->EntregaConcertada;
    }
    /**
     * Set EntregaConcertada value
     * @param string $entregaConcertada
     * @return \StructType\VATYPE
     */
    public function setEntregaConcertada(?string $entregaConcertada = null): self
    {
        // validation for constraint: string
        if (!is_null($entregaConcertada) && !is_string($entregaConcertada)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaConcertada, true), gettype($entregaConcertada)), __LINE__);
        }
        $this->EntregaConcertada = $entregaConcertada;
        
        return $this;
    }
    /**
     * Get FranjaHorariaConcertada value
     * @return string|null
     */
    public function getFranjaHorariaConcertada(): ?string
    {
        return $this->FranjaHorariaConcertada;
    }
    /**
     * Set FranjaHorariaConcertada value
     * @param string $franjaHorariaConcertada
     * @return \StructType\VATYPE
     */
    public function setFranjaHorariaConcertada(?string $franjaHorariaConcertada = null): self
    {
        // validation for constraint: string
        if (!is_null($franjaHorariaConcertada) && !is_string($franjaHorariaConcertada)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($franjaHorariaConcertada, true), gettype($franjaHorariaConcertada)), __LINE__);
        }
        $this->FranjaHorariaConcertada = $franjaHorariaConcertada;
        
        return $this;
    }
    /**
     * Get EntregaconRecogida value
     * @return string|null
     */
    public function getEntregaconRecogida(): ?string
    {
        return $this->EntregaconRecogida;
    }
    /**
     * Set EntregaconRecogida value
     * @param string $entregaconRecogida
     * @return \StructType\VATYPE
     */
    public function setEntregaconRecogida(?string $entregaconRecogida = null): self
    {
        // validation for constraint: string
        if (!is_null($entregaconRecogida) && !is_string($entregaconRecogida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaconRecogida, true), gettype($entregaconRecogida)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaconRecogida) && mb_strlen((string) $entregaconRecogida) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $entregaconRecogida)), __LINE__);
        }
        $this->EntregaconRecogida = $entregaconRecogida;
        
        return $this;
    }
    /**
     * Get IndImprimirEtiqueta value
     * @return string|null
     */
    public function getIndImprimirEtiqueta(): ?string
    {
        return $this->IndImprimirEtiqueta;
    }
    /**
     * Set IndImprimirEtiqueta value
     * @param string $indImprimirEtiqueta
     * @return \StructType\VATYPE
     */
    public function setIndImprimirEtiqueta(?string $indImprimirEtiqueta = null): self
    {
        // validation for constraint: string
        if (!is_null($indImprimirEtiqueta) && !is_string($indImprimirEtiqueta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($indImprimirEtiqueta, true), gettype($indImprimirEtiqueta)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($indImprimirEtiqueta) && mb_strlen((string) $indImprimirEtiqueta) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $indImprimirEtiqueta)), __LINE__);
        }
        $this->IndImprimirEtiqueta = $indImprimirEtiqueta;
        
        return $this;
    }
    /**
     * Get TextoAdicional value
     * @return string|null
     */
    public function getTextoAdicional(): ?string
    {
        return $this->TextoAdicional;
    }
    /**
     * Set TextoAdicional value
     * @param string $textoAdicional
     * @return \StructType\VATYPE
     */
    public function setTextoAdicional(?string $textoAdicional = null): self
    {
        // validation for constraint: string
        if (!is_null($textoAdicional) && !is_string($textoAdicional)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textoAdicional, true), gettype($textoAdicional)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($textoAdicional) && mb_strlen((string) $textoAdicional) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $textoAdicional)), __LINE__);
        }
        $this->TextoAdicional = $textoAdicional;
        
        return $this;
    }
    /**
     * Get TiempoEnLista value
     * @return int|null
     */
    public function getTiempoEnLista(): ?int
    {
        return $this->TiempoEnLista;
    }
    /**
     * Set TiempoEnLista value
     * @param int $tiempoEnLista
     * @return \StructType\VATYPE
     */
    public function setTiempoEnLista(?int $tiempoEnLista = null): self
    {
        // validation for constraint: int
        if (!is_null($tiempoEnLista) && !(is_int($tiempoEnLista) || ctype_digit($tiempoEnLista))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tiempoEnLista, true), gettype($tiempoEnLista)), __LINE__);
        }
        $this->TiempoEnLista = $tiempoEnLista;
        
        return $this;
    }
    /**
     * Get IntentosDeEntrega value
     * @return int|null
     */
    public function getIntentosDeEntrega(): ?int
    {
        return $this->IntentosDeEntrega;
    }
    /**
     * Set IntentosDeEntrega value
     * @param int $intentosDeEntrega
     * @return \StructType\VATYPE
     */
    public function setIntentosDeEntrega(?int $intentosDeEntrega = null): self
    {
        // validation for constraint: int
        if (!is_null($intentosDeEntrega) && !(is_int($intentosDeEntrega) || ctype_digit($intentosDeEntrega))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intentosDeEntrega, true), gettype($intentosDeEntrega)), __LINE__);
        }
        $this->IntentosDeEntrega = $intentosDeEntrega;
        
        return $this;
    }
    /**
     * Get EntregaSinFirmar value
     * @return string|null
     */
    public function getEntregaSinFirmar(): ?string
    {
        return $this->EntregaSinFirmar;
    }
    /**
     * Set EntregaSinFirmar value
     * @param string $entregaSinFirmar
     * @return \StructType\VATYPE
     */
    public function setEntregaSinFirmar(?string $entregaSinFirmar = null): self
    {
        // validation for constraint: string
        if (!is_null($entregaSinFirmar) && !is_string($entregaSinFirmar)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entregaSinFirmar, true), gettype($entregaSinFirmar)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($entregaSinFirmar) && mb_strlen((string) $entregaSinFirmar) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $entregaSinFirmar)), __LINE__);
        }
        $this->EntregaSinFirmar = $entregaSinFirmar;
        
        return $this;
    }
    /**
     * Get ComplejidadGestion value
     * @return string|null
     */
    public function getComplejidadGestion(): ?string
    {
        return $this->ComplejidadGestion;
    }
    /**
     * Set ComplejidadGestion value
     * @uses \EnumType\ComplejidadGestion::valueIsValid()
     * @uses \EnumType\ComplejidadGestion::getValidValues()
     * @throws InvalidArgumentException
     * @param string $complejidadGestion
     * @return \StructType\VATYPE
     */
    public function setComplejidadGestion(?string $complejidadGestion = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ComplejidadGestion::valueIsValid($complejidadGestion)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ComplejidadGestion', is_array($complejidadGestion) ? implode(', ', $complejidadGestion) : var_export($complejidadGestion, true), implode(', ', \EnumType\ComplejidadGestion::getValidValues())), __LINE__);
        }
        $this->ComplejidadGestion = $complejidadGestion;
        
        return $this;
    }
    /**
     * Get AutorizacionPreviaEntrega value
     * @return string|null
     */
    public function getAutorizacionPreviaEntrega(): ?string
    {
        return $this->AutorizacionPreviaEntrega;
    }
    /**
     * Set AutorizacionPreviaEntrega value
     * @uses \EnumType\AutorizacionPreviaEntrega::valueIsValid()
     * @uses \EnumType\AutorizacionPreviaEntrega::getValidValues()
     * @throws InvalidArgumentException
     * @param string $autorizacionPreviaEntrega
     * @return \StructType\VATYPE
     */
    public function setAutorizacionPreviaEntrega(?string $autorizacionPreviaEntrega = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AutorizacionPreviaEntrega::valueIsValid($autorizacionPreviaEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AutorizacionPreviaEntrega', is_array($autorizacionPreviaEntrega) ? implode(', ', $autorizacionPreviaEntrega) : var_export($autorizacionPreviaEntrega, true), implode(', ', \EnumType\AutorizacionPreviaEntrega::getValidValues())), __LINE__);
        }
        $this->AutorizacionPreviaEntrega = $autorizacionPreviaEntrega;
        
        return $this;
    }
    /**
     * Get TarifaPlana value
     * @return string|null
     */
    public function getTarifaPlana(): ?string
    {
        return $this->TarifaPlana;
    }
    /**
     * Set TarifaPlana value
     * @uses \EnumType\TarifaPlana::valueIsValid()
     * @uses \EnumType\TarifaPlana::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tarifaPlana
     * @return \StructType\VATYPE
     */
    public function setTarifaPlana(?string $tarifaPlana = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TarifaPlana::valueIsValid($tarifaPlana)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TarifaPlana', is_array($tarifaPlana) ? implode(', ', $tarifaPlana) : var_export($tarifaPlana, true), implode(', ', \EnumType\TarifaPlana::getValidValues())), __LINE__);
        }
        $this->TarifaPlana = $tarifaPlana;
        
        return $this;
    }
    /**
     * Get IdClienteTarifaPlana value
     * @return string|null
     */
    public function getIdClienteTarifaPlana(): ?string
    {
        return $this->IdClienteTarifaPlana;
    }
    /**
     * Set IdClienteTarifaPlana value
     * @param string $idClienteTarifaPlana
     * @return \StructType\VATYPE
     */
    public function setIdClienteTarifaPlana(?string $idClienteTarifaPlana = null): self
    {
        // validation for constraint: string
        if (!is_null($idClienteTarifaPlana) && !is_string($idClienteTarifaPlana)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idClienteTarifaPlana, true), gettype($idClienteTarifaPlana)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($idClienteTarifaPlana) && mb_strlen((string) $idClienteTarifaPlana) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $idClienteTarifaPlana)), __LINE__);
        }
        $this->IdClienteTarifaPlana = $idClienteTarifaPlana;
        
        return $this;
    }
    /**
     * Get IdOperacion value
     * @return string|null
     */
    public function getIdOperacion(): ?string
    {
        return $this->IdOperacion;
    }
    /**
     * Set IdOperacion value
     * @param string $idOperacion
     * @return \StructType\VATYPE
     */
    public function setIdOperacion(?string $idOperacion = null): self
    {
        // validation for constraint: string
        if (!is_null($idOperacion) && !is_string($idOperacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idOperacion, true), gettype($idOperacion)), __LINE__);
        }
        $this->IdOperacion = $idOperacion;
        
        return $this;
    }
}
