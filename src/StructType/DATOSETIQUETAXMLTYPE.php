<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSETIQUETAXMLTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSETIQUETAXMLTYPE extends AbstractStructBase
{
    /**
     * The RemitenteEtiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:RemitenteEtiqueta
     * @var \StructType\DATOSREMITENTEETIQUETATYPE|null
     */
    protected ?\StructType\DATOSREMITENTEETIQUETATYPE $RemitenteEtiqueta = null;
    /**
     * The DestinatarioEtiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:DestinatarioEtiqueta
     * @var \StructType\DATOSDESTINATARIOETIQUETATYPE|null
     */
    protected ?\StructType\DATOSDESTINATARIOETIQUETATYPE $DestinatarioEtiqueta = null;
    /**
     * The Referencia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minOccurs: 0
     * - ref: xsd:Referencia
     * @var string|null
     */
    protected ?string $Referencia = null;
    /**
     * The PesoReal
     * Meta information extracted from the WSDL
     * - ref: xsd:PesoReal
     * @var string|null
     */
    protected ?string $PesoReal = null;
    /**
     * The PesoVol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:PesoVol
     * @var string|null
     */
    protected ?string $PesoVol = null;
    /**
     * The Observaciones
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 90
     * - minOccurs: 0
     * - ref: xsd:Observaciones
     * @var string|null
     */
    protected ?string $Observaciones = null;
    /**
     * The FechaEtiquetado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:FechaEtiquetado
     * @var string|null
     */
    protected ?string $FechaEtiquetado = null;
    /**
     * The CodigoBarras
     * Meta information extracted from the WSDL
     * - ref: xsd:CodigoBarras
     * @var \StructType\FICHEROADJUNTOTYPE|null
     */
    protected ?\StructType\FICHEROADJUNTOTYPE $CodigoBarras = null;
    /**
     * The InstruccionesDevolucion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:InstruccionesDevolucion
     * @var string|null
     */
    protected ?string $InstruccionesDevolucion = null;
    /**
     * The VA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:VA
     * @var \StructType\VAETIQUETATYPE|null
     */
    protected ?\StructType\VAETIQUETATYPE $VA = null;
    /**
     * Constructor method for DATOSETIQUETAXMLTYPE
     * @uses DATOSETIQUETAXMLTYPE::setRemitenteEtiqueta()
     * @uses DATOSETIQUETAXMLTYPE::setDestinatarioEtiqueta()
     * @uses DATOSETIQUETAXMLTYPE::setReferencia()
     * @uses DATOSETIQUETAXMLTYPE::setPesoReal()
     * @uses DATOSETIQUETAXMLTYPE::setPesoVol()
     * @uses DATOSETIQUETAXMLTYPE::setObservaciones()
     * @uses DATOSETIQUETAXMLTYPE::setFechaEtiquetado()
     * @uses DATOSETIQUETAXMLTYPE::setCodigoBarras()
     * @uses DATOSETIQUETAXMLTYPE::setInstruccionesDevolucion()
     * @uses DATOSETIQUETAXMLTYPE::setVA()
     * @param \StructType\DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta
     * @param \StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     * @param string $referencia
     * @param string $pesoReal
     * @param string $pesoVol
     * @param string $observaciones
     * @param string $fechaEtiquetado
     * @param \StructType\FICHEROADJUNTOTYPE $codigoBarras
     * @param string $instruccionesDevolucion
     * @param \StructType\VAETIQUETATYPE $vA
     */
    public function __construct(?\StructType\DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta = null, ?\StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null, ?string $referencia = null, ?string $pesoReal = null, ?string $pesoVol = null, ?string $observaciones = null, ?string $fechaEtiquetado = null, ?\StructType\FICHEROADJUNTOTYPE $codigoBarras = null, ?string $instruccionesDevolucion = null, ?\StructType\VAETIQUETATYPE $vA = null)
    {
        $this
            ->setRemitenteEtiqueta($remitenteEtiqueta)
            ->setDestinatarioEtiqueta($destinatarioEtiqueta)
            ->setReferencia($referencia)
            ->setPesoReal($pesoReal)
            ->setPesoVol($pesoVol)
            ->setObservaciones($observaciones)
            ->setFechaEtiquetado($fechaEtiquetado)
            ->setCodigoBarras($codigoBarras)
            ->setInstruccionesDevolucion($instruccionesDevolucion)
            ->setVA($vA);
    }
    /**
     * Get RemitenteEtiqueta value
     * @return \StructType\DATOSREMITENTEETIQUETATYPE|null
     */
    public function getRemitenteEtiqueta(): ?\StructType\DATOSREMITENTEETIQUETATYPE
    {
        return $this->RemitenteEtiqueta;
    }
    /**
     * Set RemitenteEtiqueta value
     * @param \StructType\DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setRemitenteEtiqueta(?\StructType\DATOSREMITENTEETIQUETATYPE $remitenteEtiqueta = null): self
    {
        $this->RemitenteEtiqueta = $remitenteEtiqueta;
        
        return $this;
    }
    /**
     * Get DestinatarioEtiqueta value
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE|null
     */
    public function getDestinatarioEtiqueta(): ?\StructType\DATOSDESTINATARIOETIQUETATYPE
    {
        return $this->DestinatarioEtiqueta;
    }
    /**
     * Set DestinatarioEtiqueta value
     * @param \StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setDestinatarioEtiqueta(?\StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null): self
    {
        $this->DestinatarioEtiqueta = $destinatarioEtiqueta;
        
        return $this;
    }
    /**
     * Get Referencia value
     * @return string|null
     */
    public function getReferencia(): ?string
    {
        return $this->Referencia;
    }
    /**
     * Set Referencia value
     * @param string $referencia
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setReferencia(?string $referencia = null): self
    {
        // validation for constraint: string
        if (!is_null($referencia) && !is_string($referencia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($referencia) && mb_strlen((string) $referencia) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $referencia)), __LINE__);
        }
        $this->Referencia = $referencia;
        
        return $this;
    }
    /**
     * Get PesoReal value
     * @return string|null
     */
    public function getPesoReal(): ?string
    {
        return $this->PesoReal;
    }
    /**
     * Set PesoReal value
     * @param string $pesoReal
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setPesoReal(?string $pesoReal = null): self
    {
        // validation for constraint: string
        if (!is_null($pesoReal) && !is_string($pesoReal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoReal, true), gettype($pesoReal)), __LINE__);
        }
        $this->PesoReal = $pesoReal;
        
        return $this;
    }
    /**
     * Get PesoVol value
     * @return string|null
     */
    public function getPesoVol(): ?string
    {
        return $this->PesoVol;
    }
    /**
     * Set PesoVol value
     * @param string $pesoVol
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setPesoVol(?string $pesoVol = null): self
    {
        // validation for constraint: string
        if (!is_null($pesoVol) && !is_string($pesoVol)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoVol, true), gettype($pesoVol)), __LINE__);
        }
        $this->PesoVol = $pesoVol;
        
        return $this;
    }
    /**
     * Get Observaciones value
     * @return string|null
     */
    public function getObservaciones(): ?string
    {
        return $this->Observaciones;
    }
    /**
     * Set Observaciones value
     * @param string $observaciones
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setObservaciones(?string $observaciones = null): self
    {
        // validation for constraint: string
        if (!is_null($observaciones) && !is_string($observaciones)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observaciones, true), gettype($observaciones)), __LINE__);
        }
        // validation for constraint: maxLength(90)
        if (!is_null($observaciones) && mb_strlen((string) $observaciones) > 90) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 90', mb_strlen((string) $observaciones)), __LINE__);
        }
        $this->Observaciones = $observaciones;
        
        return $this;
    }
    /**
     * Get FechaEtiquetado value
     * @return string|null
     */
    public function getFechaEtiquetado(): ?string
    {
        return $this->FechaEtiquetado;
    }
    /**
     * Set FechaEtiquetado value
     * @param string $fechaEtiquetado
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setFechaEtiquetado(?string $fechaEtiquetado = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaEtiquetado) && !is_string($fechaEtiquetado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEtiquetado, true), gettype($fechaEtiquetado)), __LINE__);
        }
        $this->FechaEtiquetado = $fechaEtiquetado;
        
        return $this;
    }
    /**
     * Get CodigoBarras value
     * @return \StructType\FICHEROADJUNTOTYPE|null
     */
    public function getCodigoBarras(): ?\StructType\FICHEROADJUNTOTYPE
    {
        return $this->CodigoBarras;
    }
    /**
     * Set CodigoBarras value
     * @param \StructType\FICHEROADJUNTOTYPE $codigoBarras
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setCodigoBarras(?\StructType\FICHEROADJUNTOTYPE $codigoBarras = null): self
    {
        $this->CodigoBarras = $codigoBarras;
        
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
     * @return \StructType\DATOSETIQUETAXMLTYPE
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
     * Get VA value
     * @return \StructType\VAETIQUETATYPE|null
     */
    public function getVA(): ?\StructType\VAETIQUETATYPE
    {
        return $this->VA;
    }
    /**
     * Set VA value
     * @param \StructType\VAETIQUETATYPE $vA
     * @return \StructType\DATOSETIQUETAXMLTYPE
     */
    public function setVA(?\StructType\VAETIQUETATYPE $vA = null): self
    {
        $this->VA = $vA;
        
        return $this;
    }
}
