<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSENVIOREDUCIDOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSENVIOREDUCIDOTYPE extends AbstractStructBase
{
    /**
     * The NumBulto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:NumBulto
     * @var int|null
     */
    protected ?int $NumBulto = null;
    /**
     * The CodProducto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string|null
     */
    protected ?string $CodProducto = null;
    /**
     * The ReferenciaCliente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente
     * @var string|null
     */
    protected ?string $ReferenciaCliente = null;
    /**
     * The ReferenciaCliente2
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente2
     * @var string|null
     */
    protected ?string $ReferenciaCliente2 = null;
    /**
     * The ReferenciaCliente3
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:ReferenciaCliente3
     * @var string|null
     */
    protected ?string $ReferenciaCliente3 = null;
    /**
     * The TipoFranqueo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TipoFranqueo
     * @var string|null
     */
    protected ?string $TipoFranqueo = null;
    /**
     * The NumMaquinaFranquear
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumMaquinaFranquear
     * @var string|null
     */
    protected ?string $NumMaquinaFranquear = null;
    /**
     * The ImporteFranqueado
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:ImporteFranqueado
     * @var string|null
     */
    protected ?string $ImporteFranqueado = null;
    /**
     * The Pesos
     * Meta information extracted from the WSDL
     * - ref: xsd:Pesos
     * @var \StructType\Pesos|null
     */
    protected ?\StructType\Pesos $Pesos = null;
    /**
     * Constructor method for DATOSENVIOREDUCIDOTYPE
     * @uses DATOSENVIOREDUCIDOTYPE::setNumBulto()
     * @uses DATOSENVIOREDUCIDOTYPE::setCodProducto()
     * @uses DATOSENVIOREDUCIDOTYPE::setReferenciaCliente()
     * @uses DATOSENVIOREDUCIDOTYPE::setReferenciaCliente2()
     * @uses DATOSENVIOREDUCIDOTYPE::setReferenciaCliente3()
     * @uses DATOSENVIOREDUCIDOTYPE::setTipoFranqueo()
     * @uses DATOSENVIOREDUCIDOTYPE::setNumMaquinaFranquear()
     * @uses DATOSENVIOREDUCIDOTYPE::setImporteFranqueado()
     * @uses DATOSENVIOREDUCIDOTYPE::setPesos()
     * @param int $numBulto
     * @param string $codProducto
     * @param string $referenciaCliente
     * @param string $referenciaCliente2
     * @param string $referenciaCliente3
     * @param string $tipoFranqueo
     * @param string $numMaquinaFranquear
     * @param string $importeFranqueado
     * @param \StructType\Pesos $pesos
     */
    public function __construct(?int $numBulto = null, ?string $codProducto = null, ?string $referenciaCliente = null, ?string $referenciaCliente2 = null, ?string $referenciaCliente3 = null, ?string $tipoFranqueo = null, ?string $numMaquinaFranquear = null, ?string $importeFranqueado = null, ?\StructType\Pesos $pesos = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setCodProducto($codProducto)
            ->setReferenciaCliente($referenciaCliente)
            ->setReferenciaCliente2($referenciaCliente2)
            ->setReferenciaCliente3($referenciaCliente3)
            ->setTipoFranqueo($tipoFranqueo)
            ->setNumMaquinaFranquear($numMaquinaFranquear)
            ->setImporteFranqueado($importeFranqueado)
            ->setPesos($pesos);
    }
    /**
     * Get NumBulto value
     * @return int|null
     */
    public function getNumBulto(): ?int
    {
        return $this->NumBulto;
    }
    /**
     * Set NumBulto value
     * @param int $numBulto
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setNumBulto(?int $numBulto = null): self
    {
        // validation for constraint: int
        if (!is_null($numBulto) && !(is_int($numBulto) || ctype_digit($numBulto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numBulto, true), gettype($numBulto)), __LINE__);
        }
        $this->NumBulto = $numBulto;
        
        return $this;
    }
    /**
     * Get CodProducto value
     * @return string|null
     */
    public function getCodProducto(): ?string
    {
        return $this->CodProducto;
    }
    /**
     * Set CodProducto value
     * @param string $codProducto
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setCodProducto(?string $codProducto = null): self
    {
        // validation for constraint: string
        if (!is_null($codProducto) && !is_string($codProducto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codProducto, true), gettype($codProducto)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($codProducto) && mb_strlen((string) $codProducto) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $codProducto)), __LINE__);
        }
        $this->CodProducto = $codProducto;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente value
     * @return string|null
     */
    public function getReferenciaCliente(): ?string
    {
        return $this->ReferenciaCliente;
    }
    /**
     * Set ReferenciaCliente value
     * @param string $referenciaCliente
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setReferenciaCliente(?string $referenciaCliente = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente) && !is_string($referenciaCliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente, true), gettype($referenciaCliente)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente) && mb_strlen((string) $referenciaCliente) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente)), __LINE__);
        }
        $this->ReferenciaCliente = $referenciaCliente;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente2 value
     * @return string|null
     */
    public function getReferenciaCliente2(): ?string
    {
        return $this->ReferenciaCliente2;
    }
    /**
     * Set ReferenciaCliente2 value
     * @param string $referenciaCliente2
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setReferenciaCliente2(?string $referenciaCliente2 = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente2) && !is_string($referenciaCliente2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente2, true), gettype($referenciaCliente2)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente2) && mb_strlen((string) $referenciaCliente2) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente2)), __LINE__);
        }
        $this->ReferenciaCliente2 = $referenciaCliente2;
        
        return $this;
    }
    /**
     * Get ReferenciaCliente3 value
     * @return string|null
     */
    public function getReferenciaCliente3(): ?string
    {
        return $this->ReferenciaCliente3;
    }
    /**
     * Set ReferenciaCliente3 value
     * @param string $referenciaCliente3
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setReferenciaCliente3(?string $referenciaCliente3 = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaCliente3) && !is_string($referenciaCliente3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCliente3, true), gettype($referenciaCliente3)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($referenciaCliente3) && mb_strlen((string) $referenciaCliente3) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $referenciaCliente3)), __LINE__);
        }
        $this->ReferenciaCliente3 = $referenciaCliente3;
        
        return $this;
    }
    /**
     * Get TipoFranqueo value
     * @return string|null
     */
    public function getTipoFranqueo(): ?string
    {
        return $this->TipoFranqueo;
    }
    /**
     * Set TipoFranqueo value
     * @uses \EnumType\TipoFranqueo::valueIsValid()
     * @uses \EnumType\TipoFranqueo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tipoFranqueo
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setTipoFranqueo(?string $tipoFranqueo = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TipoFranqueo::valueIsValid($tipoFranqueo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TipoFranqueo', is_array($tipoFranqueo) ? implode(', ', $tipoFranqueo) : var_export($tipoFranqueo, true), implode(', ', \EnumType\TipoFranqueo::getValidValues())), __LINE__);
        }
        $this->TipoFranqueo = $tipoFranqueo;
        
        return $this;
    }
    /**
     * Get NumMaquinaFranquear value
     * @return string|null
     */
    public function getNumMaquinaFranquear(): ?string
    {
        return $this->NumMaquinaFranquear;
    }
    /**
     * Set NumMaquinaFranquear value
     * @param string $numMaquinaFranquear
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setNumMaquinaFranquear(?string $numMaquinaFranquear = null): self
    {
        // validation for constraint: string
        if (!is_null($numMaquinaFranquear) && !is_string($numMaquinaFranquear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numMaquinaFranquear, true), gettype($numMaquinaFranquear)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numMaquinaFranquear) && mb_strlen((string) $numMaquinaFranquear) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numMaquinaFranquear)), __LINE__);
        }
        $this->NumMaquinaFranquear = $numMaquinaFranquear;
        
        return $this;
    }
    /**
     * Get ImporteFranqueado value
     * @return string|null
     */
    public function getImporteFranqueado(): ?string
    {
        return $this->ImporteFranqueado;
    }
    /**
     * Set ImporteFranqueado value
     * @param string $importeFranqueado
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setImporteFranqueado(?string $importeFranqueado = null): self
    {
        // validation for constraint: string
        if (!is_null($importeFranqueado) && !is_string($importeFranqueado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeFranqueado, true), gettype($importeFranqueado)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($importeFranqueado) && mb_strlen((string) $importeFranqueado) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $importeFranqueado)), __LINE__);
        }
        $this->ImporteFranqueado = $importeFranqueado;
        
        return $this;
    }
    /**
     * Get Pesos value
     * @return \StructType\Pesos|null
     */
    public function getPesos(): ?\StructType\Pesos
    {
        return $this->Pesos;
    }
    /**
     * Set Pesos value
     * @param \StructType\Pesos $pesos
     * @return \StructType\DATOSENVIOREDUCIDOTYPE
     */
    public function setPesos(?\StructType\Pesos $pesos = null): self
    {
        $this->Pesos = $pesos;
        
        return $this;
    }
}
