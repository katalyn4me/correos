<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BultosError StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BultosError extends AbstractStructBase
{
    /**
     * The BultoError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\DATOSBULTOERRORTYPE[]
     */
    protected ?array $BultoError = null;
    /**
     * Constructor method for BultosError
     * @uses BultosError::setBultoError()
     * @param \StructType\DATOSBULTOERRORTYPE[] $bultoError
     */
    public function __construct(?array $bultoError = null)
    {
        $this
            ->setBultoError($bultoError);
    }
    /**
     * Get BultoError value
     * @return \StructType\DATOSBULTOERRORTYPE[]
     */
    public function getBultoError(): ?array
    {
        return $this->BultoError;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBultoError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBultoError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBultoErrorForArrayConstraintFromSetBultoError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bultosErrorBultoErrorItem) {
            // validation for constraint: itemType
            if (!$bultosErrorBultoErrorItem instanceof \StructType\DATOSBULTOERRORTYPE) {
                $invalidValues[] = is_object($bultosErrorBultoErrorItem) ? get_class($bultosErrorBultoErrorItem) : sprintf('%s(%s)', gettype($bultosErrorBultoErrorItem), var_export($bultosErrorBultoErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BultoError property can only contain items of type \StructType\DATOSBULTOERRORTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BultoError value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOERRORTYPE[] $bultoError
     * @return \StructType\BultosError
     */
    public function setBultoError(?array $bultoError = null): self
    {
        // validation for constraint: array
        if ('' !== ($bultoErrorArrayErrorMessage = self::validateBultoErrorForArrayConstraintFromSetBultoError($bultoError))) {
            throw new InvalidArgumentException($bultoErrorArrayErrorMessage, __LINE__);
        }
        $this->BultoError = $bultoError;
        
        return $this;
    }
    /**
     * Add item to BultoError value
     * @throws InvalidArgumentException
     * @param \StructType\DATOSBULTOERRORTYPE $item
     * @return \StructType\BultosError
     */
    public function addToBultoError(\StructType\DATOSBULTOERRORTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DATOSBULTOERRORTYPE) {
            throw new InvalidArgumentException(sprintf('The BultoError property can only contain items of type \StructType\DATOSBULTOERRORTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BultoError[] = $item;
        
        return $this;
    }
}
