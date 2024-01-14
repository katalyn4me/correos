<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeticionAnular StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PeticionAnular extends AbstractStructBase
{
    /**
     * The Oid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 36
     * - ref: xsd:Oid
     * @var string|null
     */
    protected ?string $Oid = null;
    /**
     * The Eid
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - ref: xsd:Eid
     * @var string|null
     */
    protected ?string $Eid = null;
    /**
     * The codCertificado
     * Meta information extracted from the WSDL
     * - ref: xsd:codCertificado
     * @var string|null
     */
    protected ?string $codCertificado = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PeticionAnular
     * @uses PeticionAnular::setOid()
     * @uses PeticionAnular::setEid()
     * @uses PeticionAnular::setCodCertificado()
     * @uses PeticionAnular::setIdiomaErrores()
     * @param string $oid
     * @param string $eid
     * @param string $codCertificado
     * @param string $idiomaErrores
     */
    public function __construct(?string $oid = null, ?string $eid = null, ?string $codCertificado = null, ?string $idiomaErrores = null)
    {
        $this
            ->setOid($oid)
            ->setEid($eid)
            ->setCodCertificado($codCertificado)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get Oid value
     * @return string|null
     */
    public function getOid(): ?string
    {
        return $this->Oid;
    }
    /**
     * Set Oid value
     * @param string $oid
     * @return \StructType\PeticionAnular
     */
    public function setOid(?string $oid = null): self
    {
        // validation for constraint: string
        if (!is_null($oid) && !is_string($oid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oid, true), gettype($oid)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($oid) && mb_strlen((string) $oid) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $oid)), __LINE__);
        }
        $this->Oid = $oid;
        
        return $this;
    }
    /**
     * Get Eid value
     * @return string|null
     */
    public function getEid(): ?string
    {
        return $this->Eid;
    }
    /**
     * Set Eid value
     * @param string $eid
     * @return \StructType\PeticionAnular
     */
    public function setEid(?string $eid = null): self
    {
        // validation for constraint: string
        if (!is_null($eid) && !is_string($eid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eid, true), gettype($eid)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($eid) && mb_strlen((string) $eid) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $eid)), __LINE__);
        }
        $this->Eid = $eid;
        
        return $this;
    }
    /**
     * Get codCertificado value
     * @return string|null
     */
    public function getCodCertificado(): ?string
    {
        return $this->codCertificado;
    }
    /**
     * Set codCertificado value
     * @param string $codCertificado
     * @return \StructType\PeticionAnular
     */
    public function setCodCertificado(?string $codCertificado = null): self
    {
        // validation for constraint: string
        if (!is_null($codCertificado) && !is_string($codCertificado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCertificado, true), gettype($codCertificado)), __LINE__);
        }
        $this->codCertificado = $codCertificado;
        
        return $this;
    }
    /**
     * Get IdiomaErrores value
     * @return string|null
     */
    public function getIdiomaErrores(): ?string
    {
        return $this->IdiomaErrores;
    }
    /**
     * Set IdiomaErrores value
     * @param string $idiomaErrores
     * @return \StructType\PeticionAnular
     */
    public function setIdiomaErrores(?string $idiomaErrores = null): self
    {
        // validation for constraint: string
        if (!is_null($idiomaErrores) && !is_string($idiomaErrores)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idiomaErrores, true), gettype($idiomaErrores)), __LINE__);
        }
        $this->IdiomaErrores = $idiomaErrores;
        
        return $this;
    }
}
