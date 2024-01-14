<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSDESTINATARIOETIQUETATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSDESTINATARIOETIQUETATYPE extends AbstractStructBase
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
     * The ZIP
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ZIP
     * @var string|null
     */
    protected ?string $ZIP = null;
    /**
     * The Pais
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:Pais
     * @var string|null
     */
    protected ?string $Pais = null;
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
     * The Telefono
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:Telefono
     * @var string|null
     */
    protected ?string $Telefono = null;
    /**
     * The AliasCitypaq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:AliasCitypaq
     * @var string|null
     */
    protected ?string $AliasCitypaq = null;
    /**
     * Constructor method for DATOSDESTINATARIOETIQUETATYPE
     * @uses DATOSDESTINATARIOETIQUETATYPE::setNombre()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setDireccion()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setLocalidad()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setProvincia()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setCP()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setZIP()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setPais()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setPersonaContacto()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setTelefono()
     * @uses DATOSDESTINATARIOETIQUETATYPE::setAliasCitypaq()
     * @param string $nombre
     * @param string $direccion
     * @param string $localidad
     * @param string $provincia
     * @param string $cP
     * @param string $zIP
     * @param string $pais
     * @param string $personaContacto
     * @param string $telefono
     * @param string $aliasCitypaq
     */
    public function __construct(?string $nombre = null, ?string $direccion = null, ?string $localidad = null, ?string $provincia = null, ?string $cP = null, ?string $zIP = null, ?string $pais = null, ?string $personaContacto = null, ?string $telefono = null, ?string $aliasCitypaq = null)
    {
        $this
            ->setNombre($nombre)
            ->setDireccion($direccion)
            ->setLocalidad($localidad)
            ->setProvincia($provincia)
            ->setCP($cP)
            ->setZIP($zIP)
            ->setPais($pais)
            ->setPersonaContacto($personaContacto)
            ->setTelefono($telefono)
            ->setAliasCitypaq($aliasCitypaq);
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
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
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
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
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
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
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
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
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
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
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
     * Get ZIP value
     * @return string|null
     */
    public function getZIP(): ?string
    {
        return $this->ZIP;
    }
    /**
     * Set ZIP value
     * @param string $zIP
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
     */
    public function setZIP(?string $zIP = null): self
    {
        // validation for constraint: string
        if (!is_null($zIP) && !is_string($zIP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zIP, true), gettype($zIP)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($zIP) && mb_strlen((string) $zIP) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $zIP)), __LINE__);
        }
        $this->ZIP = $zIP;
        
        return $this;
    }
    /**
     * Get Pais value
     * @return string|null
     */
    public function getPais(): ?string
    {
        return $this->Pais;
    }
    /**
     * Set Pais value
     * @param string $pais
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
     */
    public function setPais(?string $pais = null): self
    {
        // validation for constraint: string
        if (!is_null($pais) && !is_string($pais)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pais, true), gettype($pais)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($pais) && mb_strlen((string) $pais) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $pais)), __LINE__);
        }
        $this->Pais = $pais;
        
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
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
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
     * Get Telefono value
     * @return string|null
     */
    public function getTelefono(): ?string
    {
        return $this->Telefono;
    }
    /**
     * Set Telefono value
     * @param string $telefono
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
     */
    public function setTelefono(?string $telefono = null): self
    {
        // validation for constraint: string
        if (!is_null($telefono) && !is_string($telefono)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefono, true), gettype($telefono)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($telefono) && mb_strlen((string) $telefono) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $telefono)), __LINE__);
        }
        $this->Telefono = $telefono;
        
        return $this;
    }
    /**
     * Get AliasCitypaq value
     * @return string|null
     */
    public function getAliasCitypaq(): ?string
    {
        return $this->AliasCitypaq;
    }
    /**
     * Set AliasCitypaq value
     * @param string $aliasCitypaq
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE
     */
    public function setAliasCitypaq(?string $aliasCitypaq = null): self
    {
        // validation for constraint: string
        if (!is_null($aliasCitypaq) && !is_string($aliasCitypaq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aliasCitypaq, true), gettype($aliasCitypaq)), __LINE__);
        }
        $this->AliasCitypaq = $aliasCitypaq;
        
        return $this;
    }
}
