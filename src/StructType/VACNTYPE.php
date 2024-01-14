<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VACNTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VACNTYPE extends AbstractStructBase
{
    /**
     * The Reembolso
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:Reembolso
     * @var \StructType\REEMBOLSOTYPE|null
     */
    protected ?\StructType\REEMBOLSOTYPE $Reembolso = null;
    /**
     * The PruebaEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PRUEBAENTREGAREDUCIDOTYPE|null
     */
    protected ?\StructType\PRUEBAENTREGAREDUCIDOTYPE $PruebaEntrega = null;
    /**
     * Constructor method for VACNTYPE
     * @uses VACNTYPE::setReembolso()
     * @uses VACNTYPE::setPruebaEntrega()
     * @param \StructType\REEMBOLSOTYPE $reembolso
     * @param \StructType\PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega
     */
    public function __construct(?\StructType\REEMBOLSOTYPE $reembolso = null, ?\StructType\PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega = null)
    {
        $this
            ->setReembolso($reembolso)
            ->setPruebaEntrega($pruebaEntrega);
    }
    /**
     * Get Reembolso value
     * @return \StructType\REEMBOLSOTYPE|null
     */
    public function getReembolso(): ?\StructType\REEMBOLSOTYPE
    {
        return $this->Reembolso;
    }
    /**
     * Set Reembolso value
     * @param \StructType\REEMBOLSOTYPE $reembolso
     * @return \StructType\VACNTYPE
     */
    public function setReembolso(?\StructType\REEMBOLSOTYPE $reembolso = null): self
    {
        $this->Reembolso = $reembolso;
        
        return $this;
    }
    /**
     * Get PruebaEntrega value
     * @return \StructType\PRUEBAENTREGAREDUCIDOTYPE|null
     */
    public function getPruebaEntrega(): ?\StructType\PRUEBAENTREGAREDUCIDOTYPE
    {
        return $this->PruebaEntrega;
    }
    /**
     * Set PruebaEntrega value
     * @param \StructType\PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega
     * @return \StructType\VACNTYPE
     */
    public function setPruebaEntrega(?\StructType\PRUEBAENTREGAREDUCIDOTYPE $pruebaEntrega = null): self
    {
        $this->PruebaEntrega = $pruebaEntrega;
        
        return $this;
    }
}
