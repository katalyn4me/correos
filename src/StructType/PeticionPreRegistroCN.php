<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeticionPreRegistroCN StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PeticionPreRegistroCN extends AbstractStructBase
{
    /**
     * The NumContrato
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumContrato
     * @var string|null
     */
    protected ?string $NumContrato = null;
    /**
     * The CodEtiquetador
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - ref: xsd:CodEtiquetador
     * @var string|null
     */
    protected ?string $CodEtiquetador = null;
    /**
     * The FechaOperacion
     * Meta information extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string|null
     */
    protected ?string $FechaOperacion = null;
    /**
     * The NumCliente
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minOccurs: 0
     * - ref: xsd:NumCliente
     * @var string|null
     */
    protected ?string $NumCliente = null;
    /**
     * The Care
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 6
     * - ref: xsd:Care
     * @var string|null
     */
    protected ?string $Care = null;
    /**
     * The TotalBultos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:TotalBultos
     * @var int|null
     */
    protected ?int $TotalBultos = null;
    /**
     * The Remitente
     * @var \StructType\DATOSREMITENTECNTYPE|null
     */
    protected ?\StructType\DATOSREMITENTECNTYPE $Remitente = null;
    /**
     * The Destinatarios
     * Meta information extracted from the WSDL
     * - ref: xsd:Destinatarios
     * @var \StructType\Destinatarios|null
     */
    protected ?\StructType\Destinatarios $Destinatarios = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PeticionPreRegistroCN
     * @uses PeticionPreRegistroCN::setNumContrato()
     * @uses PeticionPreRegistroCN::setCodEtiquetador()
     * @uses PeticionPreRegistroCN::setFechaOperacion()
     * @uses PeticionPreRegistroCN::setNumCliente()
     * @uses PeticionPreRegistroCN::setCare()
     * @uses PeticionPreRegistroCN::setTotalBultos()
     * @uses PeticionPreRegistroCN::setRemitente()
     * @uses PeticionPreRegistroCN::setDestinatarios()
     * @uses PeticionPreRegistroCN::setIdiomaErrores()
     * @param string $numContrato
     * @param string $codEtiquetador
     * @param string $fechaOperacion
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param \StructType\DATOSREMITENTECNTYPE $remitente
     * @param \StructType\Destinatarios $destinatarios
     * @param string $idiomaErrores
     */
    public function __construct(?string $numContrato = null, ?string $codEtiquetador = null, ?string $fechaOperacion = null, ?string $numCliente = null, ?string $care = null, ?int $totalBultos = null, ?\StructType\DATOSREMITENTECNTYPE $remitente = null, ?\StructType\Destinatarios $destinatarios = null, ?string $idiomaErrores = null)
    {
        $this
            ->setNumContrato($numContrato)
            ->setCodEtiquetador($codEtiquetador)
            ->setFechaOperacion($fechaOperacion)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setRemitente($remitente)
            ->setDestinatarios($destinatarios)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get NumContrato value
     * @return string|null
     */
    public function getNumContrato(): ?string
    {
        return $this->NumContrato;
    }
    /**
     * Set NumContrato value
     * @param string $numContrato
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setNumContrato(?string $numContrato = null): self
    {
        // validation for constraint: string
        if (!is_null($numContrato) && !is_string($numContrato)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numContrato, true), gettype($numContrato)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numContrato) && mb_strlen((string) $numContrato) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numContrato)), __LINE__);
        }
        $this->NumContrato = $numContrato;
        
        return $this;
    }
    /**
     * Get CodEtiquetador value
     * @return string|null
     */
    public function getCodEtiquetador(): ?string
    {
        return $this->CodEtiquetador;
    }
    /**
     * Set CodEtiquetador value
     * @param string $codEtiquetador
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setCodEtiquetador(?string $codEtiquetador = null): self
    {
        // validation for constraint: string
        if (!is_null($codEtiquetador) && !is_string($codEtiquetador)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codEtiquetador, true), gettype($codEtiquetador)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($codEtiquetador) && mb_strlen((string) $codEtiquetador) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $codEtiquetador)), __LINE__);
        }
        $this->CodEtiquetador = $codEtiquetador;
        
        return $this;
    }
    /**
     * Get FechaOperacion value
     * @return string|null
     */
    public function getFechaOperacion(): ?string
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param string $fechaOperacion
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setFechaOperacion(?string $fechaOperacion = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaOperacion) && !is_string($fechaOperacion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOperacion, true), gettype($fechaOperacion)), __LINE__);
        }
        $this->FechaOperacion = $fechaOperacion;
        
        return $this;
    }
    /**
     * Get NumCliente value
     * @return string|null
     */
    public function getNumCliente(): ?string
    {
        return $this->NumCliente;
    }
    /**
     * Set NumCliente value
     * @param string $numCliente
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setNumCliente(?string $numCliente = null): self
    {
        // validation for constraint: string
        if (!is_null($numCliente) && !is_string($numCliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numCliente, true), gettype($numCliente)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numCliente) && mb_strlen((string) $numCliente) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numCliente)), __LINE__);
        }
        $this->NumCliente = $numCliente;
        
        return $this;
    }
    /**
     * Get Care value
     * @return string|null
     */
    public function getCare(): ?string
    {
        return $this->Care;
    }
    /**
     * Set Care value
     * @param string $care
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setCare(?string $care = null): self
    {
        // validation for constraint: string
        if (!is_null($care) && !is_string($care)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($care, true), gettype($care)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($care) && mb_strlen((string) $care) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $care)), __LINE__);
        }
        $this->Care = $care;
        
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
     * @return \StructType\PeticionPreRegistroCN
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
     * Get Remitente value
     * @return \StructType\DATOSREMITENTECNTYPE|null
     */
    public function getRemitente(): ?\StructType\DATOSREMITENTECNTYPE
    {
        return $this->Remitente;
    }
    /**
     * Set Remitente value
     * @param \StructType\DATOSREMITENTECNTYPE $remitente
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setRemitente(?\StructType\DATOSREMITENTECNTYPE $remitente = null): self
    {
        $this->Remitente = $remitente;
        
        return $this;
    }
    /**
     * Get Destinatarios value
     * @return \StructType\Destinatarios|null
     */
    public function getDestinatarios(): ?\StructType\Destinatarios
    {
        return $this->Destinatarios;
    }
    /**
     * Set Destinatarios value
     * @param \StructType\Destinatarios $destinatarios
     * @return \StructType\PeticionPreRegistroCN
     */
    public function setDestinatarios(?\StructType\Destinatarios $destinatarios = null): self
    {
        $this->Destinatarios = $destinatarios;
        
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
     * @return \StructType\PeticionPreRegistroCN
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
