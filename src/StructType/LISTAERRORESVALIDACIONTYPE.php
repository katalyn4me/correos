<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LISTAERRORESVALIDACIONTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LISTAERRORESVALIDACIONTYPE extends AbstractStructBase
{
    /**
     * The ErrorVal
     * Meta information extracted from the WSDL
     * - ref: xsd:ErrorVal
     * @var \StructType\ERRORVALTYPE[]
     */
    protected ?array $ErrorVal = null;
    /**
     * Constructor method for LISTAERRORESVALIDACIONTYPE
     * @uses LISTAERRORESVALIDACIONTYPE::setErrorVal()
     * @param \StructType\ERRORVALTYPE[] $errorVal
     */
    public function __construct(?array $errorVal = null)
    {
        $this
            ->setErrorVal($errorVal);
    }
    /**
     * Get ErrorVal value
     * @return \StructType\ERRORVALTYPE[]
     */
    public function getErrorVal(): ?array
    {
        return $this->ErrorVal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorVal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorVal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorValForArrayConstraintFromSetErrorVal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $lISTAERRORESVALIDACIONTYPEErrorValItem) {
            // validation for constraint: itemType
            if (!$lISTAERRORESVALIDACIONTYPEErrorValItem instanceof \StructType\ERRORVALTYPE) {
                $invalidValues[] = is_object($lISTAERRORESVALIDACIONTYPEErrorValItem) ? get_class($lISTAERRORESVALIDACIONTYPEErrorValItem) : sprintf('%s(%s)', gettype($lISTAERRORESVALIDACIONTYPEErrorValItem), var_export($lISTAERRORESVALIDACIONTYPEErrorValItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ErrorVal property can only contain items of type \StructType\ERRORVALTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ErrorVal value
     * @throws InvalidArgumentException
     * @param \StructType\ERRORVALTYPE[] $errorVal
     * @return \StructType\LISTAERRORESVALIDACIONTYPE
     */
    public function setErrorVal(?array $errorVal = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorValArrayErrorMessage = self::validateErrorValForArrayConstraintFromSetErrorVal($errorVal))) {
            throw new InvalidArgumentException($errorValArrayErrorMessage, __LINE__);
        }
        $this->ErrorVal = $errorVal;
        
        return $this;
    }
    /**
     * Add item to ErrorVal value
     * @throws InvalidArgumentException
     * @param \StructType\ERRORVALTYPE $item
     * @return \StructType\LISTAERRORESVALIDACIONTYPE
     */
    public function addToErrorVal(\StructType\ERRORVALTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ERRORVALTYPE) {
            throw new InvalidArgumentException(sprintf('The ErrorVal property can only contain items of type \StructType\ERRORVALTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ErrorVal[] = $item;
        
        return $this;
    }
}
