<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETIQUETATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ETIQUETATYPE extends AbstractStructBase
{
    /**
     * The Modo
     * Meta information extracted from the WSDL
     * - ref: xsd:Modo
     * @var string|null
     */
    protected ?string $Modo = null;
    /**
     * The Etiqueta_xml
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Etiqueta_xml
     * @var \StructType\DATOSETIQUETAXMLTYPE|null
     */
    protected ?\StructType\DATOSETIQUETAXMLTYPE $Etiqueta_xml = null;
    /**
     * The Etiqueta_pdf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Etiqueta_pdf
     * @var \StructType\FICHEROADJUNTOTYPE|null
     */
    protected ?\StructType\FICHEROADJUNTOTYPE $Etiqueta_pdf = null;
    /**
     * The Etiqueta_zpl
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Etiqueta_zpl
     * @var \StructType\FICHEROADJUNTOTYPE|null
     */
    protected ?\StructType\FICHEROADJUNTOTYPE $Etiqueta_zpl = null;
    /**
     * Constructor method for ETIQUETATYPE
     * @uses ETIQUETATYPE::setModo()
     * @uses ETIQUETATYPE::setEtiqueta_xml()
     * @uses ETIQUETATYPE::setEtiqueta_pdf()
     * @uses ETIQUETATYPE::setEtiqueta_zpl()
     * @param string $modo
     * @param \StructType\DATOSETIQUETAXMLTYPE $etiqueta_xml
     * @param \StructType\FICHEROADJUNTOTYPE $etiqueta_pdf
     * @param \StructType\FICHEROADJUNTOTYPE $etiqueta_zpl
     */
    public function __construct(?string $modo = null, ?\StructType\DATOSETIQUETAXMLTYPE $etiqueta_xml = null, ?\StructType\FICHEROADJUNTOTYPE $etiqueta_pdf = null, ?\StructType\FICHEROADJUNTOTYPE $etiqueta_zpl = null)
    {
        $this
            ->setModo($modo)
            ->setEtiqueta_xml($etiqueta_xml)
            ->setEtiqueta_pdf($etiqueta_pdf)
            ->setEtiqueta_zpl($etiqueta_zpl);
    }
    /**
     * Get Modo value
     * @return string|null
     */
    public function getModo(): ?string
    {
        return $this->Modo;
    }
    /**
     * Set Modo value
     * @uses \EnumType\Modo::valueIsValid()
     * @uses \EnumType\Modo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modo
     * @return \StructType\ETIQUETATYPE
     */
    public function setModo(?string $modo = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Modo::valueIsValid($modo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Modo', is_array($modo) ? implode(', ', $modo) : var_export($modo, true), implode(', ', \EnumType\Modo::getValidValues())), __LINE__);
        }
        $this->Modo = $modo;
        
        return $this;
    }
    /**
     * Get Etiqueta_xml value
     * @return \StructType\DATOSETIQUETAXMLTYPE|null
     */
    public function getEtiqueta_xml(): ?\StructType\DATOSETIQUETAXMLTYPE
    {
        return $this->Etiqueta_xml;
    }
    /**
     * Set Etiqueta_xml value
     * @param \StructType\DATOSETIQUETAXMLTYPE $etiqueta_xml
     * @return \StructType\ETIQUETATYPE
     */
    public function setEtiqueta_xml(?\StructType\DATOSETIQUETAXMLTYPE $etiqueta_xml = null): self
    {
        $this->Etiqueta_xml = $etiqueta_xml;
        
        return $this;
    }
    /**
     * Get Etiqueta_pdf value
     * @return \StructType\FICHEROADJUNTOTYPE|null
     */
    public function getEtiqueta_pdf(): ?\StructType\FICHEROADJUNTOTYPE
    {
        return $this->Etiqueta_pdf;
    }
    /**
     * Set Etiqueta_pdf value
     * @param \StructType\FICHEROADJUNTOTYPE $etiqueta_pdf
     * @return \StructType\ETIQUETATYPE
     */
    public function setEtiqueta_pdf(?\StructType\FICHEROADJUNTOTYPE $etiqueta_pdf = null): self
    {
        $this->Etiqueta_pdf = $etiqueta_pdf;
        
        return $this;
    }
    /**
     * Get Etiqueta_zpl value
     * @return \StructType\FICHEROADJUNTOTYPE|null
     */
    public function getEtiqueta_zpl(): ?\StructType\FICHEROADJUNTOTYPE
    {
        return $this->Etiqueta_zpl;
    }
    /**
     * Set Etiqueta_zpl value
     * @param \StructType\FICHEROADJUNTOTYPE $etiqueta_zpl
     * @return \StructType\ETIQUETATYPE
     */
    public function setEtiqueta_zpl(?\StructType\FICHEROADJUNTOTYPE $etiqueta_zpl = null): self
    {
        $this->Etiqueta_zpl = $etiqueta_zpl;
        
        return $this;
    }
}
