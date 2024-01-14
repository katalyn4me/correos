<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ADUANAIPCTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ADUANAIPCTYPE extends AbstractStructBase
{
    /**
     * The Moneda
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Moneda = null;
    /**
     * The PiezasDelContenido
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PIEZASDELCONTENIDOTYPE|null
     */
    protected ?\StructType\PIEZASDELCONTENIDOTYPE $PiezasDelContenido = null;
    /**
     * The ItemsOrginales
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ITEMSORIGINALESTYPE|null
     */
    protected ?\StructType\ITEMSORIGINALESTYPE $ItemsOrginales = null;
    /**
     * The DocumentosAdjuntos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DOCUMENTOSADJUNTOSTYPE|null
     */
    protected ?\StructType\DOCUMENTOSADJUNTOSTYPE $DocumentosAdjuntos = null;
    /**
     * The FacturasOriginales
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\FACTURASORIGINALESTYPE|null
     */
    protected ?\StructType\FACTURASORIGINALESTYPE $FacturasOriginales = null;
    /**
     * The NaturalezaCodigoTransaccion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NaturalezaCodigoTransaccion = null;
    /**
     * The Comentarios
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Comentarios = null;
    /**
     * The Incoterm
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 3
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Incoterm = null;
    /**
     * Constructor method for ADUANAIPCTYPE
     * @uses ADUANAIPCTYPE::setMoneda()
     * @uses ADUANAIPCTYPE::setPiezasDelContenido()
     * @uses ADUANAIPCTYPE::setItemsOrginales()
     * @uses ADUANAIPCTYPE::setDocumentosAdjuntos()
     * @uses ADUANAIPCTYPE::setFacturasOriginales()
     * @uses ADUANAIPCTYPE::setNaturalezaCodigoTransaccion()
     * @uses ADUANAIPCTYPE::setComentarios()
     * @uses ADUANAIPCTYPE::setIncoterm()
     * @param string $moneda
     * @param \StructType\PIEZASDELCONTENIDOTYPE $piezasDelContenido
     * @param \StructType\ITEMSORIGINALESTYPE $itemsOrginales
     * @param \StructType\DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos
     * @param \StructType\FACTURASORIGINALESTYPE $facturasOriginales
     * @param string $naturalezaCodigoTransaccion
     * @param string $comentarios
     * @param string $incoterm
     */
    public function __construct(?string $moneda = null, ?\StructType\PIEZASDELCONTENIDOTYPE $piezasDelContenido = null, ?\StructType\ITEMSORIGINALESTYPE $itemsOrginales = null, ?\StructType\DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos = null, ?\StructType\FACTURASORIGINALESTYPE $facturasOriginales = null, ?string $naturalezaCodigoTransaccion = null, ?string $comentarios = null, ?string $incoterm = null)
    {
        $this
            ->setMoneda($moneda)
            ->setPiezasDelContenido($piezasDelContenido)
            ->setItemsOrginales($itemsOrginales)
            ->setDocumentosAdjuntos($documentosAdjuntos)
            ->setFacturasOriginales($facturasOriginales)
            ->setNaturalezaCodigoTransaccion($naturalezaCodigoTransaccion)
            ->setComentarios($comentarios)
            ->setIncoterm($incoterm);
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
     * @return \StructType\ADUANAIPCTYPE
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
     * Get PiezasDelContenido value
     * @return \StructType\PIEZASDELCONTENIDOTYPE|null
     */
    public function getPiezasDelContenido(): ?\StructType\PIEZASDELCONTENIDOTYPE
    {
        return $this->PiezasDelContenido;
    }
    /**
     * Set PiezasDelContenido value
     * @param \StructType\PIEZASDELCONTENIDOTYPE $piezasDelContenido
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setPiezasDelContenido(?\StructType\PIEZASDELCONTENIDOTYPE $piezasDelContenido = null): self
    {
        $this->PiezasDelContenido = $piezasDelContenido;
        
        return $this;
    }
    /**
     * Get ItemsOrginales value
     * @return \StructType\ITEMSORIGINALESTYPE|null
     */
    public function getItemsOrginales(): ?\StructType\ITEMSORIGINALESTYPE
    {
        return $this->ItemsOrginales;
    }
    /**
     * Set ItemsOrginales value
     * @param \StructType\ITEMSORIGINALESTYPE $itemsOrginales
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setItemsOrginales(?\StructType\ITEMSORIGINALESTYPE $itemsOrginales = null): self
    {
        $this->ItemsOrginales = $itemsOrginales;
        
        return $this;
    }
    /**
     * Get DocumentosAdjuntos value
     * @return \StructType\DOCUMENTOSADJUNTOSTYPE|null
     */
    public function getDocumentosAdjuntos(): ?\StructType\DOCUMENTOSADJUNTOSTYPE
    {
        return $this->DocumentosAdjuntos;
    }
    /**
     * Set DocumentosAdjuntos value
     * @param \StructType\DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setDocumentosAdjuntos(?\StructType\DOCUMENTOSADJUNTOSTYPE $documentosAdjuntos = null): self
    {
        $this->DocumentosAdjuntos = $documentosAdjuntos;
        
        return $this;
    }
    /**
     * Get FacturasOriginales value
     * @return \StructType\FACTURASORIGINALESTYPE|null
     */
    public function getFacturasOriginales(): ?\StructType\FACTURASORIGINALESTYPE
    {
        return $this->FacturasOriginales;
    }
    /**
     * Set FacturasOriginales value
     * @param \StructType\FACTURASORIGINALESTYPE $facturasOriginales
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setFacturasOriginales(?\StructType\FACTURASORIGINALESTYPE $facturasOriginales = null): self
    {
        $this->FacturasOriginales = $facturasOriginales;
        
        return $this;
    }
    /**
     * Get NaturalezaCodigoTransaccion value
     * @return string|null
     */
    public function getNaturalezaCodigoTransaccion(): ?string
    {
        return $this->NaturalezaCodigoTransaccion;
    }
    /**
     * Set NaturalezaCodigoTransaccion value
     * @param string $naturalezaCodigoTransaccion
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setNaturalezaCodigoTransaccion(?string $naturalezaCodigoTransaccion = null): self
    {
        // validation for constraint: string
        if (!is_null($naturalezaCodigoTransaccion) && !is_string($naturalezaCodigoTransaccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($naturalezaCodigoTransaccion, true), gettype($naturalezaCodigoTransaccion)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($naturalezaCodigoTransaccion) && mb_strlen((string) $naturalezaCodigoTransaccion) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $naturalezaCodigoTransaccion)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($naturalezaCodigoTransaccion) && mb_strlen((string) $naturalezaCodigoTransaccion) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $naturalezaCodigoTransaccion)), __LINE__);
        }
        $this->NaturalezaCodigoTransaccion = $naturalezaCodigoTransaccion;
        
        return $this;
    }
    /**
     * Get Comentarios value
     * @return string|null
     */
    public function getComentarios(): ?string
    {
        return $this->Comentarios;
    }
    /**
     * Set Comentarios value
     * @param string $comentarios
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setComentarios(?string $comentarios = null): self
    {
        // validation for constraint: string
        if (!is_null($comentarios) && !is_string($comentarios)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comentarios, true), gettype($comentarios)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($comentarios) && mb_strlen((string) $comentarios) > 150) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen((string) $comentarios)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($comentarios) && mb_strlen((string) $comentarios) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $comentarios)), __LINE__);
        }
        $this->Comentarios = $comentarios;
        
        return $this;
    }
    /**
     * Get Incoterm value
     * @return string|null
     */
    public function getIncoterm(): ?string
    {
        return $this->Incoterm;
    }
    /**
     * Set Incoterm value
     * @param string $incoterm
     * @return \StructType\ADUANAIPCTYPE
     */
    public function setIncoterm(?string $incoterm = null): self
    {
        // validation for constraint: string
        if (!is_null($incoterm) && !is_string($incoterm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incoterm, true), gettype($incoterm)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($incoterm) && mb_strlen((string) $incoterm) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $incoterm)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($incoterm) && mb_strlen((string) $incoterm) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $incoterm)), __LINE__);
        }
        $this->Incoterm = $incoterm;
        
        return $this;
    }
}
