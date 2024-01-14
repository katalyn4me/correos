<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSREMITENTEMODIFTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSREMITENTEMODIFTYPE extends AbstractStructBase
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
     * Constructor method for DATOSREMITENTEMODIFTYPE
     * @uses DATOSREMITENTEMODIFTYPE::setIdentificacion()
     * @uses DATOSREMITENTEMODIFTYPE::setDatosDireccion()
     * @uses DATOSREMITENTEMODIFTYPE::setTelefonocontacto()
     * @uses DATOSREMITENTEMODIFTYPE::setEmail()
     * @uses DATOSREMITENTEMODIFTYPE::setDatosSMS()
     * @param \StructType\IDENTIFICACIONTYPE $identificacion
     * @param \StructType\DIRECCIONTYPE $datosDireccion
     * @param string $telefonocontacto
     * @param string $email
     * @param \StructType\SMSTYPE $datosSMS
     */
    public function __construct(?\StructType\IDENTIFICACIONTYPE $identificacion = null, ?\StructType\DIRECCIONTYPE $datosDireccion = null, ?string $telefonocontacto = null, ?string $email = null, ?\StructType\SMSTYPE $datosSMS = null)
    {
        $this
            ->setIdentificacion($identificacion)
            ->setDatosDireccion($datosDireccion)
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
     * @return \StructType\DATOSREMITENTEMODIFTYPE
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
     * @return \StructType\DATOSREMITENTEMODIFTYPE
     */
    public function setDatosDireccion(?\StructType\DIRECCIONTYPE $datosDireccion = null): self
    {
        $this->DatosDireccion = $datosDireccion;
        
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
     * @return \StructType\DATOSREMITENTEMODIFTYPE
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
     * @return \StructType\DATOSREMITENTEMODIFTYPE
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
     * @return \StructType\DATOSREMITENTEMODIFTYPE
     */
    public function setDatosSMS(?\StructType\SMSTYPE $datosSMS = null): self
    {
        $this->DatosSMS = $datosSMS;
        
        return $this;
    }
}
