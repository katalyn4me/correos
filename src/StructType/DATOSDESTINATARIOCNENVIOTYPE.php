<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DATOSDESTINATARIOCNENVIOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DATOSDESTINATARIOCNENVIOTYPE extends DATOSDESTINATARIOCNTYPE
{
    /**
     * The Envio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DATOSENVIOCNCODENVIOTYPE|null
     */
    protected ?\StructType\DATOSENVIOCNCODENVIOTYPE $Envio = null;
    /**
     * Constructor method for DATOSDESTINATARIOCNENVIOTYPE
     * @uses DATOSDESTINATARIOCNENVIOTYPE::setEnvio()
     * @param \StructType\DATOSENVIOCNCODENVIOTYPE $envio
     */
    public function __construct(?\StructType\DATOSENVIOCNCODENVIOTYPE $envio = null)
    {
        $this
            ->setEnvio($envio);
    }
    /**
     * Get Envio value
     * @return \StructType\DATOSENVIOCNCODENVIOTYPE|null
     */
    public function getEnvio(): ?\StructType\DATOSENVIOCNCODENVIOTYPE
    {
        return $this->Envio;
    }
    /**
     * Set Envio value
     * @param \StructType\DATOSENVIOCNCODENVIOTYPE $envio
     * @return \StructType\DATOSDESTINATARIOCNENVIOTYPE
     */
    public function setEnvio(?\StructType\DATOSENVIOCNCODENVIOTYPE $envio = null): self
    {
        $this->Envio = $envio;
        
        return $this;
    }
}
