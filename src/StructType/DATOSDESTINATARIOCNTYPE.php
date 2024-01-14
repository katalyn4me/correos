<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSDESTINATARIOCNTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSDESTINATARIOCNTYPE extends AbstractStructBase
{
    /**
     * The Identificacion
     * @var \StructType\IDENTIFICACIONREDUCIDOTYPE|null
     */
    protected ?\StructType\IDENTIFICACIONREDUCIDOTYPE $Identificacion = null;
    /**
     * The DatosDireccion
     * Meta information extracted from the WSDL
     * - ref: xsd:DatosDireccion
     * @var \StructType\DIRECCIONTYPE|null
     */
    protected ?\StructType\DIRECCIONTYPE $DatosDireccion = null;
    /**
     * The DatosDireccion2
     * Meta information extracted from the WSDL
     * - ref: xsd:DatosDireccion2
     * @var \StructType\DIRECCIONTYPE|null
     */
    protected ?\StructType\DIRECCIONTYPE $DatosDireccion2 = null;
    /**
     * The CP
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:CP
     * @var string|null
     */
    protected ?string $CP = null;
    /**
     * Constructor method for DATOSDESTINATARIOCNTYPE
     * @uses DATOSDESTINATARIOCNTYPE::setIdentificacion()
     * @uses DATOSDESTINATARIOCNTYPE::setDatosDireccion()
     * @uses DATOSDESTINATARIOCNTYPE::setDatosDireccion2()
     * @uses DATOSDESTINATARIOCNTYPE::setCP()
     * @param \StructType\IDENTIFICACIONREDUCIDOTYPE $identificacion
     * @param \StructType\DIRECCIONTYPE $datosDireccion
     * @param \StructType\DIRECCIONTYPE $datosDireccion2
     * @param string $cP
     */
    public function __construct(?\StructType\IDENTIFICACIONREDUCIDOTYPE $identificacion = null, ?\StructType\DIRECCIONTYPE $datosDireccion = null, ?\StructType\DIRECCIONTYPE $datosDireccion2 = null, ?string $cP = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
            ->setDatosDireccion2($datosDireccion2)
            ->setCP($cP);
    }
    /**
     * Get Identificacion value
     * @return \StructType\IDENTIFICACIONREDUCIDOTYPE|null
     */
    public function getIdentificacion(): ?\StructType\IDENTIFICACIONREDUCIDOTYPE
    {
        return $this->Identificacion;
    }
    /**
     * Set Identificacion value
     * @param \StructType\IDENTIFICACIONREDUCIDOTYPE $identificacion
     * @return \StructType\DATOSDESTINATARIOCNTYPE
     */
    public function setIdentificacion(?\StructType\IDENTIFICACIONREDUCIDOTYPE $identificacion = null): self
    {
        $this->Identificacion = $identificacion;
        
        return $this;
    }
    /**
     * Get DatosDireccion value
     * @return \StructType\DIRECCIONTYPE|null
     */
    public function getDatosDireccion(): ?\StructType\DIRECCIONTYPE
    {
        return $this->DatosDireccion;
    }
    /**
     * Set DatosDireccion value
     * @param \StructType\DIRECCIONTYPE $datosDireccion
     * @return \StructType\DATOSDESTINATARIOCNTYPE
     */
    public function setDatosDireccion(?\StructType\DIRECCIONTYPE $datosDireccion = null): self
    {
        $this->DatosDireccion = $datosDireccion;
        
        return $this;
    }
    /**
     * Get DatosDireccion2 value
     * @return \StructType\DIRECCIONTYPE|null
     */
    public function getDatosDireccion2(): ?\StructType\DIRECCIONTYPE
    {
        return $this->DatosDireccion2;
    }
    /**
     * Set DatosDireccion2 value
     * @param \StructType\DIRECCIONTYPE $datosDireccion2
     * @return \StructType\DATOSDESTINATARIOCNTYPE
     */
    public function setDatosDireccion2(?\StructType\DIRECCIONTYPE $datosDireccion2 = null): self
    {
        $this->DatosDireccion2 = $datosDireccion2;
        
        return $this;
    }
    /**
     * Get CP value
     * @return string|null
     */
    public function getCP(): ?string
    {
        return $this->CP;
    }
    /**
     * Set CP value
     * @param string $cP
     * @return \StructType\DATOSDESTINATARIOCNTYPE
     */
    public function setCP(?string $cP = null): self
    {
        // validation for constraint: string
        if (!is_null($cP) && !is_string($cP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cP, true), gettype($cP)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($cP) && mb_strlen((string) $cP) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $cP)), __LINE__);
        }
        $this->CP = $cP;
        
        return $this;
    }
}
