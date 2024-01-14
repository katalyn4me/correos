<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSENVIOCNTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSENVIOCNTYPE extends DATOSENVIOREDUCIDOTYPE
{
    /**
     * The ValoresAnadidos
     * @var \StructType\VACNTYPE|null
     */
    protected ?\StructType\VACNTYPE $ValoresAnadidos = null;
    /**
     * Constructor method for DATOSENVIOCNTYPE
     * @uses DATOSENVIOCNTYPE::setValoresAnadidos()
     * @param \StructType\VACNTYPE $valoresAnadidos
     */
    public function __construct(?\StructType\VACNTYPE $valoresAnadidos = null)
    {
        $this
            ->setValoresAnadidos($valoresAnadidos);
    }
    /**
     * Get ValoresAnadidos value
     * @return \StructType\VACNTYPE|null
     */
    public function getValoresAnadidos(): ?\StructType\VACNTYPE
    {
        return $this->ValoresAnadidos;
    }
    /**
     * Set ValoresAnadidos value
     * @param \StructType\VACNTYPE $valoresAnadidos
     * @return \StructType\DATOSENVIOCNTYPE
     */
    public function setValoresAnadidos(?\StructType\VACNTYPE $valoresAnadidos = null): self
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        
        return $this;
    }
}
