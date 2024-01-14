<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSDESTINATARIOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSDESTINATARIOTYPE extends AbstractStructBase
{
    /**
     * The Identificacion
     * Meta information extracted from the WSDL
     * - ref: xsd:Identificacion
     * @var \StructType\IDENTIFICACIONTYPE|null
     */
    protected ?\StructType\IDENTIFICACIONTYPE $Identificacion = null;
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
     * The DestinoApartadoPostalinternacional
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minOccurs: 0
     * - ref: xsd:DestinoApartadoPostalinternacional
     * @var string|null
     */
    protected ?string $DestinoApartadoPostalinternacional = null;
    /**
     * The ApartadoPostaldestino
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:ApartadoPostaldestino
     * @var string|null
     */
    protected ?string $ApartadoPostaldestino = null;
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
     * The DatosSMS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DatosSMS
     * @var \StructType\SMSTYPE|null
     */
    protected ?\StructType\SMSTYPE $DatosSMS = null;
    /**
     * Constructor method for DATOSDESTINATARIOTYPE
     * @uses DATOSDESTINATARIOTYPE::setIdentificacion()
     * @uses DATOSDESTINATARIOTYPE::setDatosDireccion()
     * @uses DATOSDESTINATARIOTYPE::setDatosDireccion2()
     * @uses DATOSDESTINATARIOTYPE::setCP()
     * @uses DATOSDESTINATARIOTYPE::setZIP()
     * @uses DATOSDESTINATARIOTYPE::setPais()
     * @uses DATOSDESTINATARIOTYPE::setDestinoApartadoPostalinternacional()
     * @uses DATOSDESTINATARIOTYPE::setApartadoPostaldestino()
     * @uses DATOSDESTINATARIOTYPE::setTelefonocontacto()
     * @uses DATOSDESTINATARIOTYPE::setEmail()
     * @uses DATOSDESTINATARIOTYPE::setDatosSMS()
     * @param \StructType\IDENTIFICACIONTYPE $identificacion
     * @param \StructType\DIRECCIONTYPE $datosDireccion
     * @param \StructType\DIRECCIONTYPE $datosDireccion2
     * @param string $cP
     * @param string $zIP
     * @param string $pais
     * @param string $destinoApartadoPostalinternacional
     * @param string $apartadoPostaldestino
     * @param string $telefonocontacto
     * @param string $email
     * @param \StructType\SMSTYPE $datosSMS
     */
    public function __construct(?\StructType\IDENTIFICACIONTYPE $identificacion = null, ?\StructType\DIRECCIONTYPE $datosDireccion = null, ?\StructType\DIRECCIONTYPE $datosDireccion2 = null, ?string $cP = null, ?string $zIP = null, ?string $pais = null, ?string $destinoApartadoPostalinternacional = null, ?string $apartadoPostaldestino = null, ?string $telefonocontacto = null, ?string $email = null, ?\StructType\SMSTYPE $datosSMS = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
            ->setDatosDireccion2($datosDireccion2)
            ->setCP($cP)
            ->setZIP($zIP)
            ->setPais($pais)
            ->setDestinoApartadoPostalinternacional($destinoApartadoPostalinternacional)
            ->setApartadoPostaldestino($apartadoPostaldestino)
            ->setTelefonocontacto($telefonocontacto)
            ->setEmail($email)
            ->setDatosSMS($datosSMS);
    }
    /**
     * Get Identificacion value
     * @return \StructType\IDENTIFICACIONTYPE|null
     */
    public function getIdentificacion(): ?\StructType\IDENTIFICACIONTYPE
    {
        return $this->Identificacion;
    }
    /**
     * Set Identificacion value
     * @param \StructType\IDENTIFICACIONTYPE $identificacion
     * @return \StructType\DATOSDESTINATARIOTYPE
     */
    public function setIdentificacion(?\StructType\IDENTIFICACIONTYPE $identificacion = null): self
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * Get DestinoApartadoPostalinternacional value
     * @return string|null
     */
    public function getDestinoApartadoPostalinternacional(): ?string
    {
        return $this->DestinoApartadoPostalinternacional;
    }
    /**
     * Set DestinoApartadoPostalinternacional value
     * @param string $destinoApartadoPostalinternacional
     * @return \StructType\DATOSDESTINATARIOTYPE
     */
    public function setDestinoApartadoPostalinternacional(?string $destinoApartadoPostalinternacional = null): self
    {
        // validation for constraint: string
        if (!is_null($destinoApartadoPostalinternacional) && !is_string($destinoApartadoPostalinternacional)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinoApartadoPostalinternacional, true), gettype($destinoApartadoPostalinternacional)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($destinoApartadoPostalinternacional) && mb_strlen((string) $destinoApartadoPostalinternacional) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $destinoApartadoPostalinternacional)), __LINE__);
        }
        $this->DestinoApartadoPostalinternacional = $destinoApartadoPostalinternacional;
        
        return $this;
    }
    /**
     * Get ApartadoPostaldestino value
     * @return string|null
     */
    public function getApartadoPostaldestino(): ?string
    {
        return $this->ApartadoPostaldestino;
    }
    /**
     * Set ApartadoPostaldestino value
     * @param string $apartadoPostaldestino
     * @return \StructType\DATOSDESTINATARIOTYPE
     */
    public function setApartadoPostaldestino(?string $apartadoPostaldestino = null): self
    {
        // validation for constraint: string
        if (!is_null($apartadoPostaldestino) && !is_string($apartadoPostaldestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartadoPostaldestino, true), gettype($apartadoPostaldestino)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($apartadoPostaldestino) && mb_strlen((string) $apartadoPostaldestino) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $apartadoPostaldestino)), __LINE__);
        }
        $this->ApartadoPostaldestino = $apartadoPostaldestino;
        
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * @return \StructType\DATOSDESTINATARIOTYPE
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
     * Get DatosSMS value
     * @return \StructType\SMSTYPE|null
     */
    public function getDatosSMS(): ?\StructType\SMSTYPE
    {
        return $this->DatosSMS;
    }
    /**
     * Set DatosSMS value
     * @param \StructType\SMSTYPE $datosSMS
     * @return \StructType\DATOSDESTINATARIOTYPE
     */
    public function setDatosSMS(?\StructType\SMSTYPE $datosSMS = null): self
    {
        $this->DatosSMS = $datosSMS;
        
        return $this;
    }
}
