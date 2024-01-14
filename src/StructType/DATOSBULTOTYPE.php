<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSBULTOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSBULTOTYPE extends AbstractStructBase
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
     * The CodEnvio
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 23
     * - ref: xsd:CodEnvio
     * @var string|null
     */
    protected ?string $CodEnvio = null;
    /**
     * The CodManifiesto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 24
     * - ref: xsd:CodManifiesto
     * @var string|null
     */
    protected ?string $CodManifiesto = null;
    /**
     * The Etiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:Etiqueta
     * @var \StructType\ETIQUETATYPE|null
     */
    protected ?\StructType\ETIQUETATYPE $Etiqueta = null;
    /**
     * The CodigoIpc
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 35
     * - minOccurs: 0
     * - ref: xsd:CodigoIpc
     * @var string|null
     */
    protected ?string $CodigoIpc = null;
    /**
     * Constructor method for DATOSBULTOTYPE
     * @uses DATOSBULTOTYPE::setNumBulto()
     * @uses DATOSBULTOTYPE::setCodEnvio()
     * @uses DATOSBULTOTYPE::setCodManifiesto()
     * @uses DATOSBULTOTYPE::setEtiqueta()
     * @uses DATOSBULTOTYPE::setCodigoIpc()
     * @param int $numBulto
     * @param string $codEnvio
     * @param string $codManifiesto
     * @param \StructType\ETIQUETATYPE $etiqueta
     * @param string $codigoIpc
     */
    public function __construct(?int $numBulto = null, ?string $codEnvio = null, ?string $codManifiesto = null, ?\StructType\ETIQUETATYPE $etiqueta = null, ?string $codigoIpc = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setCodEnvio($codEnvio)
            ->setCodManifiesto($codManifiesto)
            ->setEtiqueta($etiqueta)
            ->setCodigoIpc($codigoIpc);
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
     * @return \StructType\DATOSBULTOTYPE
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
     * Get CodEnvio value
     * @return string|null
     */
    public function getCodEnvio(): ?string
    {
        return $this->CodEnvio;
    }
    /**
     * Set CodEnvio value
     * @param string $codEnvio
     * @return \StructType\DATOSBULTOTYPE
     */
    public function setCodEnvio(?string $codEnvio = null): self
    {
        // validation for constraint: string
        if (!is_null($codEnvio) && !is_string($codEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEnvio, true), gettype($codEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(23)
        if (!is_null($codEnvio) && mb_strlen((string) $codEnvio) > 23) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 23', mb_strlen((string) $codEnvio)), __LINE__);
        }
        $this->CodEnvio = $codEnvio;
        
        return $this;
    }
    /**
     * Get CodManifiesto value
     * @return string|null
     */
    public function getCodManifiesto(): ?string
    {
        return $this->CodManifiesto;
    }
    /**
     * Set CodManifiesto value
     * @param string $codManifiesto
     * @return \StructType\DATOSBULTOTYPE
     */
    public function setCodManifiesto(?string $codManifiesto = null): self
    {
        // validation for constraint: string
        if (!is_null($codManifiesto) && !is_string($codManifiesto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codManifiesto, true), gettype($codManifiesto)), __LINE__);
        }
        // validation for constraint: maxLength(24)
        if (!is_null($codManifiesto) && mb_strlen((string) $codManifiesto) > 24) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 24', mb_strlen((string) $codManifiesto)), __LINE__);
        }
        $this->CodManifiesto = $codManifiesto;
        
        return $this;
    }
    /**
     * Get Etiqueta value
     * @return \StructType\ETIQUETATYPE|null
     */
    public function getEtiqueta(): ?\StructType\ETIQUETATYPE
    {
        return $this->Etiqueta;
    }
    /**
     * Set Etiqueta value
     * @param \StructType\ETIQUETATYPE $etiqueta
     * @return \StructType\DATOSBULTOTYPE
     */
    public function setEtiqueta(?\StructType\ETIQUETATYPE $etiqueta = null): self
    {
        $this->Etiqueta = $etiqueta;
        
        return $this;
    }
    /**
     * Get CodigoIpc value
     * @return string|null
     */
    public function getCodigoIpc(): ?string
    {
        return $this->CodigoIpc;
    }
    /**
     * Set CodigoIpc value
     * @param string $codigoIpc
     * @return \StructType\DATOSBULTOTYPE
     */
    public function setCodigoIpc(?string $codigoIpc = null): self
    {
        // validation for constraint: string
        if (!is_null($codigoIpc) && !is_string($codigoIpc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codigoIpc, true), gettype($codigoIpc)), __LINE__);
        }
        // validation for constraint: maxLength(35)
        if (!is_null($codigoIpc) && mb_strlen((string) $codigoIpc) > 35) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 35', mb_strlen((string) $codigoIpc)), __LINE__);
        }
        $this->CodigoIpc = $codigoIpc;
        
        return $this;
    }
}
