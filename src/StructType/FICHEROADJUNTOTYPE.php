<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FICHEROADJUNTOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FICHEROADJUNTOTYPE extends AbstractStructBase
{
    /**
     * The NombreF
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 100
     * - ref: xsd:NombreF
     * @var string|null
     */
    protected ?string $NombreF = null;
    /**
     * The Tipo_Doc
     * Meta information extracted from the WSDL
     * - ref: xsd:Tipo_Doc
     * @var string|null
     */
    protected ?string $Tipo_Doc = null;
    /**
     * The Fichero
     * Meta information extracted from the WSDL
     * - ref: xsd:Fichero
     * @var string|null
     */
    protected ?string $Fichero = null;
    /**
     * Constructor method for FICHEROADJUNTOTYPE
     * @uses FICHEROADJUNTOTYPE::setNombreF()
     * @uses FICHEROADJUNTOTYPE::setTipo_Doc()
     * @uses FICHEROADJUNTOTYPE::setFichero()
     * @param string $nombreF
     * @param string $tipo_Doc
     * @param string $fichero
     */
    public function __construct(?string $nombreF = null, ?string $tipo_Doc = null, ?string $fichero = null)
    {
        $this
            ->setNombreF($nombreF)
            ->setTipo_Doc($tipo_Doc)
            ->setFichero($fichero);
    }
    /**
     * Get NombreF value
     * @return string|null
     */
    public function getNombreF(): ?string
    {
        return $this->NombreF;
    }
    /**
     * Set NombreF value
     * @param string $nombreF
     * @return \StructType\FICHEROADJUNTOTYPE
     */
    public function setNombreF(?string $nombreF = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreF) && !is_string($nombreF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreF, true), gettype($nombreF)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($nombreF) && mb_strlen((string) $nombreF) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $nombreF)), __LINE__);
        }
        $this->NombreF = $nombreF;
        
        return $this;
    }
    /**
     * Get Tipo_Doc value
     * @return string|null
     */
    public function getTipo_Doc(): ?string
    {
        return $this->Tipo_Doc;
    }
    /**
     * Set Tipo_Doc value
     * @uses \EnumType\Tipo_Doc::valueIsValid()
     * @uses \EnumType\Tipo_Doc::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tipo_Doc
     * @return \StructType\FICHEROADJUNTOTYPE
     */
    public function setTipo_Doc(?string $tipo_Doc = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Tipo_Doc::valueIsValid($tipo_Doc)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Tipo_Doc', is_array($tipo_Doc) ? implode(', ', $tipo_Doc) : var_export($tipo_Doc, true), implode(', ', \EnumType\Tipo_Doc::getValidValues())), __LINE__);
        }
        $this->Tipo_Doc = $tipo_Doc;
        
        return $this;
    }
    /**
     * Get Fichero value
     * @return string|null
     */
    public function getFichero(): ?string
    {
        return $this->Fichero;
    }
    /**
     * Set Fichero value
     * @param string $fichero
     * @return \StructType\FICHEROADJUNTOTYPE
     */
    public function setFichero(?string $fichero = null): self
    {
        // validation for constraint: string
        if (!is_null($fichero) && !is_string($fichero)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fichero, true), gettype($fichero)), __LINE__);
        }
        $this->Fichero = $fichero;
        
        return $this;
    }
}
