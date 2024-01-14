<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IDENTIFICACIONREDUCIDOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IDENTIFICACIONREDUCIDOTYPE extends AbstractStructBase
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
     * The Empresa
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 150
     * - minOccurs: 0
     * - ref: xsd:Empresa
     * @var string|null
     */
    protected ?string $Empresa = null;
    /**
     * Constructor method for IDENTIFICACIONREDUCIDOTYPE
     * @uses IDENTIFICACIONREDUCIDOTYPE::setNombre()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setApellido1()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setApellido2()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setNif()
     * @uses IDENTIFICACIONREDUCIDOTYPE::setEmpresa()
     * @param string $nombre
     * @param string $apellido1
     * @param string $apellido2
     * @param string $nif
     * @param string $empresa
     */
    public function __construct(?string $nombre = null, ?string $apellido1 = null, ?string $apellido2 = null, ?string $nif = null, ?string $empresa = null)
    {
        $this
            ->setNombre($nombre)
            ->setApellido1($apellido1)
            ->setApellido2($apellido2)
            ->setNif($nif)
            ->setEmpresa($empresa);
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
     * @return \StructType\IDENTIFICACIONREDUCIDOTYPE
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
     * @return \StructType\IDENTIFICACIONREDUCIDOTYPE
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
     * @return \StructType\IDENTIFICACIONREDUCIDOTYPE
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
     * @return \StructType\IDENTIFICACIONREDUCIDOTYPE
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
     * Get Empresa value
     * @return string|null
     */
    public function getEmpresa(): ?string
    {
        return $this->Empresa;
    }
    /**
     * Set Empresa value
     * @param string $empresa
     * @return \StructType\IDENTIFICACIONREDUCIDOTYPE
     */
    public function setEmpresa(?string $empresa = null): self
    {
        // validation for constraint: string
        if (!is_null($empresa) && !is_string($empresa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($empresa, true), gettype($empresa)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($empresa) && mb_strlen((string) $empresa) > 150) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen((string) $empresa)), __LINE__);
        }
        $this->Empresa = $empresa;
        
        return $this;
    }
}
