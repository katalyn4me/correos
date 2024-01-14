<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSENVIOMODIFTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSENVIOMODIFTYPE extends AbstractStructBase
{
    /**
     * The ReferenciaCliente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente
     * @var string|null
     */
    protected ?string $ReferenciaCliente = null;
    /**
     * The ReferenciaCliente2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente2
     * @var string|null
     */
    protected ?string $ReferenciaCliente2 = null;
    /**
     * The ReferenciaCliente3
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente3
     * @var string|null
     */
    protected ?string $ReferenciaCliente3 = null;
    /**
     * The TipoFranqueo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * The CodPromocion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:CodPromocion
     * @var string|null
     */
    protected ?string $CodPromocion = null;
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
     * The Pesos
     * Meta information extracted from the WSDL
     * - ref: xsd:Pesos
     * @var \StructType\Pesos|null
     */
    protected ?\StructType\Pesos $Pesos = null;
    /**
     * The Largo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Largo
     * @var int|null
     */
    protected ?int $Largo = null;
    /**
     * The Alto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Alto
     * @var int|null
     */
    protected ?int $Alto = null;
    /**
     * The Ancho
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Ancho
     * @var int|null
     */
    protected ?int $Ancho = null;
    /**
     * The ValoresAnadidos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ValoresAnadidos
     * @var \StructType\VATYPE|null
     */
    protected ?\StructType\VATYPE $ValoresAnadidos = null;
    /**
     * The CodigoEmbalajePrepago
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodigoEmbalajePrepago
     * @var string|null
     */
    protected ?string $CodigoEmbalajePrepago = null;
    /**
     * The CodigoPuntoAdmision
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - minOccurs: 0
     * - ref: xsd:CodigoPuntoAdmision
     * @var string|null
     */
    protected ?string $CodigoPuntoAdmision = null;
    /**
     * The FechaDepositoPrevista
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaDepositoPrevista
     * @var string|null
     */
    protected ?string $FechaDepositoPrevista = null;
    /**
     * The Observaciones1
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 45
     * - minOccurs: 0
     * - ref: xsd:Observaciones1
     * @var string|null
     */
    protected ?string $Observaciones1 = null;
    /**
     * The Observaciones2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 45
     * - minOccurs: 0
     * - ref: xsd:Observaciones2
     * @var string|null
     */
    protected ?string $Observaciones2 = null;
    /**
     * The InstruccionesDevolucion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:InstruccionesDevolucion
     * @var string|null
     */
    protected ?string $InstruccionesDevolucion = null;
    /**
     * The Aduana
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Aduana
     * @var \StructType\ADUANATYPE|null
     */
    protected ?\StructType\ADUANATYPE $Aduana = null;
    /**
     * The CodigoIda
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - minOccurs: 0
     * - ref: xsd:CodigoIda
     * @var string|null
     */
    protected ?string $CodigoIda = null;
    /**
     * The PermiteEmbalaje
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:PermiteEmbalaje
     * @var string|null
     */
    protected ?string $PermiteEmbalaje = null;
    /**
     * The FechaCaducidad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaCaducidad
     * @var string|null
     */
    protected ?string $FechaCaducidad = null;
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
     * The ToquenIdCorPaq
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:ToquenIdCorPaq
     * @var string|null
     */
    protected ?string $ToquenIdCorPaq = null;
    /**
     * The AdmisionHomepaq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AdmisionHomepaq
     * @var string|null
     */
    protected ?string $AdmisionHomepaq = null;
    /**
     * The Documento1
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Documento1
     * @var string|null
     */
    protected ?string $Documento1 = null;
    /**
     * The AccDocumento1
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:AccDocumento1
     * @var string|null
     */
    protected ?string $AccDocumento1 = null;
    /**
     * The ObsDocumento1
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ObsDocumento1
     * @var string|null
     */
    protected ?string $ObsDocumento1 = null;
    /**
     * The Documento2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Documento2
     * @var string|null
     */
    protected ?string $Documento2 = null;
    /**
     * The AccDocumento2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:AccDocumento2
     * @var string|null
     */
    protected ?string $AccDocumento2 = null;
    /**
     * The ObsDocumento2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ObsDocumento2
     * @var string|null
     */
    protected ?string $ObsDocumento2 = null;
    /**
     * The Documento3
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Documento3
     * @var string|null
     */
    protected ?string $Documento3 = null;
    /**
     * The AccDocumento3
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:AccDocumento3
     * @var string|null
     */
    protected ?string $AccDocumento3 = null;
    /**
     * The ObsDocumento3
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ObsDocumento3
     * @var string|null
     */
    protected ?string $ObsDocumento3 = null;
    /**
     * The OperadorPostal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:OperadorPostal
     * @var string|null
     */
    protected ?string $OperadorPostal = null;
    /**
     * The CodigoEnvioOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:CodigoEnvioOriginal
     * @var string|null
     */
    protected ?string $CodigoEnvioOriginal = null;
    /**
     * The TipoModificacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TipoModificacion
     * @var string|null
     */
    protected ?string $TipoModificacion = null;
    /**
     * Constructor method for DATOSENVIOMODIFTYPE
     * @uses DATOSENVIOMODIFTYPE::setReferenciaCliente()
     * @uses DATOSENVIOMODIFTYPE::setReferenciaCliente2()
     * @uses DATOSENVIOMODIFTYPE::setReferenciaCliente3()
     * @uses DATOSENVIOMODIFTYPE::setTipoFranqueo()
     * @uses DATOSENVIOMODIFTYPE::setNumMaquinaFranquear()
     * @uses DATOSENVIOMODIFTYPE::setImporteFranqueado()
     * @uses DATOSENVIOMODIFTYPE::setCodPromocion()
     * @uses DATOSENVIOMODIFTYPE::setOficinaElegida()
     * @uses DATOSENVIOMODIFTYPE::setPesos()
     * @uses DATOSENVIOMODIFTYPE::setLargo()
     * @uses DATOSENVIOMODIFTYPE::setAlto()
     * @uses DATOSENVIOMODIFTYPE::setAncho()
     * @uses DATOSENVIOMODIFTYPE::setValoresAnadidos()
     * @uses DATOSENVIOMODIFTYPE::setCodigoEmbalajePrepago()
     * @uses DATOSENVIOMODIFTYPE::setCodigoPuntoAdmision()
     * @uses DATOSENVIOMODIFTYPE::setFechaDepositoPrevista()
     * @uses DATOSENVIOMODIFTYPE::setObservaciones1()
     * @uses DATOSENVIOMODIFTYPE::setObservaciones2()
     * @uses DATOSENVIOMODIFTYPE::setInstruccionesDevolucion()
     * @uses DATOSENVIOMODIFTYPE::setAduana()
     * @uses DATOSENVIOMODIFTYPE::setCodigoIda()
     * @uses DATOSENVIOMODIFTYPE::setPermiteEmbalaje()
     * @uses DATOSENVIOMODIFTYPE::setFechaCaducidad()
     * @uses DATOSENVIOMODIFTYPE::setReferenciaExpedicion()
     * @uses DATOSENVIOMODIFTYPE::setCodigoHomepaq()
     * @uses DATOSENVIOMODIFTYPE::setToquenIdCorPaq()
     * @uses DATOSENVIOMODIFTYPE::setAdmisionHomepaq()
     * @uses DATOSENVIOMODIFTYPE::setDocumento1()
     * @uses DATOSENVIOMODIFTYPE::setAccDocumento1()
     * @uses DATOSENVIOMODIFTYPE::setObsDocumento1()
     * @uses DATOSENVIOMODIFTYPE::setDocumento2()
     * @uses DATOSENVIOMODIFTYPE::setAccDocumento2()
     * @uses DATOSENVIOMODIFTYPE::setObsDocumento2()
     * @uses DATOSENVIOMODIFTYPE::setDocumento3()
     * @uses DATOSENVIOMODIFTYPE::setAccDocumento3()
     * @uses DATOSENVIOMODIFTYPE::setObsDocumento3()
     * @uses DATOSENVIOMODIFTYPE::setOperadorPostal()
     * @uses DATOSENVIOMODIFTYPE::setCodigoEnvioOriginal()
     * @uses DATOSENVIOMODIFTYPE::setTipoModificacion()
     * @param string $referenciaCliente
     * @param string $referenciaCliente2
     * @param string $referenciaCliente3
     * @param string $tipoFranqueo
     * @param string $numMaquinaFranquear
     * @param string $importeFranqueado
     * @param string $codPromocion
     * @param string $oficinaElegida
     * @param \StructType\Pesos $pesos
     * @param int $largo
     * @param int $alto
     * @param int $ancho
     * @param \StructType\VATYPE $valoresAnadidos
     * @param string $codigoEmbalajePrepago
     * @param string $codigoPuntoAdmision
     * @param string $fechaDepositoPrevista
     * @param string $observaciones1
     * @param string $observaciones2
     * @param string $instruccionesDevolucion
     * @param \StructType\ADUANATYPE $aduana
     * @param string $codigoIda
     * @param string $permiteEmbalaje
     * @param string $fechaCaducidad
     * @param string $referenciaExpedicion
     * @param string $codigoHomepaq
     * @param string $toquenIdCorPaq
     * @param string $admisionHomepaq
     * @param string $documento1
     * @param string $accDocumento1
     * @param string $obsDocumento1
     * @param string $documento2
     * @param string $accDocumento2
     * @param string $obsDocumento2
     * @param string $documento3
     * @param string $accDocumento3
     * @param string $obsDocumento3
     * @param string $operadorPostal
     * @param string $codigoEnvioOriginal
     * @param string $tipoModificacion
     */
    public function __construct(?string $referenciaCliente = null, ?string $referenciaCliente2 = null, ?string $referenciaCliente3 = null, ?string $tipoFranqueo = null, ?string $numMaquinaFranquear = null, ?string $importeFranqueado = null, ?string $codPromocion = null, ?string $oficinaElegida = null, ?\StructType\Pesos $pesos = null, ?int $largo = null, ?int $alto = null, ?int $ancho = null, ?\StructType\VATYPE $valoresAnadidos = null, ?string $codigoEmbalajePrepago = null, ?string $codigoPuntoAdmision = null, ?string $fechaDepositoPrevista = null, ?string $observaciones1 = null, ?string $observaciones2 = null, ?string $instruccionesDevolucion = null, ?\StructType\ADUANATYPE $aduana = null, ?string $codigoIda = null, ?string $permiteEmbalaje = null, ?string $fechaCaducidad = null, ?string $referenciaExpedicion = null, ?string $codigoHomepaq = null, ?string $toquenIdCorPaq = null, ?string $admisionHomepaq = null, ?string $documento1 = null, ?string $accDocumento1 = null, ?string $obsDocumento1 = null, ?string $documento2 = null, ?string $accDocumento2 = null, ?string $obsDocumento2 = null, ?string $documento3 = null, ?string $accDocumento3 = null, ?string $obsDocumento3 = null, ?string $operadorPostal = null, ?string $codigoEnvioOriginal = null, ?string $tipoModificacion = null)
    {
        $this
            ->setReferenciaCliente($referenciaCliente)
            ->setReferenciaCliente2($referenciaCliente2)
            ->setReferenciaCliente3($referenciaCliente3)
            ->setTipoFranqueo($tipoFranqueo)
            ->setNumMaquinaFranquear($numMaquinaFranquear)
            ->setImporteFranqueado($importeFranqueado)
            ->setCodPromocion($codPromocion)
            ->setOficinaElegida($oficinaElegida)
            ->setPesos($pesos)
            ->setLargo($largo)
            ->setAlto($alto)
            ->setAncho($ancho)
            ->setValoresAnadidos($valoresAnadidos)
            ->setCodigoEmbalajePrepago($codigoEmbalajePrepago)
            ->setCodigoPuntoAdmision($codigoPuntoAdmision)
            ->setFechaDepositoPrevista($fechaDepositoPrevista)
            ->setObservaciones1($observaciones1)
            ->setObservaciones2($observaciones2)
            ->setInstruccionesDevolucion($instruccionesDevolucion)
            ->setAduana($aduana)
            ->setCodigoIda($codigoIda)
            ->setPermiteEmbalaje($permiteEmbalaje)
            ->setFechaCaducidad($fechaCaducidad)
            ->setReferenciaExpedicion($referenciaExpedicion)
            ->setCodigoHomepaq($codigoHomepaq)
            ->setToquenIdCorPaq($toquenIdCorPaq)
            ->setAdmisionHomepaq($admisionHomepaq)
            ->setDocumento1($documento1)
            ->setAccDocumento1($accDocumento1)
            ->setObsDocumento1($obsDocumento1)
            ->setDocumento2($documento2)
            ->setAccDocumento2($accDocumento2)
            ->setObsDocumento2($obsDocumento2)
            ->setDocumento3($documento3)
            ->setAccDocumento3($accDocumento3)
            ->setObsDocumento3($obsDocumento3)
            ->setOperadorPostal($operadorPostal)
            ->setCodigoEnvioOriginal($codigoEnvioOriginal)
            ->setTipoModificacion($tipoModificacion);
    }
    /**
     * Get ReferenciaCliente value
     * @return string|null
     */
    public function getReferenciaCliente(): ?string
    {
        return $this->ReferenciaCliente;
    }
    /**
     * Set ReferenciaCliente value
     * @param string $referenciaCliente
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setReferenciaCliente(?string $referenciaCliente = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente) && !is_string($referenciaCliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente, true), gettype($referenciaCliente)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente) && mb_strlen((string) $referenciaCliente) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente)), __LINE__);
        }
        $this->ReferenciaCliente = $referenciaCliente;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente2 value
     * @return string|null
     */
    public function getReferenciaCliente2(): ?string
    {
        return $this->ReferenciaCliente2;
    }
    /**
     * Set ReferenciaCliente2 value
     * @param string $referenciaCliente2
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setReferenciaCliente2(?string $referenciaCliente2 = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente2) && !is_string($referenciaCliente2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente2, true), gettype($referenciaCliente2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente2) && mb_strlen((string) $referenciaCliente2) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente2)), __LINE__);
        }
        $this->ReferenciaCliente2 = $referenciaCliente2;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente3 value
     * @return string|null
     */
    public function getReferenciaCliente3(): ?string
    {
        return $this->ReferenciaCliente3;
    }
    /**
     * Set ReferenciaCliente3 value
     * @param string $referenciaCliente3
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setReferenciaCliente3(?string $referenciaCliente3 = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente3) && !is_string($referenciaCliente3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente3, true), gettype($referenciaCliente3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente3) && mb_strlen((string) $referenciaCliente3) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente3)), __LINE__);
        }
        $this->ReferenciaCliente3 = $referenciaCliente3;
        
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * Get CodPromocion value
     * @return string|null
     */
    public function getCodPromocion(): ?string
    {
        return $this->CodPromocion;
    }
    /**
     * Set CodPromocion value
     * @param string $codPromocion
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setCodPromocion(?string $codPromocion = null): self
    {
        // validation for constraint: string
        if (!is_null($codPromocion) && !is_string($codPromocion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codPromocion, true), gettype($codPromocion)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($codPromocion) && mb_strlen((string) $codPromocion) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $codPromocion)), __LINE__);
        }
        $this->CodPromocion = $codPromocion;
        
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * Get Pesos value
     * @return \StructType\Pesos|null
     */
    public function getPesos(): ?\StructType\Pesos
    {
        return $this->Pesos;
    }
    /**
     * Set Pesos value
     * @param \StructType\Pesos $pesos
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setPesos(?\StructType\Pesos $pesos = null): self
    {
        $this->Pesos = $pesos;
        
        return $this;
    }
    /**
     * Get Largo value
     * @return int|null
     */
    public function getLargo(): ?int
    {
        return $this->Largo;
    }
    /**
     * Set Largo value
     * @param int $largo
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setLargo(?int $largo = null): self
    {
        // validation for constraint: int
        if (!is_null($largo) && !(is_int($largo) || ctype_digit($largo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largo, true), gettype($largo)), __LINE__);
        }
        $this->Largo = $largo;
        
        return $this;
    }
    /**
     * Get Alto value
     * @return int|null
     */
    public function getAlto(): ?int
    {
        return $this->Alto;
    }
    /**
     * Set Alto value
     * @param int $alto
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setAlto(?int $alto = null): self
    {
        // validation for constraint: int
        if (!is_null($alto) && !(is_int($alto) || ctype_digit($alto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($alto, true), gettype($alto)), __LINE__);
        }
        $this->Alto = $alto;
        
        return $this;
    }
    /**
     * Get Ancho value
     * @return int|null
     */
    public function getAncho(): ?int
    {
        return $this->Ancho;
    }
    /**
     * Set Ancho value
     * @param int $ancho
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setAncho(?int $ancho = null): self
    {
        // validation for constraint: int
        if (!is_null($ancho) && !(is_int($ancho) || ctype_digit($ancho))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ancho, true), gettype($ancho)), __LINE__);
        }
        $this->Ancho = $ancho;
        
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
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setValoresAnadidos(?\StructType\VATYPE $valoresAnadidos = null): self
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        
        return $this;
    }
    /**
     * Get CodigoEmbalajePrepago value
     * @return string|null
     */
    public function getCodigoEmbalajePrepago(): ?string
    {
        return $this->CodigoEmbalajePrepago;
    }
    /**
     * Set CodigoEmbalajePrepago value
     * @param string $codigoEmbalajePrepago
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setCodigoEmbalajePrepago(?string $codigoEmbalajePrepago = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoEmbalajePrepago) && !is_string($codigoEmbalajePrepago)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoEmbalajePrepago, true), gettype($codigoEmbalajePrepago)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codigoEmbalajePrepago) && mb_strlen((string) $codigoEmbalajePrepago) > 23) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen((string) $codigoEmbalajePrepago)), __LINE__);
        }
        $this->CodigoEmbalajePrepago = $codigoEmbalajePrepago;
        
        return $this;
    }
    /**
     * Get CodigoPuntoAdmision value
     * @return string|null
     */
    public function getCodigoPuntoAdmision(): ?string
    {
        return $this->CodigoPuntoAdmision;
    }
    /**
     * Set CodigoPuntoAdmision value
     * @param string $codigoPuntoAdmision
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setCodigoPuntoAdmision(?string $codigoPuntoAdmision = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoPuntoAdmision) && !is_string($codigoPuntoAdmision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoPuntoAdmision, true), gettype($codigoPuntoAdmision)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($codigoPuntoAdmision) && mb_strlen((string) $codigoPuntoAdmision) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen((string) $codigoPuntoAdmision)), __LINE__);
        }
        $this->CodigoPuntoAdmision = $codigoPuntoAdmision;
        
        return $this;
    }
    /**
     * Get FechaDepositoPrevista value
     * @return string|null
     */
    public function getFechaDepositoPrevista(): ?string
    {
        return $this->FechaDepositoPrevista;
    }
    /**
     * Set FechaDepositoPrevista value
     * @param string $fechaDepositoPrevista
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setFechaDepositoPrevista(?string $fechaDepositoPrevista = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaDepositoPrevista) && !is_string($fechaDepositoPrevista)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaDepositoPrevista, true), gettype($fechaDepositoPrevista)), __LINE__);
        }
        $this->FechaDepositoPrevista = $fechaDepositoPrevista;
        
        return $this;
    }
    /**
     * Get Observaciones1 value
     * @return string|null
     */
    public function getObservaciones1(): ?string
    {
        return $this->Observaciones1;
    }
    /**
     * Set Observaciones1 value
     * @param string $observaciones1
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setObservaciones1(?string $observaciones1 = null): self
    {
        // validation for constraint: string
        if (!is_null($observaciones1) && !is_string($observaciones1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones1, true), gettype($observaciones1)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($observaciones1) && mb_strlen((string) $observaciones1) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $observaciones1)), __LINE__);
        }
        $this->Observaciones1 = $observaciones1;
        
        return $this;
    }
    /**
     * Get Observaciones2 value
     * @return string|null
     */
    public function getObservaciones2(): ?string
    {
        return $this->Observaciones2;
    }
    /**
     * Set Observaciones2 value
     * @param string $observaciones2
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setObservaciones2(?string $observaciones2 = null): self
    {
        // validation for constraint: string
        if (!is_null($observaciones2) && !is_string($observaciones2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones2, true), gettype($observaciones2)), __LINE__);
        }
        // validation for constraint: maxLength(45)
        if (!is_null($observaciones2) && mb_strlen((string) $observaciones2) > 45) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 45', mb_strlen((string) $observaciones2)), __LINE__);
        }
        $this->Observaciones2 = $observaciones2;
        
        return $this;
    }
    /**
     * Get InstruccionesDevolucion value
     * @return string|null
     */
    public function getInstruccionesDevolucion(): ?string
    {
        return $this->InstruccionesDevolucion;
    }
    /**
     * Set InstruccionesDevolucion value
     * @uses \EnumType\InstruccionesDevolucion::valueIsValid()
     * @uses \EnumType\InstruccionesDevolucion::getValidValues()
     * @throws InvalidArgumentException
     * @param string $instruccionesDevolucion
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setInstruccionesDevolucion(?string $instruccionesDevolucion = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\InstruccionesDevolucion::valueIsValid($instruccionesDevolucion)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\InstruccionesDevolucion', is_array($instruccionesDevolucion) ? implode(', ', $instruccionesDevolucion) : var_export($instruccionesDevolucion, true), implode(', ', \EnumType\InstruccionesDevolucion::getValidValues())), __LINE__);
        }
        $this->InstruccionesDevolucion = $instruccionesDevolucion;
        
        return $this;
    }
    /**
     * Get Aduana value
     * @return \StructType\ADUANATYPE|null
     */
    public function getAduana(): ?\StructType\ADUANATYPE
    {
        return $this->Aduana;
    }
    /**
     * Set Aduana value
     * @param \StructType\ADUANATYPE $aduana
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setAduana(?\StructType\ADUANATYPE $aduana = null): self
    {
        $this->Aduana = $aduana;
        
        return $this;
    }
    /**
     * Get CodigoIda value
     * @return string|null
     */
    public function getCodigoIda(): ?string
    {
        return $this->CodigoIda;
    }
    /**
     * Set CodigoIda value
     * @param string $codigoIda
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setCodigoIda(?string $codigoIda = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoIda) && !is_string($codigoIda)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoIda, true), gettype($codigoIda)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codigoIda) && mb_strlen((string) $codigoIda) > 23) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen((string) $codigoIda)), __LINE__);
        }
        $this->CodigoIda = $codigoIda;
        
        return $this;
    }
    /**
     * Get PermiteEmbalaje value
     * @return string|null
     */
    public function getPermiteEmbalaje(): ?string
    {
        return $this->PermiteEmbalaje;
    }
    /**
     * Set PermiteEmbalaje value
     * @param string $permiteEmbalaje
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setPermiteEmbalaje(?string $permiteEmbalaje = null): self
    {
        // validation for constraint: string
        if (!is_null($permiteEmbalaje) && !is_string($permiteEmbalaje)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($permiteEmbalaje, true), gettype($permiteEmbalaje)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($permiteEmbalaje) && mb_strlen((string) $permiteEmbalaje) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $permiteEmbalaje)), __LINE__);
        }
        $this->PermiteEmbalaje = $permiteEmbalaje;
        
        return $this;
    }
    /**
     * Get FechaCaducidad value
     * @return string|null
     */
    public function getFechaCaducidad(): ?string
    {
        return $this->FechaCaducidad;
    }
    /**
     * Set FechaCaducidad value
     * @param string $fechaCaducidad
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setFechaCaducidad(?string $fechaCaducidad = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaCaducidad) && !is_string($fechaCaducidad)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaCaducidad, true), gettype($fechaCaducidad)), __LINE__);
        }
        $this->FechaCaducidad = $fechaCaducidad;
        
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * Get ToquenIdCorPaq value
     * @return string|null
     */
    public function getToquenIdCorPaq(): ?string
    {
        return $this->ToquenIdCorPaq;
    }
    /**
     * Set ToquenIdCorPaq value
     * @param string $toquenIdCorPaq
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setToquenIdCorPaq(?string $toquenIdCorPaq = null): self
    {
        // validation for constraint: string
        if (!is_null($toquenIdCorPaq) && !is_string($toquenIdCorPaq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toquenIdCorPaq, true), gettype($toquenIdCorPaq)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($toquenIdCorPaq) && mb_strlen((string) $toquenIdCorPaq) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $toquenIdCorPaq)), __LINE__);
        }
        $this->ToquenIdCorPaq = $toquenIdCorPaq;
        
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
     * @return \StructType\DATOSENVIOMODIFTYPE
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
     * Get Documento1 value
     * @return string|null
     */
    public function getDocumento1(): ?string
    {
        return $this->Documento1;
    }
    /**
     * Set Documento1 value
     * @param string $documento1
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setDocumento1(?string $documento1 = null): self
    {
        // validation for constraint: string
        if (!is_null($documento1) && !is_string($documento1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documento1, true), gettype($documento1)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($documento1) && mb_strlen((string) $documento1) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $documento1)), __LINE__);
        }
        $this->Documento1 = $documento1;
        
        return $this;
    }
    /**
     * Get AccDocumento1 value
     * @return string|null
     */
    public function getAccDocumento1(): ?string
    {
        return $this->AccDocumento1;
    }
    /**
     * Set AccDocumento1 value
     * @param string $accDocumento1
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setAccDocumento1(?string $accDocumento1 = null): self
    {
        // validation for constraint: string
        if (!is_null($accDocumento1) && !is_string($accDocumento1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accDocumento1, true), gettype($accDocumento1)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($accDocumento1) && mb_strlen((string) $accDocumento1) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $accDocumento1)), __LINE__);
        }
        $this->AccDocumento1 = $accDocumento1;
        
        return $this;
    }
    /**
     * Get ObsDocumento1 value
     * @return string|null
     */
    public function getObsDocumento1(): ?string
    {
        return $this->ObsDocumento1;
    }
    /**
     * Set ObsDocumento1 value
     * @param string $obsDocumento1
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setObsDocumento1(?string $obsDocumento1 = null): self
    {
        // validation for constraint: string
        if (!is_null($obsDocumento1) && !is_string($obsDocumento1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsDocumento1, true), gettype($obsDocumento1)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($obsDocumento1) && mb_strlen((string) $obsDocumento1) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $obsDocumento1)), __LINE__);
        }
        $this->ObsDocumento1 = $obsDocumento1;
        
        return $this;
    }
    /**
     * Get Documento2 value
     * @return string|null
     */
    public function getDocumento2(): ?string
    {
        return $this->Documento2;
    }
    /**
     * Set Documento2 value
     * @param string $documento2
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setDocumento2(?string $documento2 = null): self
    {
        // validation for constraint: string
        if (!is_null($documento2) && !is_string($documento2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documento2, true), gettype($documento2)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($documento2) && mb_strlen((string) $documento2) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $documento2)), __LINE__);
        }
        $this->Documento2 = $documento2;
        
        return $this;
    }
    /**
     * Get AccDocumento2 value
     * @return string|null
     */
    public function getAccDocumento2(): ?string
    {
        return $this->AccDocumento2;
    }
    /**
     * Set AccDocumento2 value
     * @param string $accDocumento2
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setAccDocumento2(?string $accDocumento2 = null): self
    {
        // validation for constraint: string
        if (!is_null($accDocumento2) && !is_string($accDocumento2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accDocumento2, true), gettype($accDocumento2)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($accDocumento2) && mb_strlen((string) $accDocumento2) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $accDocumento2)), __LINE__);
        }
        $this->AccDocumento2 = $accDocumento2;
        
        return $this;
    }
    /**
     * Get ObsDocumento2 value
     * @return string|null
     */
    public function getObsDocumento2(): ?string
    {
        return $this->ObsDocumento2;
    }
    /**
     * Set ObsDocumento2 value
     * @param string $obsDocumento2
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setObsDocumento2(?string $obsDocumento2 = null): self
    {
        // validation for constraint: string
        if (!is_null($obsDocumento2) && !is_string($obsDocumento2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsDocumento2, true), gettype($obsDocumento2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($obsDocumento2) && mb_strlen((string) $obsDocumento2) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $obsDocumento2)), __LINE__);
        }
        $this->ObsDocumento2 = $obsDocumento2;
        
        return $this;
    }
    /**
     * Get Documento3 value
     * @return string|null
     */
    public function getDocumento3(): ?string
    {
        return $this->Documento3;
    }
    /**
     * Set Documento3 value
     * @param string $documento3
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setDocumento3(?string $documento3 = null): self
    {
        // validation for constraint: string
        if (!is_null($documento3) && !is_string($documento3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documento3, true), gettype($documento3)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($documento3) && mb_strlen((string) $documento3) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $documento3)), __LINE__);
        }
        $this->Documento3 = $documento3;
        
        return $this;
    }
    /**
     * Get AccDocumento3 value
     * @return string|null
     */
    public function getAccDocumento3(): ?string
    {
        return $this->AccDocumento3;
    }
    /**
     * Set AccDocumento3 value
     * @param string $accDocumento3
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setAccDocumento3(?string $accDocumento3 = null): self
    {
        // validation for constraint: string
        if (!is_null($accDocumento3) && !is_string($accDocumento3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accDocumento3, true), gettype($accDocumento3)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($accDocumento3) && mb_strlen((string) $accDocumento3) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $accDocumento3)), __LINE__);
        }
        $this->AccDocumento3 = $accDocumento3;
        
        return $this;
    }
    /**
     * Get ObsDocumento3 value
     * @return string|null
     */
    public function getObsDocumento3(): ?string
    {
        return $this->ObsDocumento3;
    }
    /**
     * Set ObsDocumento3 value
     * @param string $obsDocumento3
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setObsDocumento3(?string $obsDocumento3 = null): self
    {
        // validation for constraint: string
        if (!is_null($obsDocumento3) && !is_string($obsDocumento3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($obsDocumento3, true), gettype($obsDocumento3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($obsDocumento3) && mb_strlen((string) $obsDocumento3) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $obsDocumento3)), __LINE__);
        }
        $this->ObsDocumento3 = $obsDocumento3;
        
        return $this;
    }
    /**
     * Get OperadorPostal value
     * @return string|null
     */
    public function getOperadorPostal(): ?string
    {
        return $this->OperadorPostal;
    }
    /**
     * Set OperadorPostal value
     * @param string $operadorPostal
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setOperadorPostal(?string $operadorPostal = null): self
    {
        // validation for constraint: string
        if (!is_null($operadorPostal) && !is_string($operadorPostal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operadorPostal, true), gettype($operadorPostal)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($operadorPostal) && mb_strlen((string) $operadorPostal) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $operadorPostal)), __LINE__);
        }
        $this->OperadorPostal = $operadorPostal;
        
        return $this;
    }
    /**
     * Get CodigoEnvioOriginal value
     * @return string|null
     */
    public function getCodigoEnvioOriginal(): ?string
    {
        return $this->CodigoEnvioOriginal;
    }
    /**
     * Set CodigoEnvioOriginal value
     * @param string $codigoEnvioOriginal
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setCodigoEnvioOriginal(?string $codigoEnvioOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoEnvioOriginal) && !is_string($codigoEnvioOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoEnvioOriginal, true), gettype($codigoEnvioOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($codigoEnvioOriginal) && mb_strlen((string) $codigoEnvioOriginal) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $codigoEnvioOriginal)), __LINE__);
        }
        $this->CodigoEnvioOriginal = $codigoEnvioOriginal;
        
        return $this;
    }
    /**
     * Get TipoModificacion value
     * @return string|null
     */
    public function getTipoModificacion(): ?string
    {
        return $this->TipoModificacion;
    }
    /**
     * Set TipoModificacion value
     * @uses \EnumType\TipoModificacion::valueIsValid()
     * @uses \EnumType\TipoModificacion::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tipoModificacion
     * @return \StructType\DATOSENVIOMODIFTYPE
     */
    public function setTipoModificacion(?string $tipoModificacion = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TipoModificacion::valueIsValid($tipoModificacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TipoModificacion', is_array($tipoModificacion) ? implode(', ', $tipoModificacion) : var_export($tipoModificacion, true), implode(', ', \EnumType\TipoModificacion::getValidValues())), __LINE__);
        }
        $this->TipoModificacion = $tipoModificacion;
        
        return $this;
    }
}
