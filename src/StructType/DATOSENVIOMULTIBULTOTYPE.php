<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSENVIOMULTIBULTOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSENVIOMULTIBULTOTYPE extends AbstractStructBase
{
    /**
     * The NumBulto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NumBulto
     * @var int|null
     */
    protected ?int $NumBulto = null;
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
     * The PersonaContacto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:PersonaContacto
     * @var string|null
     */
    protected ?string $PersonaContacto = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Email
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The NumeroSMS
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 12
     * - minOccurs: 0
     * - ref: xsd:NumeroSMS
     * @var string|null
     */
    protected ?string $NumeroSMS = null;
    /**
     * Constructor method for DATOSENVIOMULTIBULTOTYPE
     * @uses DATOSENVIOMULTIBULTOTYPE::setNumBulto()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReferenciaCliente()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReferenciaCliente2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReferenciaCliente3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodPromocion()
     * @uses DATOSENVIOMULTIBULTOTYPE::setPesos()
     * @uses DATOSENVIOMULTIBULTOTYPE::setLargo()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAlto()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAncho()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoEmbalajePrepago()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoPuntoAdmision()
     * @uses DATOSENVIOMULTIBULTOTYPE::setFechaDepositoPrevista()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObservaciones1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObservaciones2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setInstruccionesDevolucion()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAduana()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoIda()
     * @uses DATOSENVIOMULTIBULTOTYPE::setPermiteEmbalaje()
     * @uses DATOSENVIOMULTIBULTOTYPE::setFechaCaducidad()
     * @uses DATOSENVIOMULTIBULTOTYPE::setToquenIdCorPaq()
     * @uses DATOSENVIOMULTIBULTOTYPE::setDocumento1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAccDocumento1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObsDocumento1()
     * @uses DATOSENVIOMULTIBULTOTYPE::setDocumento2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAccDocumento2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObsDocumento2()
     * @uses DATOSENVIOMULTIBULTOTYPE::setDocumento3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setAccDocumento3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setObsDocumento3()
     * @uses DATOSENVIOMULTIBULTOTYPE::setOperadorPostal()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodigoEnvioOriginal()
     * @uses DATOSENVIOMULTIBULTOTYPE::setExisteEnvioVueltaLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setSeguroLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setImporteSeguroLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setReembolsoLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setImporteReembolsoLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setTipoReembolsoLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setNumeroCuentaLI()
     * @uses DATOSENVIOMULTIBULTOTYPE::setCodEnvio()
     * @uses DATOSENVIOMULTIBULTOTYPE::setTipoModificacion()
     * @uses DATOSENVIOMULTIBULTOTYPE::setPersonaContacto()
     * @uses DATOSENVIOMULTIBULTOTYPE::setEmail()
     * @uses DATOSENVIOMULTIBULTOTYPE::setNumeroSMS()
     * @param int $numBulto
     * @param string $referenciaCliente
     * @param string $referenciaCliente2
     * @param string $referenciaCliente3
     * @param string $codPromocion
     * @param \StructType\Pesos $pesos
     * @param int $largo
     * @param int $alto
     * @param int $ancho
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
     * @param string $toquenIdCorPaq
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
     * @param string $personaContacto
     * @param string $email
     * @param string $numeroSMS
     */
    public function __construct(?int $numBulto = null, ?string $referenciaCliente = null, ?string $referenciaCliente2 = null, ?string $referenciaCliente3 = null, ?string $codPromocion = null, ?\StructType\Pesos $pesos = null, ?int $largo = null, ?int $alto = null, ?int $ancho = null, ?string $codigoEmbalajePrepago = null, ?string $codigoPuntoAdmision = null, ?string $fechaDepositoPrevista = null, ?string $observaciones1 = null, ?string $observaciones2 = null, ?string $instruccionesDevolucion = null, ?\StructType\ADUANATYPE $aduana = null, ?string $codigoIda = null, ?string $permiteEmbalaje = null, ?string $fechaCaducidad = null, ?string $toquenIdCorPaq = null, ?string $documento1 = null, ?string $accDocumento1 = null, ?string $obsDocumento1 = null, ?string $documento2 = null, ?string $accDocumento2 = null, ?string $obsDocumento2 = null, ?string $documento3 = null, ?string $accDocumento3 = null, ?string $obsDocumento3 = null, ?string $operadorPostal = null, ?string $codigoEnvioOriginal = null, ?string $existeEnvioVueltaLI = null, ?string $seguroLI = null, ?string $importeSeguroLI = null, ?string $reembolsoLI = null, ?string $importeReembolsoLI = null, ?string $tipoReembolsoLI = null, ?string $numeroCuentaLI = null, ?string $codEnvio = null, ?string $tipoModificacion = null, ?string $personaContacto = null, ?string $email = null, ?string $numeroSMS = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setReferenciaCliente($referenciaCliente)
            ->setReferenciaCliente2($referenciaCliente2)
            ->setReferenciaCliente3($referenciaCliente3)
            ->setCodPromocion($codPromocion)
            ->setPesos($pesos)
            ->setLargo($largo)
            ->setAlto($alto)
            ->setAncho($ancho)
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
            ->setToquenIdCorPaq($toquenIdCorPaq)
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
            ->setPersonaContacto($personaContacto)
            ->setEmail($email)
            ->setNumeroSMS($numeroSMS);
    }
    /**
     * Get NumBulto value
     * @return int|null
     */
    public function getNumBulto(): ?int
    {
        return $this->NumBulto;
    }
    /**
     * Set NumBulto value
     * @param int $numBulto
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
     */
    public function setNumBulto(?int $numBulto = null): self
    {
        // validation for constraint: int
        if (!is_null($numBulto) && !(is_int($numBulto) || ctype_digit($numBulto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numBulto, true), gettype($numBulto)), __LINE__);
        }
        $this->NumBulto = $numBulto;
        
        return $this;
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
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
     * Get PersonaContacto value
     * @return string|null
     */
    public function getPersonaContacto(): ?string
    {
        return $this->PersonaContacto;
    }
    /**
     * Set PersonaContacto value
     * @param string $personaContacto
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
     */
    public function setPersonaContacto(?string $personaContacto = null): self
    {
        // validation for constraint: string
        if (!is_null($personaContacto) && !is_string($personaContacto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personaContacto, true), gettype($personaContacto)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($personaContacto) && mb_strlen((string) $personaContacto) > 150) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen((string) $personaContacto)), __LINE__);
        }
        $this->PersonaContacto = $personaContacto;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen((string) $email) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get NumeroSMS value
     * @return string|null
     */
    public function getNumeroSMS(): ?string
    {
        return $this->NumeroSMS;
    }
    /**
     * Set NumeroSMS value
     * @param string $numeroSMS
     * @return \StructType\DATOSENVIOMULTIBULTOTYPE
     */
    public function setNumeroSMS(?string $numeroSMS = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroSMS) && !is_string($numeroSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroSMS, true), gettype($numeroSMS)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($numeroSMS) && mb_strlen((string) $numeroSMS) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $numeroSMS)), __LINE__);
        }
        $this->NumeroSMS = $numeroSMS;
        
        return $this;
    }
}
