<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSADUANATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSADUANATYPE extends AbstractStructBase
{
    /**
     * The Cantidad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Cantidad
     * @var int|null
     */
    protected ?int $Cantidad = null;
    /**
     * The Descripcion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - minOccurs: 0
     * - ref: xsd:Descripcion
     * @var string|null
     */
    protected ?string $Descripcion = null;
    /**
     * The Pesoneto
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Pesoneto
     * @var string|null
     */
    protected ?string $Pesoneto = null;
    /**
     * The Valorneto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - minOccurs: 0
     * - ref: xsd:Valorneto
     * @var string|null
     */
    protected ?string $Valorneto = null;
    /**
     * The NTarifario
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minOccurs: 0
     * - ref: xsd:NTarifario
     * @var string|null
     */
    protected ?string $NTarifario = null;
    /**
     * The PaisOrigen
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minOccurs: 0
     * - ref: xsd:PaisOrigen
     * @var string|null
     */
    protected ?string $PaisOrigen = null;
    /**
     * Constructor method for DATOSADUANATYPE
     * @uses DATOSADUANATYPE::setCantidad()
     * @uses DATOSADUANATYPE::setDescripcion()
     * @uses DATOSADUANATYPE::setPesoneto()
     * @uses DATOSADUANATYPE::setValorneto()
     * @uses DATOSADUANATYPE::setNTarifario()
     * @uses DATOSADUANATYPE::setPaisOrigen()
     * @param int $cantidad
     * @param string $descripcion
     * @param string $pesoneto
     * @param string $valorneto
     * @param string $nTarifario
     * @param string $paisOrigen
     */
    public function __construct(?int $cantidad = null, ?string $descripcion = null, ?string $pesoneto = null, ?string $valorneto = null, ?string $nTarifario = null, ?string $paisOrigen = null)
    {
        $this
            ->setCantidad($cantidad)
            ->setDescripcion($descripcion)
            ->setPesoneto($pesoneto)
            ->setValorneto($valorneto)
            ->setNTarifario($nTarifario)
            ->setPaisOrigen($paisOrigen);
    }
    /**
     * Get Cantidad value
     * @return int|null
     */
    public function getCantidad(): ?int
    {
        return $this->Cantidad;
    }
    /**
     * Set Cantidad value
     * @param int $cantidad
     * @return \StructType\DATOSADUANATYPE
     */
    public function setCantidad(?int $cantidad = null): self
    {
        // validation for constraint: int
        if (!is_null($cantidad) && !(is_int($cantidad) || ctype_digit($cantidad))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cantidad, true), gettype($cantidad)), __LINE__);
        }
        $this->Cantidad = $cantidad;
        
        return $this;
    }
    /**
     * Get Descripcion value
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }
    /**
     * Set Descripcion value
     * @param string $descripcion
     * @return \StructType\DATOSADUANATYPE
     */
    public function setDescripcion(?string $descripcion = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($descripcion) && mb_strlen((string) $descripcion) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $descripcion)), __LINE__);
        }
        $this->Descripcion = $descripcion;
        
        return $this;
    }
    /**
     * Get Pesoneto value
     * @return string|null
     */
    public function getPesoneto(): ?string
    {
        return $this->Pesoneto;
    }
    /**
     * Set Pesoneto value
     * @param string $pesoneto
     * @return \StructType\DATOSADUANATYPE
     */
    public function setPesoneto(?string $pesoneto = null): self
    {
        // validation for constraint: string
        if (!is_null($pesoneto) && !is_string($pesoneto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pesoneto, true), gettype($pesoneto)), __LINE__);
        }
        $this->Pesoneto = $pesoneto;
        
        return $this;
    }
    /**
     * Get Valorneto value
     * @return string|null
     */
    public function getValorneto(): ?string
    {
        return $this->Valorneto;
    }
    /**
     * Set Valorneto value
     * @param string $valorneto
     * @return \StructType\DATOSADUANATYPE
     */
    public function setValorneto(?string $valorneto = null): self
    {
        // validation for constraint: string
        if (!is_null($valorneto) && !is_string($valorneto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorneto, true), gettype($valorneto)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($valorneto) && mb_strlen((string) $valorneto) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $valorneto)), __LINE__);
        }
        $this->Valorneto = $valorneto;
        
        return $this;
    }
    /**
     * Get NTarifario value
     * @return string|null
     */
    public function getNTarifario(): ?string
    {
        return $this->NTarifario;
    }
    /**
     * Set NTarifario value
     * @param string $nTarifario
     * @return \StructType\DATOSADUANATYPE
     */
    public function setNTarifario(?string $nTarifario = null): self
    {
        // validation for constraint: string
        if (!is_null($nTarifario) && !is_string($nTarifario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nTarifario, true), gettype($nTarifario)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($nTarifario) && mb_strlen((string) $nTarifario) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $nTarifario)), __LINE__);
        }
        $this->NTarifario = $nTarifario;
        
        return $this;
    }
    /**
     * Get PaisOrigen value
     * @return string|null
     */
    public function getPaisOrigen(): ?string
    {
        return $this->PaisOrigen;
    }
    /**
     * Set PaisOrigen value
     * @param string $paisOrigen
     * @return \StructType\DATOSADUANATYPE
     */
    public function setPaisOrigen(?string $paisOrigen = null): self
    {
        // validation for constraint: string
        if (!is_null($paisOrigen) && !is_string($paisOrigen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paisOrigen, true), gettype($paisOrigen)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($paisOrigen) && mb_strlen((string) $paisOrigen) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $paisOrigen)), __LINE__);
        }
        $this->PaisOrigen = $paisOrigen;
        
        return $this;
    }
}
