<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSDESTINATARIOREEXPTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSDESTINATARIOREEXPTYPE extends AbstractStructBase
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
     * The Apellido1
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Apellido1
     * @var string|null
     */
    protected ?string $Apellido1 = null;
    /**
     * The Apellido2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minOccurs: 0
     * - ref: xsd:Apellido2
     * @var string|null
     */
    protected ?string $Apellido2 = null;
    /**
     * The Nif
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 15
     * - minOccurs: 0
     * - ref: xsd:Nif
     * @var string|null
     */
    protected ?string $Nif = null;
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
     * The TipoDireccion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minOccurs: 0
     * - ref: xsd:TipoDireccion
     * @var string|null
     */
    protected ?string $TipoDireccion = null;
    /**
     * The Direccion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:Direccion
     * @var string|null
     */
    protected ?string $Direccion = null;
    /**
     * The Numero
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Numero
     * @var string|null
     */
    protected ?string $Numero = null;
    /**
     * The Portal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Portal
     * @var string|null
     */
    protected ?string $Portal = null;
    /**
     * The Bloque
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Bloque
     * @var string|null
     */
    protected ?string $Bloque = null;
    /**
     * The Escalera
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Escalera
     * @var string|null
     */
    protected ?string $Escalera = null;
    /**
     * The Piso
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Piso
     * @var string|null
     */
    protected ?string $Piso = null;
    /**
     * The Puerta
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - minOccurs: 0
     * - ref: xsd:Puerta
     * @var string|null
     */
    protected ?string $Puerta = null;
    /**
     * The Localidad
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
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
     * The OficinaElegida
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - minOccurs: 0
     * - ref: xsd:OficinaElegida
     * @var string|null
     */
    protected ?string $OficinaElegida = null;
    /**
     * The CodigoHomepaq
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - minOccurs: 0
     * - ref: xsd:CodigoHomepaq
     * @var string|null
     */
    protected ?string $CodigoHomepaq = null;
    /**
     * Constructor method for DATOSDESTINATARIOREEXPTYPE
     * @uses DATOSDESTINATARIOREEXPTYPE::setNombre()
     * @uses DATOSDESTINATARIOREEXPTYPE::setApellido1()
     * @uses DATOSDESTINATARIOREEXPTYPE::setApellido2()
     * @uses DATOSDESTINATARIOREEXPTYPE::setNif()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPersonaContacto()
     * @uses DATOSDESTINATARIOREEXPTYPE::setTipoDireccion()
     * @uses DATOSDESTINATARIOREEXPTYPE::setDireccion()
     * @uses DATOSDESTINATARIOREEXPTYPE::setNumero()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPortal()
     * @uses DATOSDESTINATARIOREEXPTYPE::setBloque()
     * @uses DATOSDESTINATARIOREEXPTYPE::setEscalera()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPiso()
     * @uses DATOSDESTINATARIOREEXPTYPE::setPuerta()
     * @uses DATOSDESTINATARIOREEXPTYPE::setLocalidad()
     * @uses DATOSDESTINATARIOREEXPTYPE::setProvincia()
     * @uses DATOSDESTINATARIOREEXPTYPE::setCP()
     * @uses DATOSDESTINATARIOREEXPTYPE::setTelefonocontacto()
     * @uses DATOSDESTINATARIOREEXPTYPE::setEmail()
     * @uses DATOSDESTINATARIOREEXPTYPE::setObservaciones1()
     * @uses DATOSDESTINATARIOREEXPTYPE::setOficinaElegida()
     * @uses DATOSDESTINATARIOREEXPTYPE::setCodigoHomepaq()
     * @param string $nombre
     * @param string $apellido1
     * @param string $apellido2
     * @param string $nif
     * @param string $personaContacto
     * @param string $tipoDireccion
     * @param string $direccion
     * @param string $numero
     * @param string $portal
     * @param string $bloque
     * @param string $escalera
     * @param string $piso
     * @param string $puerta
     * @param string $localidad
     * @param string $provincia
     * @param string $cP
     * @param string $telefonocontacto
     * @param string $email
     * @param string $observaciones1
     * @param string $oficinaElegida
     * @param string $codigoHomepaq
     */
    public function __construct(?string $nombre = null, ?string $apellido1 = null, ?string $apellido2 = null, ?string $nif = null, ?string $personaContacto = null, ?string $tipoDireccion = null, ?string $direccion = null, ?string $numero = null, ?string $portal = null, ?string $bloque = null, ?string $escalera = null, ?string $piso = null, ?string $puerta = null, ?string $localidad = null, ?string $provincia = null, ?string $cP = null, ?string $telefonocontacto = null, ?string $email = null, ?string $observaciones1 = null, ?string $oficinaElegida = null, ?string $codigoHomepaq = null)
    {
        $this
            ->setNombre($nombre)
            ->setApellido1($apellido1)
            ->setApellido2($apellido2)
            ->setNif($nif)
            ->setPersonaContacto($personaContacto)
            ->setTipoDireccion($tipoDireccion)
            ->setDireccion($direccion)
            ->setNumero($numero)
            ->setPortal($portal)
            ->setBloque($bloque)
            ->setEscalera($escalera)
            ->setPiso($piso)
            ->setPuerta($puerta)
            ->setLocalidad($localidad)
            ->setProvincia($provincia)
            ->setCP($cP)
            ->setTelefonocontacto($telefonocontacto)
            ->setEmail($email)
            ->setObservaciones1($observaciones1)
            ->setOficinaElegida($oficinaElegida)
            ->setCodigoHomepaq($codigoHomepaq);
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * Get Apellido1 value
     * @return string|null
     */
    public function getApellido1(): ?string
    {
        return $this->Apellido1;
    }
    /**
     * Set Apellido1 value
     * @param string $apellido1
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setApellido1(?string $apellido1 = null): self
    {
        // validation for constraint: string
        if (!is_null($apellido1) && !is_string($apellido1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apellido1, true), gettype($apellido1)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($apellido1) && mb_strlen((string) $apellido1) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $apellido1)), __LINE__);
        }
        $this->Apellido1 = $apellido1;
        
        return $this;
    }
    /**
     * Get Apellido2 value
     * @return string|null
     */
    public function getApellido2(): ?string
    {
        return $this->Apellido2;
    }
    /**
     * Set Apellido2 value
     * @param string $apellido2
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setApellido2(?string $apellido2 = null): self
    {
        // validation for constraint: string
        if (!is_null($apellido2) && !is_string($apellido2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apellido2, true), gettype($apellido2)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($apellido2) && mb_strlen((string) $apellido2) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $apellido2)), __LINE__);
        }
        $this->Apellido2 = $apellido2;
        
        return $this;
    }
    /**
     * Get Nif value
     * @return string|null
     */
    public function getNif(): ?string
    {
        return $this->Nif;
    }
    /**
     * Set Nif value
     * @param string $nif
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setNif(?string $nif = null): self
    {
        // validation for constraint: string
        if (!is_null($nif) && !is_string($nif)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($nif) && mb_strlen((string) $nif) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $nif)), __LINE__);
        }
        $this->Nif = $nif;
        
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * Get TipoDireccion value
     * @return string|null
     */
    public function getTipoDireccion(): ?string
    {
        return $this->TipoDireccion;
    }
    /**
     * Set TipoDireccion value
     * @param string $tipoDireccion
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setTipoDireccion(?string $tipoDireccion = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoDireccion) && !is_string($tipoDireccion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoDireccion, true), gettype($tipoDireccion)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($tipoDireccion) && mb_strlen((string) $tipoDireccion) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $tipoDireccion)), __LINE__);
        }
        $this->TipoDireccion = $tipoDireccion;
        
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * Get Numero value
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->Numero;
    }
    /**
     * Set Numero value
     * @param string $numero
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setNumero(?string $numero = null): self
    {
        // validation for constraint: string
        if (!is_null($numero) && !is_string($numero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numero, true), gettype($numero)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($numero) && mb_strlen((string) $numero) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $numero)), __LINE__);
        }
        $this->Numero = $numero;
        
        return $this;
    }
    /**
     * Get Portal value
     * @return string|null
     */
    public function getPortal(): ?string
    {
        return $this->Portal;
    }
    /**
     * Set Portal value
     * @param string $portal
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setPortal(?string $portal = null): self
    {
        // validation for constraint: string
        if (!is_null($portal) && !is_string($portal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portal, true), gettype($portal)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($portal) && mb_strlen((string) $portal) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $portal)), __LINE__);
        }
        $this->Portal = $portal;
        
        return $this;
    }
    /**
     * Get Bloque value
     * @return string|null
     */
    public function getBloque(): ?string
    {
        return $this->Bloque;
    }
    /**
     * Set Bloque value
     * @param string $bloque
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setBloque(?string $bloque = null): self
    {
        // validation for constraint: string
        if (!is_null($bloque) && !is_string($bloque)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bloque, true), gettype($bloque)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($bloque) && mb_strlen((string) $bloque) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $bloque)), __LINE__);
        }
        $this->Bloque = $bloque;
        
        return $this;
    }
    /**
     * Get Escalera value
     * @return string|null
     */
    public function getEscalera(): ?string
    {
        return $this->Escalera;
    }
    /**
     * Set Escalera value
     * @param string $escalera
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setEscalera(?string $escalera = null): self
    {
        // validation for constraint: string
        if (!is_null($escalera) && !is_string($escalera)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($escalera, true), gettype($escalera)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($escalera) && mb_strlen((string) $escalera) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $escalera)), __LINE__);
        }
        $this->Escalera = $escalera;
        
        return $this;
    }
    /**
     * Get Piso value
     * @return string|null
     */
    public function getPiso(): ?string
    {
        return $this->Piso;
    }
    /**
     * Set Piso value
     * @param string $piso
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setPiso(?string $piso = null): self
    {
        // validation for constraint: string
        if (!is_null($piso) && !is_string($piso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($piso, true), gettype($piso)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($piso) && mb_strlen((string) $piso) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $piso)), __LINE__);
        }
        $this->Piso = $piso;
        
        return $this;
    }
    /**
     * Get Puerta value
     * @return string|null
     */
    public function getPuerta(): ?string
    {
        return $this->Puerta;
    }
    /**
     * Set Puerta value
     * @param string $puerta
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setPuerta(?string $puerta = null): self
    {
        // validation for constraint: string
        if (!is_null($puerta) && !is_string($puerta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($puerta, true), gettype($puerta)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($puerta) && mb_strlen((string) $puerta) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $puerta)), __LINE__);
        }
        $this->Puerta = $puerta;
        
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
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
     * Get OficinaElegida value
     * @return string|null
     */
    public function getOficinaElegida(): ?string
    {
        return $this->OficinaElegida;
    }
    /**
     * Set OficinaElegida value
     * @param string $oficinaElegida
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setOficinaElegida(?string $oficinaElegida = null): self
    {
        // validation for constraint: string
        if (!is_null($oficinaElegida) && !is_string($oficinaElegida)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oficinaElegida, true), gettype($oficinaElegida)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($oficinaElegida) && mb_strlen((string) $oficinaElegida) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen((string) $oficinaElegida)), __LINE__);
        }
        $this->OficinaElegida = $oficinaElegida;
        
        return $this;
    }
    /**
     * Get CodigoHomepaq value
     * @return string|null
     */
    public function getCodigoHomepaq(): ?string
    {
        return $this->CodigoHomepaq;
    }
    /**
     * Set CodigoHomepaq value
     * @param string $codigoHomepaq
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE
     */
    public function setCodigoHomepaq(?string $codigoHomepaq = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoHomepaq) && !is_string($codigoHomepaq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoHomepaq, true), gettype($codigoHomepaq)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($codigoHomepaq) && mb_strlen((string) $codigoHomepaq) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen((string) $codigoHomepaq)), __LINE__);
        }
        $this->CodigoHomepaq = $codigoHomepaq;
        
        return $this;
    }
}
