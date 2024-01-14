<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PRUEBAENTREGATYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PRUEBAENTREGATYPE extends PRUEBAENTREGAREDUCIDOTYPE
{
    /**
     * The ReferenciaeAR
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 55
     * - minOccurs: 0
     * - ref: xsd:ReferenciaeAR
     * @var string|null
     */
    protected ?string $ReferenciaeAR = null;
    /**
     * The InfRemitenteEAr
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 350
     * - minOccurs: 0
     * - ref: xsd:InfRemitenteEAr
     * @var string|null
     */
    protected ?string $InfRemitenteEAr = null;
    /**
     * Constructor method for PRUEBAENTREGATYPE
     * @uses PRUEBAENTREGATYPE::setReferenciaeAR()
     * @uses PRUEBAENTREGATYPE::setInfRemitenteEAr()
     * @param string $referenciaeAR
     * @param string $infRemitenteEAr
     */
    public function __construct(?string $referenciaeAR = null, ?string $infRemitenteEAr = null)
    {
        $this
            ->setReferenciaeAR($referenciaeAR)
            ->setInfRemitenteEAr($infRemitenteEAr);
    }
    /**
     * Get ReferenciaeAR value
     * @return string|null
     */
    public function getReferenciaeAR(): ?string
    {
        return $this->ReferenciaeAR;
    }
    /**
     * Set ReferenciaeAR value
     * @param string $referenciaeAR
     * @return \StructType\PRUEBAENTREGATYPE
     */
    public function setReferenciaeAR(?string $referenciaeAR = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaeAR) && !is_string($referenciaeAR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaeAR, true), gettype($referenciaeAR)), __LINE__);
        }
        // validation for constraint: maxLength(55)
        if (!is_null($referenciaeAR) && mb_strlen((string) $referenciaeAR) > 55) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 55', mb_strlen((string) $referenciaeAR)), __LINE__);
        }
        $this->ReferenciaeAR = $referenciaeAR;
        
        return $this;
    }
    /**
     * Get InfRemitenteEAr value
     * @return string|null
     */
    public function getInfRemitenteEAr(): ?string
    {
        return $this->InfRemitenteEAr;
    }
    /**
     * Set InfRemitenteEAr value
     * @param string $infRemitenteEAr
     * @return \StructType\PRUEBAENTREGATYPE
     */
    public function setInfRemitenteEAr(?string $infRemitenteEAr = null): self
    {
        // validation for constraint: string
        if (!is_null($infRemitenteEAr) && !is_string($infRemitenteEAr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infRemitenteEAr, true), gettype($infRemitenteEAr)), __LINE__);
        }
        // validation for constraint: maxLength(350)
        if (!is_null($infRemitenteEAr) && mb_strlen((string) $infRemitenteEAr) > 350) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 350', mb_strlen((string) $infRemitenteEAr)), __LINE__);
        }
        $this->InfRemitenteEAr = $infRemitenteEAr;
        
        return $this;
    }
}
