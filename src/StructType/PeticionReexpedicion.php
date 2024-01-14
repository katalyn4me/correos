<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeticionReexpedicion StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PeticionReexpedicion extends AbstractStructBase
{
    /**
     * The codCertificado
     * Meta information extracted from the WSDL
     * - ref: xsd:codCertificado
     * @var string|null
     */
    protected ?string $codCertificado = null;
    /**
     * The CodProducto
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - ref: xsd:CodProducto
     * @var string|null
     */
    protected ?string $CodProducto = null;
    /**
     * The ModalidadEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ModalidadEntrega
     * @var string|null
     */
    protected ?string $ModalidadEntrega = null;
    /**
     * The DestinatarioReexp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:DestinatarioReexp
     * @var \StructType\DATOSDESTINATARIOREEXPTYPE|null
     */
    protected ?\StructType\DATOSDESTINATARIOREEXPTYPE $DestinatarioReexp = null;
    /**
     * The ValoresAnadidos
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:ValoresAnadidos
     * @var \StructType\VATYPE|null
     */
    protected ?\StructType\VATYPE $ValoresAnadidos = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for PeticionReexpedicion
     * @uses PeticionReexpedicion::setCodCertificado()
     * @uses PeticionReexpedicion::setCodProducto()
     * @uses PeticionReexpedicion::setModalidadEntrega()
     * @uses PeticionReexpedicion::setDestinatarioReexp()
     * @uses PeticionReexpedicion::setValoresAnadidos()
     * @uses PeticionReexpedicion::setIdiomaErrores()
     * @param string $codCertificado
     * @param string $codProducto
     * @param string $modalidadEntrega
     * @param \StructType\DATOSDESTINATARIOREEXPTYPE $destinatarioReexp
     * @param \StructType\VATYPE $valoresAnadidos
     * @param string $idiomaErrores
     */
    public function __construct(?string $codCertificado = null, ?string $codProducto = null, ?string $modalidadEntrega = null, ?\StructType\DATOSDESTINATARIOREEXPTYPE $destinatarioReexp = null, ?\StructType\VATYPE $valoresAnadidos = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodCertificado($codCertificado)
            ->setCodProducto($codProducto)
            ->setModalidadEntrega($modalidadEntrega)
            ->setDestinatarioReexp($destinatarioReexp)
            ->setValoresAnadidos($valoresAnadidos)
            ->setIdiomaErrores($idiomaErrores);
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
     * @return \StructType\PeticionReexpedicion
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
     * Get CodProducto value
     * @return string|null
     */
    public function getCodProducto(): ?string
    {
        return $this->CodProducto;
    }
    /**
     * Set CodProducto value
     * @param string $codProducto
     * @return \StructType\PeticionReexpedicion
     */
    public function setCodProducto(?string $codProducto = null): self
    {
        // validation for constraint: string
        if (!is_null($codProducto) && !is_string($codProducto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codProducto, true), gettype($codProducto)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($codProducto) && mb_strlen((string) $codProducto) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $codProducto)), __LINE__);
        }
        $this->CodProducto = $codProducto;
        
        return $this;
    }
    /**
     * Get ModalidadEntrega value
     * @return string|null
     */
    public function getModalidadEntrega(): ?string
    {
        return $this->ModalidadEntrega;
    }
    /**
     * Set ModalidadEntrega value
     * @uses \EnumType\ModalidadEntrega::valueIsValid()
     * @uses \EnumType\ModalidadEntrega::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modalidadEntrega
     * @return \StructType\PeticionReexpedicion
     */
    public function setModalidadEntrega(?string $modalidadEntrega = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModalidadEntrega::valueIsValid($modalidadEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModalidadEntrega', is_array($modalidadEntrega) ? implode(', ', $modalidadEntrega) : var_export($modalidadEntrega, true), implode(', ', \EnumType\ModalidadEntrega::getValidValues())), __LINE__);
        }
        $this->ModalidadEntrega = $modalidadEntrega;
        
        return $this;
    }
    /**
     * Get DestinatarioReexp value
     * @return \StructType\DATOSDESTINATARIOREEXPTYPE|null
     */
    public function getDestinatarioReexp(): ?\StructType\DATOSDESTINATARIOREEXPTYPE
    {
        return $this->DestinatarioReexp;
    }
    /**
     * Set DestinatarioReexp value
     * @param \StructType\DATOSDESTINATARIOREEXPTYPE $destinatarioReexp
     * @return \StructType\PeticionReexpedicion
     */
    public function setDestinatarioReexp(?\StructType\DATOSDESTINATARIOREEXPTYPE $destinatarioReexp = null): self
    {
        $this->DestinatarioReexp = $destinatarioReexp;
        
        return $this;
    }
    /**
     * Get ValoresAnadidos value
     * @return \StructType\VATYPE|null
     */
    public function getValoresAnadidos(): ?\StructType\VATYPE
    {
        return $this->ValoresAnadidos;
    }
    /**
     * Set ValoresAnadidos value
     * @param \StructType\VATYPE $valoresAnadidos
     * @return \StructType\PeticionReexpedicion
     */
    public function setValoresAnadidos(?\StructType\VATYPE $valoresAnadidos = null): self
    {
        $this->ValoresAnadidos = $valoresAnadidos;
        
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
     * @return \StructType\PeticionReexpedicion
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
