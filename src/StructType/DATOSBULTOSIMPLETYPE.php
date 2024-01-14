<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSBULTOSIMPLETYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSBULTOSIMPLETYPE extends AbstractStructBase
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
     * The DestinatarioEtiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:DestinatarioEtiqueta
     * @var \StructType\DATOSDESTINATARIOETIQUETATYPE|null
     */
    protected ?\StructType\DATOSDESTINATARIOETIQUETATYPE $DestinatarioEtiqueta = null;
    /**
     * Constructor method for DATOSBULTOSIMPLETYPE
     * @uses DATOSBULTOSIMPLETYPE::setNumBulto()
     * @uses DATOSBULTOSIMPLETYPE::setCodEnvio()
     * @uses DATOSBULTOSIMPLETYPE::setDestinatarioEtiqueta()
     * @param int $numBulto
     * @param string $codEnvio
     * @param \StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     */
    public function __construct(?int $numBulto = null, ?string $codEnvio = null, ?\StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null)
    {
        $this
            ->setNumBulto($numBulto)
            ->setCodEnvio($codEnvio)
            ->setDestinatarioEtiqueta($destinatarioEtiqueta);
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
     * @return \StructType\DATOSBULTOSIMPLETYPE
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
     * @return \StructType\DATOSBULTOSIMPLETYPE
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
     * Get DestinatarioEtiqueta value
     * @return \StructType\DATOSDESTINATARIOETIQUETATYPE|null
     */
    public function getDestinatarioEtiqueta(): ?\StructType\DATOSDESTINATARIOETIQUETATYPE
    {
        return $this->DestinatarioEtiqueta;
    }
    /**
     * Set DestinatarioEtiqueta value
     * @param \StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta
     * @return \StructType\DATOSBULTOSIMPLETYPE
     */
    public function setDestinatarioEtiqueta(?\StructType\DATOSDESTINATARIOETIQUETATYPE $destinatarioEtiqueta = null): self
    {
        $this->DestinatarioEtiqueta = $destinatarioEtiqueta;
        
        return $this;
    }
}
