<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaSolicitudEtiquetaExp StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RespuestaSolicitudEtiquetaExp extends AbstractStructBase
{
    /**
     * The CodExpedicion
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minOccurs: 0
     * - ref: xsd:CodExpedicion
     * @var string|null
     */
    protected ?string $CodExpedicion = null;
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
     * - ref: xsd:TotalBultos
     * @var int|null
     */
    protected ?int $TotalBultos = null;
    /**
     * The Bulto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: xsd:Bulto
     * @var \StructType\DATOSBULTOTYPE[]
     */
    protected ?array $Bulto = null;
    /**
     * The BultoError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:BultoError
     * @var \StructType\DATOSBULTOERRORTYPE|null
     */
    protected ?\StructType\DATOSBULTOERRORTYPE $BultoError = null;
    /**
     * The IdiomaErrores
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: xsd:IdiomaErrores
     * @var string|null
     */
    protected ?string $IdiomaErrores = null;
    /**
     * Constructor method for RespuestaSolicitudEtiquetaExp
     * @uses RespuestaSolicitudEtiquetaExp::setCodExpedicion()
     * @uses RespuestaSolicitudEtiquetaExp::setFechaRespuesta()
     * @uses RespuestaSolicitudEtiquetaExp::setResultado()
     * @uses RespuestaSolicitudEtiquetaExp::setTotalBultos()
     * @uses RespuestaSolicitudEtiquetaExp::setBulto()
     * @uses RespuestaSolicitudEtiquetaExp::setBultoError()
     * @uses RespuestaSolicitudEtiquetaExp::setIdiomaErrores()
     * @param string $codExpedicion
     * @param string $fechaRespuesta
     * @param string $resultado
     * @param int $totalBultos
     * @param \StructType\DATOSBULTOTYPE[] $bulto
     * @param \StructType\DATOSBULTOERRORTYPE $bultoError
     * @param string $idiomaErrores
     */
    public function __construct(?string $codExpedicion = null, ?string $fechaRespuesta = null, ?string $resultado = null, ?int $totalBultos = null, ?array $bulto = null, ?\StructType\DATOSBULTOERRORTYPE $bultoError = null, ?string $idiomaErrores = null)
    {
        $this
            ->setCodExpedicion($codExpedicion)
            ->setFechaRespuesta($fechaRespuesta)
            ->setResultado($resultado)
            ->setTotalBultos($totalBultos)
            ->setBulto($bulto)
            ->setBultoError($bultoError)
            ->setIdiomaErrores($idiomaErrores);
    }
    /**
     * Get CodExpedicion value
     * @return string|null
     */
    public function getCodExpedicion(): ?string
    {
        return $this->CodExpedicion;
    }
    /**
     * Set CodExpedicion value
     * @param string $codExpedicion
     * @return \StructType\RespuestaSolicitudEtiquetaExp
     */
    public function setCodExpedicion(?string $codExpedicion = null): self
    {
        // validation for constraint: string
        if (!is_null($codExpedicion) && !is_string($codExpedicion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codExpedicion, true), gettype($codExpedicion)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($codExpedicion) && mb_strlen((string) $codExpedicion) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $codExpedicion)), __LINE__);
        }
        $this->CodExpedicion = $codExpedicion;
        
        return $this;
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
     * @return \StructType\RespuestaSolicitudEtiquetaExp
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
     * @return \StructType\RespuestaSolicitudEtiquetaExp
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
     * @return \StructType\RespuestaSolicitudEtiquetaExp
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
     * Get Bulto value
     * @return \StructType\DATOSBULTOTYPE[]
     */
    public function getBulto(): ?array
    {
        return $this->Bulto;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBulto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBulto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoForArrayConstraintFromSetBulto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaSolicitudEtiquetaExpBultoItem) {
            // validation for constraint: itemType
            if (!$respuestaSolicitudEtiquetaExpBultoItem instanceof \StructType\DATOSBULTOTYPE) {
                $invalidValues[] = is_object($respuestaSolicitudEtiquetaExpBultoItem) ? get_class($respuestaSolicitudEtiquetaExpBultoItem) : sprintf('%s(%s)', gettype($respuestaSolicitudEtiquetaExpBultoItem), var_export($respuestaSolicitudEtiquetaExpBultoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Bulto property can only contain items of type \StructType\DATOSBULTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Bulto value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOTYPE[] $bulto
     * @return \StructType\RespuestaSolicitudEtiquetaExp
     */
    public function setBulto(?array $bulto = null): self
    {
        // validation for constraint: array
        if ('' !== ($bultoArrayErrorMessage = self::validateBultoForArrayConstraintFromSetBulto($bulto))) {
            throw new InvalidArgumentException($bultoArrayErrorMessage, __LINE__);
        }
        $this->Bulto = $bulto;
        
        return $this;
    }
    /**
     * Add item to Bulto value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOTYPE $item
     * @return \StructType\RespuestaSolicitudEtiquetaExp
     */
    public function addToBulto(\StructType\DATOSBULTOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSBULTOTYPE) {
            throw new InvalidArgumentException(sprintf('The Bulto property can only contain items of type \StructType\DATOSBULTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Bulto[] = $item;
        
        return $this;
    }
    /**
     * Get BultoError value
     * @return \StructType\DATOSBULTOERRORTYPE|null
     */
    public function getBultoError(): ?\StructType\DATOSBULTOERRORTYPE
    {
        return $this->BultoError;
    }
    /**
     * Set BultoError value
     * @param \StructType\DATOSBULTOERRORTYPE $bultoError
     * @return \StructType\RespuestaSolicitudEtiquetaExp
     */
    public function setBultoError(?\StructType\DATOSBULTOERRORTYPE $bultoError = null): self
    {
        $this->BultoError = $bultoError;
        
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
     * @return \StructType\RespuestaSolicitudEtiquetaExp
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
