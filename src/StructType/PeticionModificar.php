<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeticionModificar StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PeticionModificar extends AbstractStructBase
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
     * The FechaOperacion
     * Meta information extracted from the WSDL
     * - ref: xsd:FechaOperacion
     * @var string|null
     */
    protected ?string $FechaOperacion = null;
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
     * The ModDevEtiqueta
     * Meta information extracted from the WSDL
     * - ref: xsd:ModDevEtiqueta
     * @var string|null
     */
    protected ?string $ModDevEtiqueta = null;
    /**
     * The RemitenteModif
     * Meta information extracted from the WSDL
     * - ref: xsd:RemitenteModif
     * @var \StructType\DATOSREMITENTEMODIFTYPE|null
     */
    protected ?\StructType\DATOSREMITENTEMODIFTYPE $RemitenteModif = null;
    /**
     * The DestinatarioModif
     * Meta information extracted from the WSDL
     * - ref: xsd:DestinatarioModif
     * @var \StructType\DATOSDESTINATARIOMODIFTYPE|null
     */
    protected ?\StructType\DATOSDESTINATARIOMODIFTYPE $DestinatarioModif = null;
    /**
     * The EnvioModif
     * Meta information extracted from the WSDL
     * - ref: xsd:EnvioModif
     * @var \StructType\DATOSENVIOMODIFTYPE|null
     */
    protected ?\StructType\DATOSENVIOMODIFTYPE $EnvioModif = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PeticionModificar
     * @uses PeticionModificar::setCodCertificado()
     * @uses PeticionModificar::setFechaOperacion()
     * @uses PeticionModificar::setCodEtiquetador()
     * @uses PeticionModificar::setNumContrato()
     * @uses PeticionModificar::setNumCliente()
     * @uses PeticionModificar::setCare()
     * @uses PeticionModificar::setTotalBultos()
     * @uses PeticionModificar::setModDevEtiqueta()
     * @uses PeticionModificar::setRemitenteModif()
     * @uses PeticionModificar::setDestinatarioModif()
     * @uses PeticionModificar::setEnvioModif()
     * @uses PeticionModificar::setIdiomaErrores()
     * @param string $codCertificado
     * @param string $fechaOperacion
     * @param string $codEtiquetador
     * @param string $numContrato
     * @param string $numCliente
     * @param string $care
     * @param int $totalBultos
     * @param string $modDevEtiqueta
     * @param \StructType\DATOSREMITENTEMODIFTYPE $remitenteModif
     * @param \StructType\DATOSDESTINATARIOMODIFTYPE $destinatarioModif
     * @param \StructType\DATOSENVIOMODIFTYPE $envioModif
     * @param string $idiomaErrores
     */
    public function __construct(string $codCertificado, ?string $fechaOperacion = null, ?string $codEtiquetador = null, ?string $numContrato = null, ?string $numCliente = null, ?string $care = null, ?int $totalBultos = null, ?string $modDevEtiqueta = null, ?\StructType\DATOSREMITENTEMODIFTYPE $remitenteModif = null, ?\StructType\DATOSDESTINATARIOMODIFTYPE $destinatarioModif = null, ?\StructType\DATOSENVIOMODIFTYPE $envioModif = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setFechaOperacion($fechaOperacion)
            ->setCodEtiquetador($codEtiquetador)
            ->setNumContrato($numContrato)
            ->setNumCliente($numCliente)
            ->setCare($care)
            ->setTotalBultos($totalBultos)
            ->setModDevEtiqueta($modDevEtiqueta)
            ->setRemitenteModif($remitenteModif)
            ->setDestinatarioModif($destinatarioModif)
            ->setEnvioModif($envioModif)
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
     * @return \StructType\PeticionModificar
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
     * @return \StructType\PeticionModificar
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
     * @return \StructType\PeticionModificar
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
     * @return \StructType\PeticionModificar
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
     * @return \StructType\PeticionModificar
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
     * @return \StructType\PeticionModificar
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
     * @return \StructType\PeticionModificar
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
     * Get ModDevEtiqueta value
     * @return string|null
     */
    public function getModDevEtiqueta(): ?string
    {
        return $this->ModDevEtiqueta;
    }
    /**
     * Set ModDevEtiqueta value
     * @uses \EnumType\ModDevEtiqueta::valueIsValid()
     * @uses \EnumType\ModDevEtiqueta::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modDevEtiqueta
     * @return \StructType\PeticionModificar
     */
    public function setModDevEtiqueta(?string $modDevEtiqueta = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModDevEtiqueta::valueIsValid($modDevEtiqueta)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModDevEtiqueta', is_array($modDevEtiqueta) ? implode(', ', $modDevEtiqueta) : var_export($modDevEtiqueta, true), implode(', ', \EnumType\ModDevEtiqueta::getValidValues())), __LINE__);
        }
        $this->ModDevEtiqueta = $modDevEtiqueta;
        
        return $this;
    }
    /**
     * Get RemitenteModif value
     * @return \StructType\DATOSREMITENTEMODIFTYPE|null
     */
    public function getRemitenteModif(): ?\StructType\DATOSREMITENTEMODIFTYPE
    {
        return $this->RemitenteModif;
    }
    /**
     * Set RemitenteModif value
     * @param \StructType\DATOSREMITENTEMODIFTYPE $remitenteModif
     * @return \StructType\PeticionModificar
     */
    public function setRemitenteModif(?\StructType\DATOSREMITENTEMODIFTYPE $remitenteModif = null): self
    {
        $this->RemitenteModif = $remitenteModif;
        
        return $this;
    }
    /**
     * Get DestinatarioModif value
     * @return \StructType\DATOSDESTINATARIOMODIFTYPE|null
     */
    public function getDestinatarioModif(): ?\StructType\DATOSDESTINATARIOMODIFTYPE
    {
        return $this->DestinatarioModif;
    }
    /**
     * Set DestinatarioModif value
     * @param \StructType\DATOSDESTINATARIOMODIFTYPE $destinatarioModif
     * @return \StructType\PeticionModificar
     */
    public function setDestinatarioModif(?\StructType\DATOSDESTINATARIOMODIFTYPE $destinatarioModif = null): self
    {
        $this->DestinatarioModif = $destinatarioModif;
        
        return $this;
    }
    /**
     * Get EnvioModif value
     * @return \StructType\DATOSENVIOMODIFTYPE|null
     */
    public function getEnvioModif(): ?\StructType\DATOSENVIOMODIFTYPE
    {
        return $this->EnvioModif;
    }
    /**
     * Set EnvioModif value
     * @param \StructType\DATOSENVIOMODIFTYPE $envioModif
     * @return \StructType\PeticionModificar
     */
    public function setEnvioModif(?\StructType\DATOSENVIOMODIFTYPE $envioModif = null): self
    {
        $this->EnvioModif = $envioModif;
        
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
     * @return \StructType\PeticionModificar
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
