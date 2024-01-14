<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSREMITENTEETIQUETATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSREMITENTEETIQUETATYPE extends AbstractStructBase
{
    /**
     * The Nombre
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 300
     * - minOccurs: 0
     * - ref: xsd:Nombre
     * @var string|null
     */
    protected ?string $Nombre = null;
    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Direccion
     * @var string|null
     */
    protected ?string $Direccion = null;
    /**
     * The Localidad
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Localidad
     * @var string|null
     */
    protected ?string $Localidad = null;
    /**
     * The Provincia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minOccurs: 0
     * - ref: xsd:Provincia
     * @var string|null
     */
    protected ?string $Provincia = null;
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
     * Constructor method for DATOSREMITENTEETIQUETATYPE
     * @uses DATOSREMITENTEETIQUETATYPE::setNombre()
     * @uses DATOSREMITENTEETIQUETATYPE::setDireccion()
     * @uses DATOSREMITENTEETIQUETATYPE::setLocalidad()
     * @uses DATOSREMITENTEETIQUETATYPE::setProvincia()
     * @uses DATOSREMITENTEETIQUETATYPE::setPersonaContacto()
     * @uses DATOSREMITENTEETIQUETATYPE::setCP()
     * @param string $nombre
     * @param string $direccion
     * @param string $localidad
     * @param string $provincia
     * @param string $personaContacto
     * @param string $cP
     */
    public function __construct(?string $nombre = null, ?string $direccion = null, ?string $localidad = null, ?string $provincia = null, ?string $personaContacto = null, ?string $cP = null)
    {
        $this
            ->setNombre($nombre)
            ->setDireccion($direccion)
            ->setLocalidad($localidad)
            ->setProvincia($provincia)
            ->setPersonaContacto($personaContacto)
            ->setCP($cP);
    }
    /**
     * Get Nombre value
     * @return string|null
     */
    public function getNombre(): ?string
    {
        return $this->Nombre;
    }
    /**
     * Set Nombre value
     * @param string $nombre
     * @return \StructType\DATOSREMITENTEETIQUETATYPE
     */
    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        if (!is_null($nombre) && !is_string($nombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($nombre) && mb_strlen((string) $nombre) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $nombre)), __LINE__);
        }
        $this->Nombre = $nombre;
        
        return $this;
    }
    /**
     * Get Direccion value
     * @return string|null
     */
    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }
    /**
     * Set Direccion value
     * @param string $direccion
     * @return \StructType\DATOSREMITENTEETIQUETATYPE
     */
    public function setDireccion(?string $direccion = null): self
    {
        // validation for constraint: string
        if (!is_null($direccion) && !is_string($direccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccion, true), gettype($direccion)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($direccion) && mb_strlen((string) $direccion) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $direccion)), __LINE__);
        }
        $this->Direccion = $direccion;
        
        return $this;
    }
    /**
     * Get Localidad value
     * @return string|null
     */
    public function getLocalidad(): ?string
    {
        return $this->Localidad;
    }
    /**
     * Set Localidad value
     * @param string $localidad
     * @return \StructType\DATOSREMITENTEETIQUETATYPE
     */
    public function setLocalidad(?string $localidad = null): self
    {
        // validation for constraint: string
        if (!is_null($localidad) && !is_string($localidad)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localidad, true), gettype($localidad)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($localidad) && mb_strlen((string) $localidad) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $localidad)), __LINE__);
        }
        $this->Localidad = $localidad;
        
        return $this;
    }
    /**
     * Get Provincia value
     * @return string|null
     */
    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }
    /**
     * Set Provincia value
     * @param string $provincia
     * @return \StructType\DATOSREMITENTEETIQUETATYPE
     */
    public function setProvincia(?string $provincia = null): self
    {
        // validation for constraint: string
        if (!is_null($provincia) && !is_string($provincia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($provincia, true), gettype($provincia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($provincia) && mb_strlen((string) $provincia) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $provincia)), __LINE__);
        }
        $this->Provincia = $provincia;
        
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
     * @return \StructType\DATOSREMITENTEETIQUETATYPE
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
     * @return \StructType\DATOSREMITENTEETIQUETATYPE
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
