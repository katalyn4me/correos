<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DIRECCIONTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DIRECCIONTYPE extends AbstractStructBase
{
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
     * Constructor method for DIRECCIONTYPE
     * @uses DIRECCIONTYPE::setTipoDireccion()
     * @uses DIRECCIONTYPE::setDireccion()
     * @uses DIRECCIONTYPE::setNumero()
     * @uses DIRECCIONTYPE::setPortal()
     * @uses DIRECCIONTYPE::setBloque()
     * @uses DIRECCIONTYPE::setEscalera()
     * @uses DIRECCIONTYPE::setPiso()
     * @uses DIRECCIONTYPE::setPuerta()
     * @uses DIRECCIONTYPE::setLocalidad()
     * @uses DIRECCIONTYPE::setProvincia()
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
     */
    public function __construct(?string $tipoDireccion = null, ?string $direccion = null, ?string $numero = null, ?string $portal = null, ?string $bloque = null, ?string $escalera = null, ?string $piso = null, ?string $puerta = null, ?string $localidad = null, ?string $provincia = null)
    {
        $this
            ->setTipoDireccion($tipoDireccion)
            ->setDireccion($direccion)
            ->setNumero($numero)
            ->setPortal($portal)
            ->setBloque($bloque)
            ->setEscalera($escalera)
            ->setPiso($piso)
            ->setPuerta($puerta)
            ->setLocalidad($localidad)
            ->setProvincia($provincia);
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
     * @return \StructType\DIRECCIONTYPE
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
}
