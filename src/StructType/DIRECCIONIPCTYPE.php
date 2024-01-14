<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DIRECCIONIPCTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DIRECCIONIPCTYPE extends AbstractStructBase
{
    /**
     * The Nombre
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Nombre = null;
    /**
     * The Calle
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - maxOccurs: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Calle = null;
    /**
     * The NumeroCalle
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NumeroCalle = null;
    /**
     * The ApartadoCorreos
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApartadoCorreos = null;
    /**
     * The CodigoZip
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CodigoZip = null;
    /**
     * The Ciudad
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Ciudad = null;
    /**
     * The Pais
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Pais = null;
    /**
     * The NombreContacto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NombreContacto = null;
    /**
     * The TelefonoContacto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TelefonoContacto = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * Constructor method for DIRECCIONIPCTYPE
     * @uses DIRECCIONIPCTYPE::setNombre()
     * @uses DIRECCIONIPCTYPE::setCalle()
     * @uses DIRECCIONIPCTYPE::setNumeroCalle()
     * @uses DIRECCIONIPCTYPE::setApartadoCorreos()
     * @uses DIRECCIONIPCTYPE::setCodigoZip()
     * @uses DIRECCIONIPCTYPE::setCiudad()
     * @uses DIRECCIONIPCTYPE::setPais()
     * @uses DIRECCIONIPCTYPE::setNombreContacto()
     * @uses DIRECCIONIPCTYPE::setTelefonoContacto()
     * @uses DIRECCIONIPCTYPE::setEmail()
     * @param string $nombre
     * @param string[] $calle
     * @param string $numeroCalle
     * @param string $apartadoCorreos
     * @param string $codigoZip
     * @param string $ciudad
     * @param string $pais
     * @param string $nombreContacto
     * @param string $telefonoContacto
     * @param string $email
     */
    public function __construct(?string $nombre = null, ?array $calle = null, ?string $numeroCalle = null, ?string $apartadoCorreos = null, ?string $codigoZip = null, ?string $ciudad = null, ?string $pais = null, ?string $nombreContacto = null, ?string $telefonoContacto = null, ?string $email = null)
    {
        $this
            ->setNombre($nombre)
            ->setCalle($calle)
            ->setNumeroCalle($numeroCalle)
            ->setApartadoCorreos($apartadoCorreos)
            ->setCodigoZip($codigoZip)
            ->setCiudad($ciudad)
            ->setPais($pais)
            ->setNombreContacto($nombreContacto)
            ->setTelefonoContacto($telefonoContacto)
            ->setEmail($email);
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
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setNombre(?string $nombre = null): self
    {
        // validation for constraint: string
        if (!is_null($nombre) && !is_string($nombre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombre, true), gettype($nombre)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($nombre) && mb_strlen((string) $nombre) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $nombre)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nombre) && mb_strlen((string) $nombre) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nombre)), __LINE__);
        }
        $this->Nombre = $nombre;
        
        return $this;
    }
    /**
     * Get Calle value
     * @return string[]
     */
    public function getCalle(): ?array
    {
        return $this->Calle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForArrayConstraintFromSetCalle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONIPCTYPECalleItem) {
            // validation for constraint: itemType
            if (!is_string($dIRECCIONIPCTYPECalleItem)) {
                $invalidValues[] = is_object($dIRECCIONIPCTYPECalleItem) ? get_class($dIRECCIONIPCTYPECalleItem) : sprintf('%s(%s)', gettype($dIRECCIONIPCTYPECalleItem), var_export($dIRECCIONIPCTYPECalleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Calle property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMaxLengthConstraintFromSetCalle(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $dIRECCIONIPCTYPECalleItem) {
            // validation for constraint: maxLength(40)
            if (mb_strlen((string) $dIRECCIONIPCTYPECalleItem) > 40) {
                $invalidValues[] = var_export($dIRECCIONIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 40', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMinLengthConstraintFromSetCalle(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $dIRECCIONIPCTYPECalleItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $dIRECCIONIPCTYPECalleItem) < 1) {
                $invalidValues[] = var_export($dIRECCIONIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Calle value
     * @throws InvalidArgumentException
     * @param string[] $calle
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setCalle(?array $calle = null): self
    {
        // validation for constraint: array
        if ('' !== ($calleArrayErrorMessage = self::validateCalleForArrayConstraintFromSetCalle($calle))) {
            throw new InvalidArgumentException($calleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(40)
        if ('' !== ($calleMaxLengthErrorMessage = self::validateCalleForMaxLengthConstraintFromSetCalle($calle))) {
            throw new InvalidArgumentException($calleMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($calle) && count($calle) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($calleMinLengthErrorMessage = self::validateCalleForMinLengthConstraintFromSetCalle($calle))) {
            throw new InvalidArgumentException($calleMinLengthErrorMessage, __LINE__);
        }
        $this->Calle = $calle;
        
        return $this;
    }
    /**
     * Add item to Calle value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function addToCalle(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Calle property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (mb_strlen((string) $item) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->Calle) && count($this->Calle) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->Calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen((string) $item) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $item)), __LINE__);
        }
        $this->Calle[] = $item;
        
        return $this;
    }
    /**
     * Get NumeroCalle value
     * @return string|null
     */
    public function getNumeroCalle(): ?string
    {
        return $this->NumeroCalle;
    }
    /**
     * Set NumeroCalle value
     * @param string $numeroCalle
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setNumeroCalle(?string $numeroCalle = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroCalle) && !is_string($numeroCalle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCalle, true), gettype($numeroCalle)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numeroCalle) && mb_strlen((string) $numeroCalle) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numeroCalle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroCalle) && mb_strlen((string) $numeroCalle) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $numeroCalle)), __LINE__);
        }
        $this->NumeroCalle = $numeroCalle;
        
        return $this;
    }
    /**
     * Get ApartadoCorreos value
     * @return string|null
     */
    public function getApartadoCorreos(): ?string
    {
        return $this->ApartadoCorreos;
    }
    /**
     * Set ApartadoCorreos value
     * @param string $apartadoCorreos
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setApartadoCorreos(?string $apartadoCorreos = null): self
    {
        // validation for constraint: string
        if (!is_null($apartadoCorreos) && !is_string($apartadoCorreos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartadoCorreos, true), gettype($apartadoCorreos)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($apartadoCorreos) && mb_strlen((string) $apartadoCorreos) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $apartadoCorreos)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($apartadoCorreos) && mb_strlen((string) $apartadoCorreos) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $apartadoCorreos)), __LINE__);
        }
        $this->ApartadoCorreos = $apartadoCorreos;
        
        return $this;
    }
    /**
     * Get CodigoZip value
     * @return string|null
     */
    public function getCodigoZip(): ?string
    {
        return $this->CodigoZip;
    }
    /**
     * Set CodigoZip value
     * @param string $codigoZip
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setCodigoZip(?string $codigoZip = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoZip) && !is_string($codigoZip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoZip, true), gettype($codigoZip)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($codigoZip) && mb_strlen((string) $codigoZip) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen((string) $codigoZip)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($codigoZip) && mb_strlen((string) $codigoZip) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $codigoZip)), __LINE__);
        }
        $this->CodigoZip = $codigoZip;
        
        return $this;
    }
    /**
     * Get Ciudad value
     * @return string|null
     */
    public function getCiudad(): ?string
    {
        return $this->Ciudad;
    }
    /**
     * Set Ciudad value
     * @param string $ciudad
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setCiudad(?string $ciudad = null): self
    {
        // validation for constraint: string
        if (!is_null($ciudad) && !is_string($ciudad)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ciudad, true), gettype($ciudad)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($ciudad) && mb_strlen((string) $ciudad) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $ciudad)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ciudad) && mb_strlen((string) $ciudad) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ciudad)), __LINE__);
        }
        $this->Ciudad = $ciudad;
        
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
     * @return \StructType\DIRECCIONIPCTYPE
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
        // validation for constraint: minLength(2)
        if (!is_null($pais) && mb_strlen((string) $pais) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pais)), __LINE__);
        }
        $this->Pais = $pais;
        
        return $this;
    }
    /**
     * Get NombreContacto value
     * @return string|null
     */
    public function getNombreContacto(): ?string
    {
        return $this->NombreContacto;
    }
    /**
     * Set NombreContacto value
     * @param string $nombreContacto
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setNombreContacto(?string $nombreContacto = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreContacto) && !is_string($nombreContacto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreContacto, true), gettype($nombreContacto)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($nombreContacto) && mb_strlen((string) $nombreContacto) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $nombreContacto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nombreContacto) && mb_strlen((string) $nombreContacto) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nombreContacto)), __LINE__);
        }
        $this->NombreContacto = $nombreContacto;
        
        return $this;
    }
    /**
     * Get TelefonoContacto value
     * @return string|null
     */
    public function getTelefonoContacto(): ?string
    {
        return $this->TelefonoContacto;
    }
    /**
     * Set TelefonoContacto value
     * @param string $telefonoContacto
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setTelefonoContacto(?string $telefonoContacto = null): self
    {
        // validation for constraint: string
        if (!is_null($telefonoContacto) && !is_string($telefonoContacto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefonoContacto, true), gettype($telefonoContacto)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($telefonoContacto) && mb_strlen((string) $telefonoContacto) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $telefonoContacto)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($telefonoContacto) && mb_strlen((string) $telefonoContacto) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $telefonoContacto)), __LINE__);
        }
        $this->TelefonoContacto = $telefonoContacto;
        
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
     * @return \StructType\DIRECCIONIPCTYPE
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($email) && mb_strlen((string) $email) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $email)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($email) && mb_strlen((string) $email) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
}
