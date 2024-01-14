<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSLOGISTICAINVERSATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSLOGISTICAINVERSATYPE extends AbstractStructBase
{
    /**
     * The DatosAdicRemitente
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DIRECCIONADICIPCTYPE|null
     */
    protected ?\StructType\DIRECCIONADICIPCTYPE $DatosAdicRemitente = null;
    /**
     * The DatosAdicDestinatario
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DIRECCIONADICIPCTYPE|null
     */
    protected ?\StructType\DIRECCIONADICIPCTYPE $DatosAdicDestinatario = null;
    /**
     * The DireccionPostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DIRECCIONIPCTYPE|null
     */
    protected ?\StructType\DIRECCIONIPCTYPE $DireccionPostal = null;
    /**
     * The OficinaIntercambioDestino
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:OficinaIntercambioDestino
     * @var string|null
     */
    protected ?string $OficinaIntercambioDestino = null;
    /**
     * The ReferenciaClienteIPC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - minOccurs: 0
     * - ref: xsd:ReferenciaClienteIPC
     * @var string|null
     */
    protected ?string $ReferenciaClienteIPC = null;
    /**
     * The DireccionImportador
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DIRECCIONIPCTYPE|null
     */
    protected ?\StructType\DIRECCIONIPCTYPE $DireccionImportador = null;
    /**
     * The ImportadorReferencia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minOccurs: 0
     * - ref: xsd:ImportadorReferencia
     * @var string|null
     */
    protected ?string $ImportadorReferencia = null;
    /**
     * The ImportadorNumeroFax
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minOccurs: 0
     * - ref: xsd:ImportadorNumeroFax
     * @var string|null
     */
    protected ?string $ImportadorNumeroFax = null;
    /**
     * The DireccionRepresentanteAceptante
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DIRECCIONIPCTYPE|null
     */
    protected ?\StructType\DIRECCIONIPCTYPE $DireccionRepresentanteAceptante = null;
    /**
     * The RepresentanteAceptanteNumeroVAT
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minOccurs: 0
     * - ref: xsd:RepresentanteAceptanteNumeroVAT
     * @var string|null
     */
    protected ?string $RepresentanteAceptanteNumeroVAT = null;
    /**
     * The Aduana
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ADUANAIPCTYPE|null
     */
    protected ?\StructType\ADUANAIPCTYPE $Aduana = null;
    /**
     * The RazonDevolucion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:RazonDevolucion
     * @var string|null
     */
    protected ?string $RazonDevolucion = null;
    /**
     * The Personalizados
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PERSONALIZADOSTYPE|null
     */
    protected ?\StructType\PERSONALIZADOSTYPE $Personalizados = null;
    /**
     * The Recogido
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:Recogido
     * @var string|null
     */
    protected ?string $Recogido = null;
    /**
     * Constructor method for DATOSLOGISTICAINVERSATYPE
     * @uses DATOSLOGISTICAINVERSATYPE::setDatosAdicRemitente()
     * @uses DATOSLOGISTICAINVERSATYPE::setDatosAdicDestinatario()
     * @uses DATOSLOGISTICAINVERSATYPE::setDireccionPostal()
     * @uses DATOSLOGISTICAINVERSATYPE::setOficinaIntercambioDestino()
     * @uses DATOSLOGISTICAINVERSATYPE::setReferenciaClienteIPC()
     * @uses DATOSLOGISTICAINVERSATYPE::setDireccionImportador()
     * @uses DATOSLOGISTICAINVERSATYPE::setImportadorReferencia()
     * @uses DATOSLOGISTICAINVERSATYPE::setImportadorNumeroFax()
     * @uses DATOSLOGISTICAINVERSATYPE::setDireccionRepresentanteAceptante()
     * @uses DATOSLOGISTICAINVERSATYPE::setRepresentanteAceptanteNumeroVAT()
     * @uses DATOSLOGISTICAINVERSATYPE::setAduana()
     * @uses DATOSLOGISTICAINVERSATYPE::setRazonDevolucion()
     * @uses DATOSLOGISTICAINVERSATYPE::setPersonalizados()
     * @uses DATOSLOGISTICAINVERSATYPE::setRecogido()
     * @param \StructType\DIRECCIONADICIPCTYPE $datosAdicRemitente
     * @param \StructType\DIRECCIONADICIPCTYPE $datosAdicDestinatario
     * @param \StructType\DIRECCIONIPCTYPE $direccionPostal
     * @param string $oficinaIntercambioDestino
     * @param string $referenciaClienteIPC
     * @param \StructType\DIRECCIONIPCTYPE $direccionImportador
     * @param string $importadorReferencia
     * @param string $importadorNumeroFax
     * @param \StructType\DIRECCIONIPCTYPE $direccionRepresentanteAceptante
     * @param string $representanteAceptanteNumeroVAT
     * @param \StructType\ADUANAIPCTYPE $aduana
     * @param string $razonDevolucion
     * @param \StructType\PERSONALIZADOSTYPE $personalizados
     * @param string $recogido
     */
    public function __construct(?\StructType\DIRECCIONADICIPCTYPE $datosAdicRemitente = null, ?\StructType\DIRECCIONADICIPCTYPE $datosAdicDestinatario = null, ?\StructType\DIRECCIONIPCTYPE $direccionPostal = null, ?string $oficinaIntercambioDestino = null, ?string $referenciaClienteIPC = null, ?\StructType\DIRECCIONIPCTYPE $direccionImportador = null, ?string $importadorReferencia = null, ?string $importadorNumeroFax = null, ?\StructType\DIRECCIONIPCTYPE $direccionRepresentanteAceptante = null, ?string $representanteAceptanteNumeroVAT = null, ?\StructType\ADUANAIPCTYPE $aduana = null, ?string $razonDevolucion = null, ?\StructType\PERSONALIZADOSTYPE $personalizados = null, ?string $recogido = null)
    {
        $this
            ->setDatosAdicRemitente($datosAdicRemitente)
            ->setDatosAdicDestinatario($datosAdicDestinatario)
            ->setDireccionPostal($direccionPostal)
            ->setOficinaIntercambioDestino($oficinaIntercambioDestino)
            ->setReferenciaClienteIPC($referenciaClienteIPC)
            ->setDireccionImportador($direccionImportador)
            ->setImportadorReferencia($importadorReferencia)
            ->setImportadorNumeroFax($importadorNumeroFax)
            ->setDireccionRepresentanteAceptante($direccionRepresentanteAceptante)
            ->setRepresentanteAceptanteNumeroVAT($representanteAceptanteNumeroVAT)
            ->setAduana($aduana)
            ->setRazonDevolucion($razonDevolucion)
            ->setPersonalizados($personalizados)
            ->setRecogido($recogido);
    }
    /**
     * Get DatosAdicRemitente value
     * @return \StructType\DIRECCIONADICIPCTYPE|null
     */
    public function getDatosAdicRemitente(): ?\StructType\DIRECCIONADICIPCTYPE
    {
        return $this->DatosAdicRemitente;
    }
    /**
     * Set DatosAdicRemitente value
     * @param \StructType\DIRECCIONADICIPCTYPE $datosAdicRemitente
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setDatosAdicRemitente(?\StructType\DIRECCIONADICIPCTYPE $datosAdicRemitente = null): self
    {
        $this->DatosAdicRemitente = $datosAdicRemitente;
        
        return $this;
    }
    /**
     * Get DatosAdicDestinatario value
     * @return \StructType\DIRECCIONADICIPCTYPE|null
     */
    public function getDatosAdicDestinatario(): ?\StructType\DIRECCIONADICIPCTYPE
    {
        return $this->DatosAdicDestinatario;
    }
    /**
     * Set DatosAdicDestinatario value
     * @param \StructType\DIRECCIONADICIPCTYPE $datosAdicDestinatario
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setDatosAdicDestinatario(?\StructType\DIRECCIONADICIPCTYPE $datosAdicDestinatario = null): self
    {
        $this->DatosAdicDestinatario = $datosAdicDestinatario;
        
        return $this;
    }
    /**
     * Get DireccionPostal value
     * @return \StructType\DIRECCIONIPCTYPE|null
     */
    public function getDireccionPostal(): ?\StructType\DIRECCIONIPCTYPE
    {
        return $this->DireccionPostal;
    }
    /**
     * Set DireccionPostal value
     * @param \StructType\DIRECCIONIPCTYPE $direccionPostal
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setDireccionPostal(?\StructType\DIRECCIONIPCTYPE $direccionPostal = null): self
    {
        $this->DireccionPostal = $direccionPostal;
        
        return $this;
    }
    /**
     * Get OficinaIntercambioDestino value
     * @return string|null
     */
    public function getOficinaIntercambioDestino(): ?string
    {
        return $this->OficinaIntercambioDestino;
    }
    /**
     * Set OficinaIntercambioDestino value
     * @param string $oficinaIntercambioDestino
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setOficinaIntercambioDestino(?string $oficinaIntercambioDestino = null): self
    {
        // validation for constraint: string
        if (!is_null($oficinaIntercambioDestino) && !is_string($oficinaIntercambioDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oficinaIntercambioDestino, true), gettype($oficinaIntercambioDestino)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($oficinaIntercambioDestino) && mb_strlen((string) $oficinaIntercambioDestino) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $oficinaIntercambioDestino)), __LINE__);
        }
        $this->OficinaIntercambioDestino = $oficinaIntercambioDestino;
        
        return $this;
    }
    /**
     * Get ReferenciaClienteIPC value
     * @return string|null
     */
    public function getReferenciaClienteIPC(): ?string
    {
        return $this->ReferenciaClienteIPC;
    }
    /**
     * Set ReferenciaClienteIPC value
     * @param string $referenciaClienteIPC
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setReferenciaClienteIPC(?string $referenciaClienteIPC = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaClienteIPC) && !is_string($referenciaClienteIPC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaClienteIPC, true), gettype($referenciaClienteIPC)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referenciaClienteIPC) && mb_strlen((string) $referenciaClienteIPC) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $referenciaClienteIPC)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($referenciaClienteIPC) && mb_strlen((string) $referenciaClienteIPC) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $referenciaClienteIPC)), __LINE__);
        }
        $this->ReferenciaClienteIPC = $referenciaClienteIPC;
        
        return $this;
    }
    /**
     * Get DireccionImportador value
     * @return \StructType\DIRECCIONIPCTYPE|null
     */
    public function getDireccionImportador(): ?\StructType\DIRECCIONIPCTYPE
    {
        return $this->DireccionImportador;
    }
    /**
     * Set DireccionImportador value
     * @param \StructType\DIRECCIONIPCTYPE $direccionImportador
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setDireccionImportador(?\StructType\DIRECCIONIPCTYPE $direccionImportador = null): self
    {
        $this->DireccionImportador = $direccionImportador;
        
        return $this;
    }
    /**
     * Get ImportadorReferencia value
     * @return string|null
     */
    public function getImportadorReferencia(): ?string
    {
        return $this->ImportadorReferencia;
    }
    /**
     * Set ImportadorReferencia value
     * @param string $importadorReferencia
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setImportadorReferencia(?string $importadorReferencia = null): self
    {
        // validation for constraint: string
        if (!is_null($importadorReferencia) && !is_string($importadorReferencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importadorReferencia, true), gettype($importadorReferencia)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($importadorReferencia) && mb_strlen((string) $importadorReferencia) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $importadorReferencia)), __LINE__);
        }
        $this->ImportadorReferencia = $importadorReferencia;
        
        return $this;
    }
    /**
     * Get ImportadorNumeroFax value
     * @return string|null
     */
    public function getImportadorNumeroFax(): ?string
    {
        return $this->ImportadorNumeroFax;
    }
    /**
     * Set ImportadorNumeroFax value
     * @param string $importadorNumeroFax
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setImportadorNumeroFax(?string $importadorNumeroFax = null): self
    {
        // validation for constraint: string
        if (!is_null($importadorNumeroFax) && !is_string($importadorNumeroFax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importadorNumeroFax, true), gettype($importadorNumeroFax)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($importadorNumeroFax) && mb_strlen((string) $importadorNumeroFax) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $importadorNumeroFax)), __LINE__);
        }
        $this->ImportadorNumeroFax = $importadorNumeroFax;
        
        return $this;
    }
    /**
     * Get DireccionRepresentanteAceptante value
     * @return \StructType\DIRECCIONIPCTYPE|null
     */
    public function getDireccionRepresentanteAceptante(): ?\StructType\DIRECCIONIPCTYPE
    {
        return $this->DireccionRepresentanteAceptante;
    }
    /**
     * Set DireccionRepresentanteAceptante value
     * @param \StructType\DIRECCIONIPCTYPE $direccionRepresentanteAceptante
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setDireccionRepresentanteAceptante(?\StructType\DIRECCIONIPCTYPE $direccionRepresentanteAceptante = null): self
    {
        $this->DireccionRepresentanteAceptante = $direccionRepresentanteAceptante;
        
        return $this;
    }
    /**
     * Get RepresentanteAceptanteNumeroVAT value
     * @return string|null
     */
    public function getRepresentanteAceptanteNumeroVAT(): ?string
    {
        return $this->RepresentanteAceptanteNumeroVAT;
    }
    /**
     * Set RepresentanteAceptanteNumeroVAT value
     * @param string $representanteAceptanteNumeroVAT
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setRepresentanteAceptanteNumeroVAT(?string $representanteAceptanteNumeroVAT = null): self
    {
        // validation for constraint: string
        if (!is_null($representanteAceptanteNumeroVAT) && !is_string($representanteAceptanteNumeroVAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($representanteAceptanteNumeroVAT, true), gettype($representanteAceptanteNumeroVAT)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($representanteAceptanteNumeroVAT) && mb_strlen((string) $representanteAceptanteNumeroVAT) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $representanteAceptanteNumeroVAT)), __LINE__);
        }
        $this->RepresentanteAceptanteNumeroVAT = $representanteAceptanteNumeroVAT;
        
        return $this;
    }
    /**
     * Get Aduana value
     * @return \StructType\ADUANAIPCTYPE|null
     */
    public function getAduana(): ?\StructType\ADUANAIPCTYPE
    {
        return $this->Aduana;
    }
    /**
     * Set Aduana value
     * @param \StructType\ADUANAIPCTYPE $aduana
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setAduana(?\StructType\ADUANAIPCTYPE $aduana = null): self
    {
        $this->Aduana = $aduana;
        
        return $this;
    }
    /**
     * Get RazonDevolucion value
     * @return string|null
     */
    public function getRazonDevolucion(): ?string
    {
        return $this->RazonDevolucion;
    }
    /**
     * Set RazonDevolucion value
     * @param string $razonDevolucion
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setRazonDevolucion(?string $razonDevolucion = null): self
    {
        // validation for constraint: string
        if (!is_null($razonDevolucion) && !is_string($razonDevolucion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($razonDevolucion, true), gettype($razonDevolucion)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($razonDevolucion) && mb_strlen((string) $razonDevolucion) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $razonDevolucion)), __LINE__);
        }
        $this->RazonDevolucion = $razonDevolucion;
        
        return $this;
    }
    /**
     * Get Personalizados value
     * @return \StructType\PERSONALIZADOSTYPE|null
     */
    public function getPersonalizados(): ?\StructType\PERSONALIZADOSTYPE
    {
        return $this->Personalizados;
    }
    /**
     * Set Personalizados value
     * @param \StructType\PERSONALIZADOSTYPE $personalizados
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setPersonalizados(?\StructType\PERSONALIZADOSTYPE $personalizados = null): self
    {
        $this->Personalizados = $personalizados;
        
        return $this;
    }
    /**
     * Get Recogido value
     * @return string|null
     */
    public function getRecogido(): ?string
    {
        return $this->Recogido;
    }
    /**
     * Set Recogido value
     * @param string $recogido
     * @return \StructType\DATOSLOGISTICAINVERSATYPE
     */
    public function setRecogido(?string $recogido = null): self
    {
        // validation for constraint: string
        if (!is_null($recogido) && !is_string($recogido)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recogido, true), gettype($recogido)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($recogido) && mb_strlen((string) $recogido) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $recogido)), __LINE__);
        }
        $this->Recogido = $recogido;
        
        return $this;
    }
}
