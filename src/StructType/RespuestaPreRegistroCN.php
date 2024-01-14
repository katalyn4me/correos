<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaPreRegistroCN StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaPreRegistroCN extends AbstractStructBase
{
    /**
     * The FechaRespuesta
     * Meta information extracted from the WSDL
     * - ref: xsd:FechaRespuesta
     * @var string|null
     */
    protected ?string $FechaRespuesta = null;
    /**
     * The Resultado
     * Meta information extracted from the WSDL
     * - ref: xsd:Resultado
     * @var string|null
     */
    protected ?string $Resultado = null;
    /**
     * The TotalBultos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int|null
     */
    protected ?int $TotalBultos = null;
    /**
     * The BultosSimples
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultosSimples
     * @var \StructType\BultosSimples|null
     */
    protected ?\StructType\BultosSimples $BultosSimples = null;
    /**
     * The BultosError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultosError
     * @var \StructType\BultosError|null
     */
    protected ?\StructType\BultosError $BultosError = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for RespuestaPreRegistroCN
     * @uses RespuestaPreRegistroCN::setFechaRespuesta()
     * @uses RespuestaPreRegistroCN::setResultado()
     * @uses RespuestaPreRegistroCN::setTotalBultos()
     * @uses RespuestaPreRegistroCN::setBultosSimples()
     * @uses RespuestaPreRegistroCN::setBultosError()
     * @uses RespuestaPreRegistroCN::setIdiomaErrores()
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param \StructType\BultosSimples $bultosSimples
     * @param \StructType\BultosError $bultosError
     * @param string $idiomaErrores
     */
    public function __construct(?string $fechaRespuesta = null, ?string $resultado = null, ?int $totalBultos = null, ?\StructType\BultosSimples $bultosSimples = null, ?\StructType\BultosError $bultosError = null, ?string $idiomaErrores = null)
    {
        $this
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBultosSimples($bultosSimples)
            ->setBultosError($bultosError)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get FechaRespuesta value
     * @return string|null
     */
    public function getFechaRespuesta(): ?string
    {
        return $this->FechaRespuesta;
    }
    /**
     * Set FechaRespuesta value
     * @param string $fechaRespuesta
     * @return \StructType\RespuestaPreRegistroCN
     */
    public function setFechaRespuesta(?string $fechaRespuesta = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaRespuesta) && !is_string($fechaRespuesta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaRespuesta, true), gettype($fechaRespuesta)), __LINE__);
        }
        $this->FechaRespuesta = $fechaRespuesta;
        
        return $this;
    }
    /**
     * Get Resultado value
     * @return string|null
     */
    public function getResultado(): ?string
    {
        return $this->Resultado;
    }
    /**
     * Set Resultado value
     * @uses \EnumType\Resultado::valueIsValid()
     * @uses \EnumType\Resultado::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resultado
     * @return \StructType\RespuestaPreRegistroCN
     */
    public function setResultado(?string $resultado = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\Resultado::valueIsValid($resultado)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Resultado', is_array($resultado) ? implode(', ', $resultado) : var_export($resultado, true), implode(', ', \EnumType\Resultado::getValidValues())), __LINE__);
        }
        $this->Resultado = $resultado;
        
        return $this;
    }
    /**
     * Get TotalBultos value
     * @return int|null
     */
    public function getTotalBultos(): ?int
    {
        return $this->TotalBultos;
    }
    /**
     * Set TotalBultos value
     * @param int $totalBultos
     * @return \StructType\RespuestaPreRegistroCN
     */
    public function setTotalBultos(?int $totalBultos = null): self
    {
        // validation for constraint: int
        if (!is_null($totalBultos) && !(is_int($totalBultos) || ctype_digit($totalBultos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalBultos, true), gettype($totalBultos)), __LINE__);
        }
        $this->TotalBultos = $totalBultos;
        
        return $this;
    }
    /**
     * Get BultosSimples value
     * @return \StructType\BultosSimples|null
     */
    public function getBultosSimples(): ?\StructType\BultosSimples
    {
        return $this->BultosSimples;
    }
    /**
     * Set BultosSimples value
     * @param \StructType\BultosSimples $bultosSimples
     * @return \StructType\RespuestaPreRegistroCN
     */
    public function setBultosSimples(?\StructType\BultosSimples $bultosSimples = null): self
    {
        $this->BultosSimples = $bultosSimples;
        
        return $this;
    }
    /**
     * Get BultosError value
     * @return \StructType\BultosError|null
     */
    public function getBultosError(): ?\StructType\BultosError
    {
        return $this->BultosError;
    }
    /**
     * Set BultosError value
     * @param \StructType\BultosError $bultosError
     * @return \StructType\RespuestaPreRegistroCN
     */
    public function setBultosError(?\StructType\BultosError $bultosError = null): self
    {
        $this->BultosError = $bultosError;
        
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
     * @return \StructType\RespuestaPreRegistroCN
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
