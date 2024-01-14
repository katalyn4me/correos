<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VAETIQUETATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VAETIQUETATYPE extends AbstractStructBase
{
    /**
     * The ImporteReembolso
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ImporteReembolso
     * @var string|null
     */
    protected ?string $ImporteReembolso = null;
    /**
     * The DUA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DUA
     * @var string|null
     */
    protected ?string $DUA = null;
    /**
     * The eAR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:eAR
     * @var string|null
     */
    protected ?string $eAR = null;
    /**
     * The EntregaExclusiva
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:EntregaExclusiva
     * @var string|null
     */
    protected ?string $EntregaExclusiva = null;
    /**
     * The RepartoSabado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:RepartoSabado
     * @var string|null
     */
    protected ?string $RepartoSabado = null;
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
     * The FechaEntregaConcertada
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - ref: xsd:FechaEntregaConcertada
     * @var string|null
     */
    protected ?string $FechaEntregaConcertada = null;
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
     * Constructor method for VAETIQUETATYPE
     * @uses VAETIQUETATYPE::setImporteReembolso()
     * @uses VAETIQUETATYPE::setDUA()
     * @uses VAETIQUETATYPE::setEAR()
     * @uses VAETIQUETATYPE::setEntregaExclusiva()
     * @uses VAETIQUETATYPE::setRepartoSabado()
     * @uses VAETIQUETATYPE::setEntregaConcertada()
     * @uses VAETIQUETATYPE::setFechaEntregaConcertada()
     * @uses VAETIQUETATYPE::setFranjaHorariaConcertada()
     * @uses VAETIQUETATYPE::setEntregaconRecogida()
     * @uses VAETIQUETATYPE::setIndImprimirEtiqueta()
     * @uses VAETIQUETATYPE::setTextoAdicional()
     * @uses VAETIQUETATYPE::setEntregaSinFirmar()
     * @uses VAETIQUETATYPE::setComplejidadGestion()
     * @uses VAETIQUETATYPE::setAutorizacionPreviaEntrega()
     * @uses VAETIQUETATYPE::setTarifaPlana()
     * @param string $importeReembolso
     * @param string $dUA
     * @param string $eAR
     * @param string $entregaExclusiva
     * @param string $repartoSabado
     * @param string $entregaConcertada
     * @param string $fechaEntregaConcertada
     * @param string $franjaHorariaConcertada
     * @param string $entregaconRecogida
     * @param string $indImprimirEtiqueta
     * @param string $textoAdicional
     * @param string $entregaSinFirmar
     * @param string $complejidadGestion
     * @param string $autorizacionPreviaEntrega
     * @param string $tarifaPlana
     */
    public function __construct(?string $importeReembolso = null, ?string $dUA = null, ?string $eAR = null, ?string $entregaExclusiva = null, ?string $repartoSabado = null, ?string $entregaConcertada = null, ?string $fechaEntregaConcertada = null, ?string $franjaHorariaConcertada = null, ?string $entregaconRecogida = null, ?string $indImprimirEtiqueta = null, ?string $textoAdicional = null, ?string $entregaSinFirmar = null, ?string $complejidadGestion = null, ?string $autorizacionPreviaEntrega = null, ?string $tarifaPlana = null)
    {
        $this
            ->setImporteReembolso($importeReembolso)
            ->setDUA($dUA)
            ->setEAR($eAR)
            ->setEntregaExclusiva($entregaExclusiva)
            ->setRepartoSabado($repartoSabado)
            ->setEntregaConcertada($entregaConcertada)
            ->setFechaEntregaConcertada($fechaEntregaConcertada)
            ->setFranjaHorariaConcertada($franjaHorariaConcertada)
            ->setEntregaconRecogida($entregaconRecogida)
            ->setIndImprimirEtiqueta($indImprimirEtiqueta)
            ->setTextoAdicional($textoAdicional)
            ->setEntregaSinFirmar($entregaSinFirmar)
            ->setComplejidadGestion($complejidadGestion)
            ->setAutorizacionPreviaEntrega($autorizacionPreviaEntrega)
            ->setTarifaPlana($tarifaPlana);
    }
    /**
     * Get ImporteReembolso value
     * @return string|null
     */
    public function getImporteReembolso(): ?string
    {
        return $this->ImporteReembolso;
    }
    /**
     * Set ImporteReembolso value
     * @param string $importeReembolso
     * @return \StructType\VAETIQUETATYPE
     */
    public function setImporteReembolso(?string $importeReembolso = null): self
    {
        // validation for constraint: string
        if (!is_null($importeReembolso) && !is_string($importeReembolso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeReembolso, true), gettype($importeReembolso)), __LINE__);
        }
        $this->ImporteReembolso = $importeReembolso;
        
        return $this;
    }
    /**
     * Get DUA value
     * @return string|null
     */
    public function getDUA(): ?string
    {
        return $this->DUA;
    }
    /**
     * Set DUA value
     * @uses \EnumType\DUA::valueIsValid()
     * @uses \EnumType\DUA::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dUA
     * @return \StructType\VAETIQUETATYPE
     */
    public function setDUA(?string $dUA = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DUA::valueIsValid($dUA)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DUA', is_array($dUA) ? implode(', ', $dUA) : var_export($dUA, true), implode(', ', \EnumType\DUA::getValidValues())), __LINE__);
        }
        $this->DUA = $dUA;
        
        return $this;
    }
    /**
     * Get eAR value
     * @return string|null
     */
    public function getEAR(): ?string
    {
        return $this->eAR;
    }
    /**
     * Set eAR value
     * @uses \EnumType\EAR::valueIsValid()
     * @uses \EnumType\EAR::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eAR
     * @return \StructType\VAETIQUETATYPE
     */
    public function setEAR(?string $eAR = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EAR::valueIsValid($eAR)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EAR', is_array($eAR) ? implode(', ', $eAR) : var_export($eAR, true), implode(', ', \EnumType\EAR::getValidValues())), __LINE__);
        }
        $this->eAR = $eAR;
        
        return $this;
    }
    /**
     * Get EntregaExclusiva value
     * @return string|null
     */
    public function getEntregaExclusiva(): ?string
    {
        return $this->EntregaExclusiva;
    }
    /**
     * Set EntregaExclusiva value
     * @uses \EnumType\EntregaExclusiva::valueIsValid()
     * @uses \EnumType\EntregaExclusiva::getValidValues()
     * @throws InvalidArgumentException
     * @param string $entregaExclusiva
     * @return \StructType\VAETIQUETATYPE
     */
    public function setEntregaExclusiva(?string $entregaExclusiva = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EntregaExclusiva::valueIsValid($entregaExclusiva)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EntregaExclusiva', is_array($entregaExclusiva) ? implode(', ', $entregaExclusiva) : var_export($entregaExclusiva, true), implode(', ', \EnumType\EntregaExclusiva::getValidValues())), __LINE__);
        }
        $this->EntregaExclusiva = $entregaExclusiva;
        
        return $this;
    }
    /**
     * Get RepartoSabado value
     * @return string|null
     */
    public function getRepartoSabado(): ?string
    {
        return $this->RepartoSabado;
    }
    /**
     * Set RepartoSabado value
     * @uses \EnumType\RepartoSabado::valueIsValid()
     * @uses \EnumType\RepartoSabado::getValidValues()
     * @throws InvalidArgumentException
     * @param string $repartoSabado
     * @return \StructType\VAETIQUETATYPE
     */
    public function setRepartoSabado(?string $repartoSabado = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\RepartoSabado::valueIsValid($repartoSabado)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\RepartoSabado', is_array($repartoSabado) ? implode(', ', $repartoSabado) : var_export($repartoSabado, true), implode(', ', \EnumType\RepartoSabado::getValidValues())), __LINE__);
        }
        $this->RepartoSabado = $repartoSabado;
        
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
     * @return \StructType\VAETIQUETATYPE
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
     * Get FechaEntregaConcertada value
     * @return string|null
     */
    public function getFechaEntregaConcertada(): ?string
    {
        return $this->FechaEntregaConcertada;
    }
    /**
     * Set FechaEntregaConcertada value
     * @param string $fechaEntregaConcertada
     * @return \StructType\VAETIQUETATYPE
     */
    public function setFechaEntregaConcertada(?string $fechaEntregaConcertada = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaEntregaConcertada) && !is_string($fechaEntregaConcertada)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEntregaConcertada, true), gettype($fechaEntregaConcertada)), __LINE__);
        }
        $this->FechaEntregaConcertada = $fechaEntregaConcertada;
        
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
     * @return \StructType\VAETIQUETATYPE
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
}
