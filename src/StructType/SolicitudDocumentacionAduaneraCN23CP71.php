<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SolicitudDocumentacionAduaneraCN23CP71 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SolicitudDocumentacionAduaneraCN23CP71 extends AbstractStructBase
{
    /**
     * The codCertificado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: xsd:codCertificado
     * @var string
     */
    protected string $codCertificado;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for SolicitudDocumentacionAduaneraCN23CP71
     * @uses SolicitudDocumentacionAduaneraCN23CP71::setCodCertificado()
     * @uses SolicitudDocumentacionAduaneraCN23CP71::setIdiomaErrores()
     * @param string $codCertificado
     * @param string $idiomaErrores
     */
    public function __construct(string $codCertificado, ?string $idiomaErrores = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get codCertificado value
     * @return string
     */
    public function getCodCertificado(): string
    {
        return $this->codCertificado;
    }
    /**
     * Set codCertificado value
     * @param string $codCertificado
     * @return \StructType\SolicitudDocumentacionAduaneraCN23CP71
     */
    public function setCodCertificado(string $codCertificado): self
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
     * @return \StructType\SolicitudDocumentacionAduaneraCN23CP71
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
