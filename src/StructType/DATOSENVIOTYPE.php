<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSENVIOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSENVIOTYPE extends DATOSENVIOREDUCIDOTYPE
{
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
     * The ModalidadEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
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
     * The ExisteEnvioVueltaLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:ExisteEnvioVueltaLI
     * @var string|null
     */
    protected ?string $ExisteEnvioVueltaLI = null;
    /**
     * The SeguroLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:SeguroLI
     * @var string|null
     */
    protected ?string $SeguroLI = null;
    /**
     * The ImporteSeguroLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteSeguroLI
     * @var string|null
     */
    protected ?string $ImporteSeguroLI = null;
    /**
     * The ReembolsoLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:ReembolsoLI
     * @var string|null
     */
    protected ?string $ReembolsoLI = null;
    /**
     * The ImporteReembolsoLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteReembolsoLI
     * @var string|null
     */
    protected ?string $ImporteReembolsoLI = null;
    /**
     * The TipoReembolsoLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:TipoReembolsoLI
     * @var string|null
     */
    protected ?string $TipoReembolsoLI = null;
    /**
     * The NumeroCuentaLI
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * - ref: xsd:NumeroCuentaLI
     * @var string|null
     */
    protected ?string $NumeroCuentaLI = null;
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
     * The TipoModificacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TipoModificacion
     * @var string|null
     */
    protected ?string $TipoModificacion = null;
    /**
     * The DatosLogisticaInversa
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DatosLogisticaInversa
     * @var \StructType\DATOSLOGISTICAINVERSATYPE|null
     */
    protected ?\StructType\DATOSLOGISTICAINVERSATYPE $DatosLogisticaInversa = null;
    /**
     * The Consolidador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 25
     * - minOccurs: 0
     * - ref: xsd:Consolidador
     * @var string|null
     */
    protected ?string $Consolidador = null;
    /**
     * The Descripcion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Descripcion
     * @var string|null
     */
    protected ?string $Descripcion = null;
    /**
     * The Clasificacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Clasificacion
     * @var string|null
     */
    protected ?string $Clasificacion = null;
    /**
     * The ImporteTotal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
     * - minOccurs: 0
     * - ref: xsd:ImporteTotal
     * @var string|null
     */
    protected ?string $ImporteTotal = null;
    /**
     * The Moneda
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Moneda
     * @var string|null
     */
    protected ?string $Moneda = null;
    /**
     * The ModalidadImpuestos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ModalidadImpuestos
     * @var string|null
     */
    protected ?string $ModalidadImpuestos = null;
    /**
     * Constructor method for DATOSENVIOTYPE
     * @uses DATOSENVIOTYPE::setCodPromocion()
     * @uses DATOSENVIOTYPE::setModalidadEntrega()
     * @uses DATOSENVIOTYPE::setOficinaElegida()
     * @uses DATOSENVIOTYPE::setLargo()
     * @uses DATOSENVIOTYPE::setAlto()
     * @uses DATOSENVIOTYPE::setAncho()
     * @uses DATOSENVIOTYPE::setValoresAnadidos()
     * @uses DATOSENVIOTYPE::setCodigoEmbalajePrepago()
     * @uses DATOSENVIOTYPE::setCodigoPuntoAdmision()
     * @uses DATOSENVIOTYPE::setFechaDepositoPrevista()
     * @uses DATOSENVIOTYPE::setObservaciones1()
     * @uses DATOSENVIOTYPE::setObservaciones2()
     * @uses DATOSENVIOTYPE::setInstruccionesDevolucion()
     * @uses DATOSENVIOTYPE::setAduana()
     * @uses DATOSENVIOTYPE::setCodigoIda()
     * @uses DATOSENVIOTYPE::setPermiteEmbalaje()
     * @uses DATOSENVIOTYPE::setFechaCaducidad()
     * @uses DATOSENVIOTYPE::setReferenciaExpedicion()
     * @uses DATOSENVIOTYPE::setCodigoHomepaq()
     * @uses DATOSENVIOTYPE::setToquenIdCorPaq()
     * @uses DATOSENVIOTYPE::setAdmisionHomepaq()
     * @uses DATOSENVIOTYPE::setDocumento1()
     * @uses DATOSENVIOTYPE::setAccDocumento1()
     * @uses DATOSENVIOTYPE::setObsDocumento1()
     * @uses DATOSENVIOTYPE::setDocumento2()
     * @uses DATOSENVIOTYPE::setAccDocumento2()
     * @uses DATOSENVIOTYPE::setObsDocumento2()
     * @uses DATOSENVIOTYPE::setDocumento3()
     * @uses DATOSENVIOTYPE::setAccDocumento3()
     * @uses DATOSENVIOTYPE::setObsDocumento3()
     * @uses DATOSENVIOTYPE::setOperadorPostal()
     * @uses DATOSENVIOTYPE::setCodigoEnvioOriginal()
     * @uses DATOSENVIOTYPE::setExisteEnvioVueltaLI()
     * @uses DATOSENVIOTYPE::setSeguroLI()
     * @uses DATOSENVIOTYPE::setImporteSeguroLI()
     * @uses DATOSENVIOTYPE::setReembolsoLI()
     * @uses DATOSENVIOTYPE::setImporteReembolsoLI()
     * @uses DATOSENVIOTYPE::setTipoReembolsoLI()
     * @uses DATOSENVIOTYPE::setNumeroCuentaLI()
     * @uses DATOSENVIOTYPE::setCodEnvio()
     * @uses DATOSENVIOTYPE::setTipoModificacion()
     * @uses DATOSENVIOTYPE::setDatosLogisticaInversa()
     * @uses DATOSENVIOTYPE::setConsolidador()
     * @uses DATOSENVIOTYPE::setDescripcion()
     * @uses DATOSENVIOTYPE::setClasificacion()
     * @uses DATOSENVIOTYPE::setImporteTotal()
     * @uses DATOSENVIOTYPE::setMoneda()
     * @uses DATOSENVIOTYPE::setModalidadImpuestos()
     * @param string $codPromocion
     * @param string $modalidadEntrega
     * @param string $oficinaElegida
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
     * @param string $existeEnvioVueltaLI
     * @param string $seguroLI
     * @param string $importeSeguroLI
     * @param string $reembolsoLI
     * @param string $importeReembolsoLI
     * @param string $tipoReembolsoLI
     * @param string $numeroCuentaLI
     * @param string $codEnvio
     * @param string $tipoModificacion
     * @param \StructType\DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa
     * @param string $consolidador
     * @param string $descripcion
     * @param string $clasificacion
     * @param string $importeTotal
     * @param string $moneda
     * @param string $modalidadImpuestos
     */
    public function __construct(?string $codPromocion = null, ?string $modalidadEntrega = null, ?string $oficinaElegida = null, ?int $largo = null, ?int $alto = null, ?int $ancho = null, ?\StructType\VATYPE $valoresAnadidos = null, ?string $codigoEmbalajePrepago = null, ?string $codigoPuntoAdmision = null, ?string $fechaDepositoPrevista = null, ?string $observaciones1 = null, ?string $observaciones2 = null, ?string $instruccionesDevolucion = null, ?\StructType\ADUANATYPE $aduana = null, ?string $codigoIda = null, ?string $permiteEmbalaje = null, ?string $fechaCaducidad = null, ?string $referenciaExpedicion = null, ?string $codigoHomepaq = null, ?string $toquenIdCorPaq = null, ?string $admisionHomepaq = null, ?string $documento1 = null, ?string $accDocumento1 = null, ?string $obsDocumento1 = null, ?string $documento2 = null, ?string $accDocumento2 = null, ?string $obsDocumento2 = null, ?string $documento3 = null, ?string $accDocumento3 = null, ?string $obsDocumento3 = null, ?string $operadorPostal = null, ?string $codigoEnvioOriginal = null, ?string $existeEnvioVueltaLI = null, ?string $seguroLI = null, ?string $importeSeguroLI = null, ?string $reembolsoLI = null, ?string $importeReembolsoLI = null, ?string $tipoReembolsoLI = null, ?string $numeroCuentaLI = null, ?string $codEnvio = null, ?string $tipoModificacion = null, ?\StructType\DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa = null, ?string $consolidador = null, ?string $descripcion = null, ?string $clasificacion = null, ?string $importeTotal = null, ?string $moneda = null, ?string $modalidadImpuestos = null)
    {
        $this
            ->setCodPromocion($codPromocion)
            ->setModalidadEntrega($modalidadEntrega)
            ->setOficinaElegida($oficinaElegida)
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
            ->setExisteEnvioVueltaLI($existeEnvioVueltaLI)
            ->setSeguroLI($seguroLI)
            ->setImporteSeguroLI($importeSeguroLI)
            ->setReembolsoLI($reembolsoLI)
            ->setImporteReembolsoLI($importeReembolsoLI)
            ->setTipoReembolsoLI($tipoReembolsoLI)
            ->setNumeroCuentaLI($numeroCuentaLI)
            ->setCodEnvio($codEnvio)
            ->setTipoModificacion($tipoModificacion)
            ->setDatosLogisticaInversa($datosLogisticaInversa)
            ->setConsolidador($consolidador)
            ->setDescripcion($descripcion)
            ->setClasificacion($clasificacion)
            ->setImporteTotal($importeTotal)
            ->setMoneda($moneda)
            ->setModalidadImpuestos($modalidadImpuestos);
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
     * Get ExisteEnvioVueltaLI value
     * @return string|null
     */
    public function getExisteEnvioVueltaLI(): ?string
    {
        return $this->ExisteEnvioVueltaLI;
    }
    /**
     * Set ExisteEnvioVueltaLI value
     * @param string $existeEnvioVueltaLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setExisteEnvioVueltaLI(?string $existeEnvioVueltaLI = null): self
    {
        // validation for constraint: string
        if (!is_null($existeEnvioVueltaLI) && !is_string($existeEnvioVueltaLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($existeEnvioVueltaLI, true), gettype($existeEnvioVueltaLI)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($existeEnvioVueltaLI) && mb_strlen((string) $existeEnvioVueltaLI) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $existeEnvioVueltaLI)), __LINE__);
        }
        $this->ExisteEnvioVueltaLI = $existeEnvioVueltaLI;
        
        return $this;
    }
    /**
     * Get SeguroLI value
     * @return string|null
     */
    public function getSeguroLI(): ?string
    {
        return $this->SeguroLI;
    }
    /**
     * Set SeguroLI value
     * @param string $seguroLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setSeguroLI(?string $seguroLI = null): self
    {
        // validation for constraint: string
        if (!is_null($seguroLI) && !is_string($seguroLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seguroLI, true), gettype($seguroLI)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($seguroLI) && mb_strlen((string) $seguroLI) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $seguroLI)), __LINE__);
        }
        $this->SeguroLI = $seguroLI;
        
        return $this;
    }
    /**
     * Get ImporteSeguroLI value
     * @return string|null
     */
    public function getImporteSeguroLI(): ?string
    {
        return $this->ImporteSeguroLI;
    }
    /**
     * Set ImporteSeguroLI value
     * @param string $importeSeguroLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setImporteSeguroLI(?string $importeSeguroLI = null): self
    {
        // validation for constraint: string
        if (!is_null($importeSeguroLI) && !is_string($importeSeguroLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeSeguroLI, true), gettype($importeSeguroLI)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeSeguroLI) && mb_strlen((string) $importeSeguroLI) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $importeSeguroLI)), __LINE__);
        }
        $this->ImporteSeguroLI = $importeSeguroLI;
        
        return $this;
    }
    /**
     * Get ReembolsoLI value
     * @return string|null
     */
    public function getReembolsoLI(): ?string
    {
        return $this->ReembolsoLI;
    }
    /**
     * Set ReembolsoLI value
     * @param string $reembolsoLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setReembolsoLI(?string $reembolsoLI = null): self
    {
        // validation for constraint: string
        if (!is_null($reembolsoLI) && !is_string($reembolsoLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reembolsoLI, true), gettype($reembolsoLI)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($reembolsoLI) && mb_strlen((string) $reembolsoLI) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $reembolsoLI)), __LINE__);
        }
        $this->ReembolsoLI = $reembolsoLI;
        
        return $this;
    }
    /**
     * Get ImporteReembolsoLI value
     * @return string|null
     */
    public function getImporteReembolsoLI(): ?string
    {
        return $this->ImporteReembolsoLI;
    }
    /**
     * Set ImporteReembolsoLI value
     * @param string $importeReembolsoLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setImporteReembolsoLI(?string $importeReembolsoLI = null): self
    {
        // validation for constraint: string
        if (!is_null($importeReembolsoLI) && !is_string($importeReembolsoLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeReembolsoLI, true), gettype($importeReembolsoLI)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeReembolsoLI) && mb_strlen((string) $importeReembolsoLI) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $importeReembolsoLI)), __LINE__);
        }
        $this->ImporteReembolsoLI = $importeReembolsoLI;
        
        return $this;
    }
    /**
     * Get TipoReembolsoLI value
     * @return string|null
     */
    public function getTipoReembolsoLI(): ?string
    {
        return $this->TipoReembolsoLI;
    }
    /**
     * Set TipoReembolsoLI value
     * @param string $tipoReembolsoLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setTipoReembolsoLI(?string $tipoReembolsoLI = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoReembolsoLI) && !is_string($tipoReembolsoLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoReembolsoLI, true), gettype($tipoReembolsoLI)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($tipoReembolsoLI) && mb_strlen((string) $tipoReembolsoLI) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $tipoReembolsoLI)), __LINE__);
        }
        $this->TipoReembolsoLI = $tipoReembolsoLI;
        
        return $this;
    }
    /**
     * Get NumeroCuentaLI value
     * @return string|null
     */
    public function getNumeroCuentaLI(): ?string
    {
        return $this->NumeroCuentaLI;
    }
    /**
     * Set NumeroCuentaLI value
     * @param string $numeroCuentaLI
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setNumeroCuentaLI(?string $numeroCuentaLI = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroCuentaLI) && !is_string($numeroCuentaLI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCuentaLI, true), gettype($numeroCuentaLI)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numeroCuentaLI) && mb_strlen((string) $numeroCuentaLI) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numeroCuentaLI)), __LINE__);
        }
        $this->NumeroCuentaLI = $numeroCuentaLI;
        
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
     * @return \StructType\DATOSENVIOTYPE
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
     * @return \StructType\DATOSENVIOTYPE
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
    /**
     * Get DatosLogisticaInversa value
     * @return \StructType\DATOSLOGISTICAINVERSATYPE|null
     */
    public function getDatosLogisticaInversa(): ?\StructType\DATOSLOGISTICAINVERSATYPE
    {
        return $this->DatosLogisticaInversa;
    }
    /**
     * Set DatosLogisticaInversa value
     * @param \StructType\DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setDatosLogisticaInversa(?\StructType\DATOSLOGISTICAINVERSATYPE $datosLogisticaInversa = null): self
    {
        $this->DatosLogisticaInversa = $datosLogisticaInversa;
        
        return $this;
    }
    /**
     * Get Consolidador value
     * @return string|null
     */
    public function getConsolidador(): ?string
    {
        return $this->Consolidador;
    }
    /**
     * Set Consolidador value
     * @param string $consolidador
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setConsolidador(?string $consolidador = null): self
    {
        // validation for constraint: string
        if (!is_null($consolidador) && !is_string($consolidador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consolidador, true), gettype($consolidador)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($consolidador) && mb_strlen((string) $consolidador) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $consolidador)), __LINE__);
        }
        $this->Consolidador = $consolidador;
        
        return $this;
    }
    /**
     * Get Descripcion value
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }
    /**
     * Set Descripcion value
     * @param string $descripcion
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setDescripcion(?string $descripcion = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($descripcion) && mb_strlen((string) $descripcion) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $descripcion)), __LINE__);
        }
        $this->Descripcion = $descripcion;
        
        return $this;
    }
    /**
     * Get Clasificacion value
     * @return string|null
     */
    public function getClasificacion(): ?string
    {
        return $this->Clasificacion;
    }
    /**
     * Set Clasificacion value
     * @uses \EnumType\Clasificacion::valueIsValid()
     * @uses \EnumType\Clasificacion::getValidValues()
     * @throws InvalidArgumentException
     * @param string $clasificacion
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setClasificacion(?string $clasificacion = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Clasificacion::valueIsValid($clasificacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Clasificacion', is_array($clasificacion) ? implode(', ', $clasificacion) : var_export($clasificacion, true), implode(', ', \EnumType\Clasificacion::getValidValues())), __LINE__);
        }
        $this->Clasificacion = $clasificacion;
        
        return $this;
    }
    /**
     * Get ImporteTotal value
     * @return string|null
     */
    public function getImporteTotal(): ?string
    {
        return $this->ImporteTotal;
    }
    /**
     * Set ImporteTotal value
     * @param string $importeTotal
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setImporteTotal(?string $importeTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($importeTotal) && !is_string($importeTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTotal, true), gettype($importeTotal)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($importeTotal) && mb_strlen((string) $importeTotal) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $importeTotal)), __LINE__);
        }
        $this->ImporteTotal = $importeTotal;
        
        return $this;
    }
    /**
     * Get Moneda value
     * @return string|null
     */
    public function getMoneda(): ?string
    {
        return $this->Moneda;
    }
    /**
     * Set Moneda value
     * @uses \EnumType\Moneda::valueIsValid()
     * @uses \EnumType\Moneda::getValidValues()
     * @throws InvalidArgumentException
     * @param string $moneda
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setMoneda(?string $moneda = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Moneda::valueIsValid($moneda)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Moneda', is_array($moneda) ? implode(', ', $moneda) : var_export($moneda, true), implode(', ', \EnumType\Moneda::getValidValues())), __LINE__);
        }
        $this->Moneda = $moneda;
        
        return $this;
    }
    /**
     * Get ModalidadImpuestos value
     * @return string|null
     */
    public function getModalidadImpuestos(): ?string
    {
        return $this->ModalidadImpuestos;
    }
    /**
     * Set ModalidadImpuestos value
     * @uses \EnumType\ModalidadImpuestos::valueIsValid()
     * @uses \EnumType\ModalidadImpuestos::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modalidadImpuestos
     * @return \StructType\DATOSENVIOTYPE
     */
    public function setModalidadImpuestos(?string $modalidadImpuestos = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModalidadImpuestos::valueIsValid($modalidadImpuestos)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModalidadImpuestos', is_array($modalidadImpuestos) ? implode(', ', $modalidadImpuestos) : var_export($modalidadImpuestos, true), implode(', ', \EnumType\ModalidadImpuestos::getValidValues())), __LINE__);
        }
        $this->ModalidadImpuestos = $modalidadImpuestos;
        
        return $this;
    }
}
