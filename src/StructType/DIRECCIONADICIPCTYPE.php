<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DIRECCIONADICIPCTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DIRECCIONADICIPCTYPE extends AbstractStructBase
{
    /**
     * The Calle
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - maxOccurs: 2
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Calle = null;
    /**
     * The NumeroCalle
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NumeroCalle = null;
    /**
     * The ApartadoCorreos
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ApartadoCorreos = null;
    /**
     * Constructor method for DIRECCIONADICIPCTYPE
     * @uses DIRECCIONADICIPCTYPE::setCalle()
     * @uses DIRECCIONADICIPCTYPE::setNumeroCalle()
     * @uses DIRECCIONADICIPCTYPE::setApartadoCorreos()
     * @param string[] $calle
     * @param string $numeroCalle
     * @param string $apartadoCorreos
     */
    public function __construct(?array $calle = null, ?string $numeroCalle = null, ?string $apartadoCorreos = null)
    {
        $this
            ->setCalle($calle)
            ->setNumeroCalle($numeroCalle)
            ->setApartadoCorreos($apartadoCorreos);
    }
    /**
     * Get Calle value
     * @return string[]
     */
    public function getCalle(): ?array
    {
        return $this->Calle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForArrayConstraintFromSetCalle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $dIRECCIONADICIPCTYPECalleItem) {
            // validation for constraint: itemType
            if (!is_string($dIRECCIONADICIPCTYPECalleItem)) {
                $invalidValues[] = is_object($dIRECCIONADICIPCTYPECalleItem) ? get_class($dIRECCIONADICIPCTYPECalleItem) : sprintf('%s(%s)', gettype($dIRECCIONADICIPCTYPECalleItem), var_export($dIRECCIONADICIPCTYPECalleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Calle property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMaxLengthConstraintFromSetCalle(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $dIRECCIONADICIPCTYPECalleItem) {
            // validation for constraint: maxLength(40)
            if (mb_strlen((string) $dIRECCIONADICIPCTYPECalleItem) > 40) {
                $invalidValues[] = var_export($dIRECCIONADICIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 40', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCalle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalle method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalleForMinLengthConstraintFromSetCalle(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $dIRECCIONADICIPCTYPECalleItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $dIRECCIONADICIPCTYPECalleItem) < 1) {
                $invalidValues[] = var_export($dIRECCIONADICIPCTYPECalleItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Calle value
     * @throws InvalidArgumentException
     * @param string[] $calle
     * @return \StructType\DIRECCIONADICIPCTYPE
     */
    public function setCalle(?array $calle = null): self
    {
        // validation for constraint: array
        if ('' !== ($calleArrayErrorMessage = self::validateCalleForArrayConstraintFromSetCalle($calle))) {
            throw new InvalidArgumentException($calleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(40)
        if ('' !== ($calleMaxLengthErrorMessage = self::validateCalleForMaxLengthConstraintFromSetCalle($calle))) {
            throw new InvalidArgumentException($calleMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($calle) && count($calle) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($calleMinLengthErrorMessage = self::validateCalleForMinLengthConstraintFromSetCalle($calle))) {
            throw new InvalidArgumentException($calleMinLengthErrorMessage, __LINE__);
        }
        $this->Calle = $calle;
        
        return $this;
    }
    /**
     * Add item to Calle value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \StructType\DIRECCIONADICIPCTYPE
     */
    public function addToCalle(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Calle property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (mb_strlen((string) $item) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->Calle) && count($this->Calle) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->Calle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen((string) $item) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $item)), __LINE__);
        }
        $this->Calle[] = $item;
        
        return $this;
    }
    /**
     * Get NumeroCalle value
     * @return string|null
     */
    public function getNumeroCalle(): ?string
    {
        return $this->NumeroCalle;
    }
    /**
     * Set NumeroCalle value
     * @param string $numeroCalle
     * @return \StructType\DIRECCIONADICIPCTYPE
     */
    public function setNumeroCalle(?string $numeroCalle = null): self
    {
        // validation for constraint: string
        if (!is_null($numeroCalle) && !is_string($numeroCalle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroCalle, true), gettype($numeroCalle)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($numeroCalle) && mb_strlen((string) $numeroCalle) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $numeroCalle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numeroCalle) && mb_strlen((string) $numeroCalle) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $numeroCalle)), __LINE__);
        }
        $this->NumeroCalle = $numeroCalle;
        
        return $this;
    }
    /**
     * Get ApartadoCorreos value
     * @return string|null
     */
    public function getApartadoCorreos(): ?string
    {
        return $this->ApartadoCorreos;
    }
    /**
     * Set ApartadoCorreos value
     * @param string $apartadoCorreos
     * @return \StructType\DIRECCIONADICIPCTYPE
     */
    public function setApartadoCorreos(?string $apartadoCorreos = null): self
    {
        // validation for constraint: string
        if (!is_null($apartadoCorreos) && !is_string($apartadoCorreos)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apartadoCorreos, true), gettype($apartadoCorreos)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($apartadoCorreos) && mb_strlen((string) $apartadoCorreos) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $apartadoCorreos)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($apartadoCorreos) && mb_strlen((string) $apartadoCorreos) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $apartadoCorreos)), __LINE__);
        }
        $this->ApartadoCorreos = $apartadoCorreos;
        
        return $this;
    }
}
