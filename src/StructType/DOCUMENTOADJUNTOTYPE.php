<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOCUMENTOADJUNTOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DOCUMENTOADJUNTOTYPE extends AbstractStructBase
{
    /**
     * The TipoDocumentoAdjunto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TipoDocumentoAdjunto = null;
    /**
     * The IdDocumentoAdjunto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdDocumentoAdjunto = null;
    /**
     * The NombreDocumentoAdjunto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NombreDocumentoAdjunto = null;
    /**
     * Constructor method for DOCUMENTOADJUNTOTYPE
     * @uses DOCUMENTOADJUNTOTYPE::setTipoDocumentoAdjunto()
     * @uses DOCUMENTOADJUNTOTYPE::setIdDocumentoAdjunto()
     * @uses DOCUMENTOADJUNTOTYPE::setNombreDocumentoAdjunto()
     * @param string $tipoDocumentoAdjunto
     * @param string $idDocumentoAdjunto
     * @param string $nombreDocumentoAdjunto
     */
    public function __construct(?string $tipoDocumentoAdjunto = null, ?string $idDocumentoAdjunto = null, ?string $nombreDocumentoAdjunto = null)
    {
        $this
            ->setTipoDocumentoAdjunto($tipoDocumentoAdjunto)
            ->setIdDocumentoAdjunto($idDocumentoAdjunto)
            ->setNombreDocumentoAdjunto($nombreDocumentoAdjunto);
    }
    /**
     * Get TipoDocumentoAdjunto value
     * @return string|null
     */
    public function getTipoDocumentoAdjunto(): ?string
    {
        return $this->TipoDocumentoAdjunto;
    }
    /**
     * Set TipoDocumentoAdjunto value
     * @param string $tipoDocumentoAdjunto
     * @return \StructType\DOCUMENTOADJUNTOTYPE
     */
    public function setTipoDocumentoAdjunto(?string $tipoDocumentoAdjunto = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoDocumentoAdjunto) && !is_string($tipoDocumentoAdjunto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoDocumentoAdjunto, true), gettype($tipoDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($tipoDocumentoAdjunto) && mb_strlen((string) $tipoDocumentoAdjunto) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $tipoDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($tipoDocumentoAdjunto) && mb_strlen((string) $tipoDocumentoAdjunto) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $tipoDocumentoAdjunto)), __LINE__);
        }
        $this->TipoDocumentoAdjunto = $tipoDocumentoAdjunto;
        
        return $this;
    }
    /**
     * Get IdDocumentoAdjunto value
     * @return string|null
     */
    public function getIdDocumentoAdjunto(): ?string
    {
        return $this->IdDocumentoAdjunto;
    }
    /**
     * Set IdDocumentoAdjunto value
     * @param string $idDocumentoAdjunto
     * @return \StructType\DOCUMENTOADJUNTOTYPE
     */
    public function setIdDocumentoAdjunto(?string $idDocumentoAdjunto = null): self
    {
        // validation for constraint: string
        if (!is_null($idDocumentoAdjunto) && !is_string($idDocumentoAdjunto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idDocumentoAdjunto, true), gettype($idDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($idDocumentoAdjunto) && mb_strlen((string) $idDocumentoAdjunto) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $idDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($idDocumentoAdjunto) && mb_strlen((string) $idDocumentoAdjunto) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $idDocumentoAdjunto)), __LINE__);
        }
        $this->IdDocumentoAdjunto = $idDocumentoAdjunto;
        
        return $this;
    }
    /**
     * Get NombreDocumentoAdjunto value
     * @return string|null
     */
    public function getNombreDocumentoAdjunto(): ?string
    {
        return $this->NombreDocumentoAdjunto;
    }
    /**
     * Set NombreDocumentoAdjunto value
     * @param string $nombreDocumentoAdjunto
     * @return \StructType\DOCUMENTOADJUNTOTYPE
     */
    public function setNombreDocumentoAdjunto(?string $nombreDocumentoAdjunto = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreDocumentoAdjunto) && !is_string($nombreDocumentoAdjunto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreDocumentoAdjunto, true), gettype($nombreDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($nombreDocumentoAdjunto) && mb_strlen((string) $nombreDocumentoAdjunto) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $nombreDocumentoAdjunto)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nombreDocumentoAdjunto) && mb_strlen((string) $nombreDocumentoAdjunto) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nombreDocumentoAdjunto)), __LINE__);
        }
        $this->NombreDocumentoAdjunto = $nombreDocumentoAdjunto;
        
        return $this;
    }
}
