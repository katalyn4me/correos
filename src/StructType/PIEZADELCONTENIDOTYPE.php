<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PIEZADELCONTENIDOTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PIEZADELCONTENIDOTYPE extends AbstractStructBase
{
    /**
     * The NumeroPieza
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 99
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumeroPieza = null;
    /**
     * The NumeroDeUnidades
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 999999
     * - minInclusive: 0
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $NumeroDeUnidades = null;
    /**
     * The Descripcion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Descripcion = null;
    /**
     * The ValorDeclarado
     * Meta information extracted from the WSDL
     * - base: xs:decimal
     * - fractionDigits: 2
     * - maxInclusive: 99999999.99
     * - minInclusive: 0.00
     * - minOccurs: 0
     * - totalDigits: 10
     * @var float|null
     */
    protected ?float $ValorDeclarado = null;
    /**
     * The PesoNeto
     * Meta information extracted from the WSDL
     * - base: xs:decimal
     * - fractionDigits: 2
     * - maxInclusive: 999.99
     * - minInclusive: 0.00
     * - minOccurs: 0
     * - totalDigits: 5
     * @var float|null
     */
    protected ?float $PesoNeto = null;
    /**
     * The PartidaArancelaria
     * Meta information extracted from the WSDL
     * - base: xs:long
     * - maxInclusive: 99999999999
     * - minInclusive: 100000
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PartidaArancelaria = null;
    /**
     * The ReferenciaArticulo
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReferenciaArticulo = null;
    /**
     * The UbicacionOriginal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UbicacionOriginal = null;
    /**
     * The IdentificadorEnvio
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdentificadorEnvio = null;
    /**
     * The IdentificadorFactura
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $IdentificadorFactura = null;
    /**
     * Constructor method for PIEZADELCONTENIDOTYPE
     * @uses PIEZADELCONTENIDOTYPE::setNumeroPieza()
     * @uses PIEZADELCONTENIDOTYPE::setNumeroDeUnidades()
     * @uses PIEZADELCONTENIDOTYPE::setDescripcion()
     * @uses PIEZADELCONTENIDOTYPE::setValorDeclarado()
     * @uses PIEZADELCONTENIDOTYPE::setPesoNeto()
     * @uses PIEZADELCONTENIDOTYPE::setPartidaArancelaria()
     * @uses PIEZADELCONTENIDOTYPE::setReferenciaArticulo()
     * @uses PIEZADELCONTENIDOTYPE::setUbicacionOriginal()
     * @uses PIEZADELCONTENIDOTYPE::setIdentificadorEnvio()
     * @uses PIEZADELCONTENIDOTYPE::setIdentificadorFactura()
     * @param int $numeroPieza
     * @param int $numeroDeUnidades
     * @param string $descripcion
     * @param float $valorDeclarado
     * @param float $pesoNeto
     * @param int $partidaArancelaria
     * @param string $referenciaArticulo
     * @param string $ubicacionOriginal
     * @param string $identificadorEnvio
     * @param string $identificadorFactura
     */
    public function __construct(?int $numeroPieza = null, ?int $numeroDeUnidades = null, ?string $descripcion = null, ?float $valorDeclarado = null, ?float $pesoNeto = null, ?int $partidaArancelaria = null, ?string $referenciaArticulo = null, ?string $ubicacionOriginal = null, ?string $identificadorEnvio = null, ?string $identificadorFactura = null)
    {
        $this
            ->setNumeroPieza($numeroPieza)
            ->setNumeroDeUnidades($numeroDeUnidades)
            ->setDescripcion($descripcion)
            ->setValorDeclarado($valorDeclarado)
            ->setPesoNeto($pesoNeto)
            ->setPartidaArancelaria($partidaArancelaria)
            ->setReferenciaArticulo($referenciaArticulo)
            ->setUbicacionOriginal($ubicacionOriginal)
            ->setIdentificadorEnvio($identificadorEnvio)
            ->setIdentificadorFactura($identificadorFactura);
    }
    /**
     * Get NumeroPieza value
     * @return int|null
     */
    public function getNumeroPieza(): ?int
    {
        return $this->NumeroPieza;
    }
    /**
     * Set NumeroPieza value
     * @param int $numeroPieza
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setNumeroPieza(?int $numeroPieza = null): self
    {
        // validation for constraint: int
        if (!is_null($numeroPieza) && !(is_int($numeroPieza) || ctype_digit($numeroPieza))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroPieza, true), gettype($numeroPieza)), __LINE__);
        }
        // validation for constraint: maxInclusive(99)
        if (!is_null($numeroPieza) && $numeroPieza > 99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99', var_export($numeroPieza, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($numeroPieza) && $numeroPieza < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($numeroPieza, true)), __LINE__);
        }
        $this->NumeroPieza = $numeroPieza;
        
        return $this;
    }
    /**
     * Get NumeroDeUnidades value
     * @return int|null
     */
    public function getNumeroDeUnidades(): ?int
    {
        return $this->NumeroDeUnidades;
    }
    /**
     * Set NumeroDeUnidades value
     * @param int $numeroDeUnidades
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setNumeroDeUnidades(?int $numeroDeUnidades = null): self
    {
        // validation for constraint: int
        if (!is_null($numeroDeUnidades) && !(is_int($numeroDeUnidades) || ctype_digit($numeroDeUnidades))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroDeUnidades, true), gettype($numeroDeUnidades)), __LINE__);
        }
        // validation for constraint: maxInclusive(999999)
        if (!is_null($numeroDeUnidades) && $numeroDeUnidades > 999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999999', var_export($numeroDeUnidades, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($numeroDeUnidades) && $numeroDeUnidades < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($numeroDeUnidades, true)), __LINE__);
        }
        $this->NumeroDeUnidades = $numeroDeUnidades;
        
        return $this;
    }
    /**
     * Get Descripcion value
     * @return string|null
     */
    public function getDescripcion(): ?string
    {
        return $this->Descripcion;
    }
    /**
     * Set Descripcion value
     * @param string $descripcion
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setDescripcion(?string $descripcion = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcion) && !is_string($descripcion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcion, true), gettype($descripcion)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($descripcion) && mb_strlen((string) $descripcion) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $descripcion)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($descripcion) && mb_strlen((string) $descripcion) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $descripcion)), __LINE__);
        }
        $this->Descripcion = $descripcion;
        
        return $this;
    }
    /**
     * Get ValorDeclarado value
     * @return float|null
     */
    public function getValorDeclarado(): ?float
    {
        return $this->ValorDeclarado;
    }
    /**
     * Set ValorDeclarado value
     * @param float $valorDeclarado
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setValorDeclarado(?float $valorDeclarado = null): self
    {
        // validation for constraint: float
        if (!is_null($valorDeclarado) && !(is_float($valorDeclarado) || is_numeric($valorDeclarado))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorDeclarado, true), gettype($valorDeclarado)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($valorDeclarado) && mb_strlen(mb_substr((string) $valorDeclarado, false !== mb_strpos((string) $valorDeclarado, '.') ? mb_strpos((string) $valorDeclarado, '.') + 1 : mb_strlen((string) $valorDeclarado))) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($valorDeclarado, true), mb_strlen(mb_substr((string) $valorDeclarado, mb_strpos((string) $valorDeclarado, '.') + 1))), __LINE__);
        }
        // validation for constraint: maxInclusive(99999999.99)
        if (!is_null($valorDeclarado) && $valorDeclarado > 99999999.99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99999999.99', var_export($valorDeclarado, true)), __LINE__);
        }
        // validation for constraint: minInclusive(0.00)
        if (!is_null($valorDeclarado) && $valorDeclarado < 0.00) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0.00', var_export($valorDeclarado, true)), __LINE__);
        }
        // validation for constraint: totalDigits(10)
        if (!is_null($valorDeclarado) && mb_strlen(preg_replace('/(\D)/', '', (string) $valorDeclarado)) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 10 digits, "%d" given', var_export($valorDeclarado, true), mb_strlen(preg_replace('/(\D)/', '', (string) $valorDeclarado))), __LINE__);
        }
        $this->ValorDeclarado = $valorDeclarado;
        
        return $this;
    }
    /**
     * Get PesoNeto value
     * @return float|null
     */
    public function getPesoNeto(): ?float
    {
        return $this->PesoNeto;
    }
    /**
     * Set PesoNeto value
     * @param float $pesoNeto
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setPesoNeto(?float $pesoNeto = null): self
    {
        // validation for constraint: float
        if (!is_null($pesoNeto) && !(is_float($pesoNeto) || is_numeric($pesoNeto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pesoNeto, true), gettype($pesoNeto)), __LINE__);
        }
        // validation for constraint: fractionDigits(2)
        if (!is_null($pesoNeto) && mb_strlen(mb_substr((string) $pesoNeto, false !== mb_strpos((string) $pesoNeto, '.') ? mb_strpos((string) $pesoNeto, '.') + 1 : mb_strlen((string) $pesoNeto))) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must at most contain 2 fraction digits, %d given', var_export($pesoNeto, true), mb_strlen(mb_substr((string) $pesoNeto, mb_strpos((string) $pesoNeto, '.') + 1))), __LINE__);
        }
        // validation for constraint: maxInclusive(999.99)
        if (!is_null($pesoNeto) && $pesoNeto > 999.99) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999.99', var_export($pesoNeto, true)), __LINE__);
        }
        // validation for constraint: minInclusive(0.00)
        if (!is_null($pesoNeto) && $pesoNeto < 0.00) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0.00', var_export($pesoNeto, true)), __LINE__);
        }
        // validation for constraint: totalDigits(5)
        if (!is_null($pesoNeto) && mb_strlen(preg_replace('/(\D)/', '', (string) $pesoNeto)) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must use at most 5 digits, "%d" given', var_export($pesoNeto, true), mb_strlen(preg_replace('/(\D)/', '', (string) $pesoNeto))), __LINE__);
        }
        $this->PesoNeto = $pesoNeto;
        
        return $this;
    }
    /**
     * Get PartidaArancelaria value
     * @return int|null
     */
    public function getPartidaArancelaria(): ?int
    {
        return $this->PartidaArancelaria;
    }
    /**
     * Set PartidaArancelaria value
     * @param int $partidaArancelaria
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setPartidaArancelaria(?int $partidaArancelaria = null): self
    {
        // validation for constraint: int
        if (!is_null($partidaArancelaria) && !(is_int($partidaArancelaria) || ctype_digit($partidaArancelaria))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($partidaArancelaria, true), gettype($partidaArancelaria)), __LINE__);
        }
        // validation for constraint: maxInclusive(99999999999)
        if (!is_null($partidaArancelaria) && $partidaArancelaria > 99999999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 99999999999', var_export($partidaArancelaria, true)), __LINE__);
        }
        // validation for constraint: minInclusive(100000)
        if (!is_null($partidaArancelaria) && $partidaArancelaria < 100000) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 100000', var_export($partidaArancelaria, true)), __LINE__);
        }
        $this->PartidaArancelaria = $partidaArancelaria;
        
        return $this;
    }
    /**
     * Get ReferenciaArticulo value
     * @return string|null
     */
    public function getReferenciaArticulo(): ?string
    {
        return $this->ReferenciaArticulo;
    }
    /**
     * Set ReferenciaArticulo value
     * @param string $referenciaArticulo
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setReferenciaArticulo(?string $referenciaArticulo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenciaArticulo) && !is_string($referenciaArticulo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaArticulo, true), gettype($referenciaArticulo)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($referenciaArticulo) && mb_strlen((string) $referenciaArticulo) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $referenciaArticulo)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($referenciaArticulo) && mb_strlen((string) $referenciaArticulo) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $referenciaArticulo)), __LINE__);
        }
        $this->ReferenciaArticulo = $referenciaArticulo;
        
        return $this;
    }
    /**
     * Get UbicacionOriginal value
     * @return string|null
     */
    public function getUbicacionOriginal(): ?string
    {
        return $this->UbicacionOriginal;
    }
    /**
     * Set UbicacionOriginal value
     * @param string $ubicacionOriginal
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setUbicacionOriginal(?string $ubicacionOriginal = null): self
    {
        // validation for constraint: string
        if (!is_null($ubicacionOriginal) && !is_string($ubicacionOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ubicacionOriginal, true), gettype($ubicacionOriginal)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($ubicacionOriginal) && mb_strlen((string) $ubicacionOriginal) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $ubicacionOriginal)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($ubicacionOriginal) && mb_strlen((string) $ubicacionOriginal) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $ubicacionOriginal)), __LINE__);
        }
        $this->UbicacionOriginal = $ubicacionOriginal;
        
        return $this;
    }
    /**
     * Get IdentificadorEnvio value
     * @return string|null
     */
    public function getIdentificadorEnvio(): ?string
    {
        return $this->IdentificadorEnvio;
    }
    /**
     * Set IdentificadorEnvio value
     * @param string $identificadorEnvio
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setIdentificadorEnvio(?string $identificadorEnvio = null): self
    {
        // validation for constraint: string
        if (!is_null($identificadorEnvio) && !is_string($identificadorEnvio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorEnvio, true), gettype($identificadorEnvio)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorEnvio) && mb_strlen((string) $identificadorEnvio) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $identificadorEnvio)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorEnvio) && mb_strlen((string) $identificadorEnvio) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $identificadorEnvio)), __LINE__);
        }
        $this->IdentificadorEnvio = $identificadorEnvio;
        
        return $this;
    }
    /**
     * Get IdentificadorFactura value
     * @return string|null
     */
    public function getIdentificadorFactura(): ?string
    {
        return $this->IdentificadorFactura;
    }
    /**
     * Set IdentificadorFactura value
     * @param string $identificadorFactura
     * @return \StructType\PIEZADELCONTENIDOTYPE
     */
    public function setIdentificadorFactura(?string $identificadorFactura = null): self
    {
        // validation for constraint: string
        if (!is_null($identificadorFactura) && !is_string($identificadorFactura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificadorFactura, true), gettype($identificadorFactura)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($identificadorFactura) && mb_strlen((string) $identificadorFactura) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $identificadorFactura)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($identificadorFactura) && mb_strlen((string) $identificadorFactura) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $identificadorFactura)), __LINE__);
        }
        $this->IdentificadorFactura = $identificadorFactura;
        
        return $this;
    }
}
