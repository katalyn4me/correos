<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSREMITENTECNTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSREMITENTECNTYPE extends AbstractStructBase
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
     * The CP
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CP
     * @var string|null
     */
    protected ?string $CP = null;
    /**
     * The Telefonocontacto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:Telefonocontacto
     * @var string|null
     */
    protected ?string $Telefonocontacto = null;
    /**
     * Constructor method for DATOSREMITENTECNTYPE
     * @uses DATOSREMITENTECNTYPE::setIdentificacion()
     * @uses DATOSREMITENTECNTYPE::setDatosDireccion()
     * @uses DATOSREMITENTECNTYPE::setCP()
     * @uses DATOSREMITENTECNTYPE::setTelefonocontacto()
     * @param \StructType\IDENTIFICACIONREDUCIDOTYPE $identificacion
     * @param \StructType\DIRECCIONTYPE $datosDireccion
     * @param string $cP
     * @param string $telefonocontacto
     */
    public function __construct(?\StructType\IDENTIFICACIONREDUCIDOTYPE $identificacion = null, ?\StructType\DIRECCIONTYPE $datosDireccion = null, ?string $cP = null, ?string $telefonocontacto = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
            ->setCP($cP)
            ->setTelefonocontacto($telefonocontacto);
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
     * @return \StructType\DATOSREMITENTECNTYPE
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
     * @return \StructType\DATOSREMITENTECNTYPE
     */
    public function setDatosDireccion(?\StructType\DIRECCIONTYPE $datosDireccion = null): self
    {
        $this->DatosDireccion = $datosDireccion;
        
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
     * @return \StructType\DATOSREMITENTECNTYPE
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
    /**
     * Get Telefonocontacto value
     * @return string|null
     */
    public function getTelefonocontacto(): ?string
    {
        return $this->Telefonocontacto;
    }
    /**
     * Set Telefonocontacto value
     * @param string $telefonocontacto
     * @return \StructType\DATOSREMITENTECNTYPE
     */
    public function setTelefonocontacto(?string $telefonocontacto = null): self
    {
        // validation for constraint: string
        if (!is_null($telefonocontacto) && !is_string($telefonocontacto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefonocontacto, true), gettype($telefonocontacto)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($telefonocontacto) && mb_strlen((string) $telefonocontacto) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $telefonocontacto)), __LINE__);
        }
        $this->Telefonocontacto = $telefonocontacto;
        
        return $this;
    }
}
