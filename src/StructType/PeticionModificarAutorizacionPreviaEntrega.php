<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeticionModificarAutorizacionPreviaEntrega StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PeticionModificarAutorizacionPreviaEntrega extends AbstractStructBase
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
     * The Accion
     * Meta information extracted from the WSDL
     * - ref: xsd:Accion
     * @var string|null
     */
    protected ?string $Accion = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PeticionModificarAutorizacionPreviaEntrega
     * @uses PeticionModificarAutorizacionPreviaEntrega::setCodCertificado()
     * @uses PeticionModificarAutorizacionPreviaEntrega::setAccion()
     * @uses PeticionModificarAutorizacionPreviaEntrega::setIdiomaErrores()
     * @param string $codCertificado
     * @param string $accion
     * @param string $idiomaErrores
     */
    public function __construct(string $codCertificado, ?string $accion = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setAccion($accion)
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
     * @return \StructType\PeticionModificarAutorizacionPreviaEntrega
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
     * Get Accion value
     * @return string|null
     */
    public function getAccion(): ?string
    {
        return $this->Accion;
    }
    /**
     * Set Accion value
     * @uses \EnumType\Accion::valueIsValid()
     * @uses \EnumType\Accion::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accion
     * @return \StructType\PeticionModificarAutorizacionPreviaEntrega
     */
    public function setAccion(?string $accion = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Accion::valueIsValid($accion)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Accion', is_array($accion) ? implode(', ', $accion) : var_export($accion, true), implode(', ', \EnumType\Accion::getValidValues())), __LINE__);
        }
        $this->Accion = $accion;
        
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
     * @return \StructType\PeticionModificarAutorizacionPreviaEntrega
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
