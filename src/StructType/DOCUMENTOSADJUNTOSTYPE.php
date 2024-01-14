<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOCUMENTOSADJUNTOSTYPE StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DOCUMENTOSADJUNTOSTYPE extends AbstractStructBase
{
    /**
     * The DocumentoAdjunto
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DOCUMENTOADJUNTOTYPE[]
     */
    protected ?array $DocumentoAdjunto = null;
    /**
     * Constructor method for DOCUMENTOSADJUNTOSTYPE
     * @uses DOCUMENTOSADJUNTOSTYPE::setDocumentoAdjunto()
     * @param \StructType\DOCUMENTOADJUNTOTYPE[] $documentoAdjunto
     */
    public function __construct(?array $documentoAdjunto = null)
    {
        $this
            ->setDocumentoAdjunto($documentoAdjunto);
    }
    /**
     * Get DocumentoAdjunto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DOCUMENTOADJUNTOTYPE[]
     */
    public function getDocumentoAdjunto(): ?array
    {
        return $this->DocumentoAdjunto ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocumentoAdjunto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentoAdjunto method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentoAdjuntoForArrayConstraintFromSetDocumentoAdjunto(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem) {
            // validation for constraint: itemType
            if (!$dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem instanceof \StructType\DOCUMENTOADJUNTOTYPE) {
                $invalidValues[] = is_object($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem) ? get_class($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem) : sprintf('%s(%s)', gettype($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem), var_export($dOCUMENTOSADJUNTOSTYPEDocumentoAdjuntoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentoAdjunto property can only contain items of type \StructType\DOCUMENTOADJUNTOTYPE, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentoAdjunto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DOCUMENTOADJUNTOTYPE[] $documentoAdjunto
     * @return \StructType\DOCUMENTOSADJUNTOSTYPE
     */
    public function setDocumentoAdjunto(?array $documentoAdjunto = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentoAdjuntoArrayErrorMessage = self::validateDocumentoAdjuntoForArrayConstraintFromSetDocumentoAdjunto($documentoAdjunto))) {
            throw new InvalidArgumentException($documentoAdjuntoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($documentoAdjunto) && count($documentoAdjunto) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($documentoAdjunto)), __LINE__);
        }
        if (is_null($documentoAdjunto) || (is_array($documentoAdjunto) && empty($documentoAdjunto))) {
            unset($this->DocumentoAdjunto);
        } else {
            $this->DocumentoAdjunto = $documentoAdjunto;
        }
        
        return $this;
    }
    /**
     * Add item to DocumentoAdjunto value
     * @throws InvalidArgumentException
     * @param \StructType\DOCUMENTOADJUNTOTYPE $item
     * @return \StructType\DOCUMENTOSADJUNTOSTYPE
     */
    public function addToDocumentoAdjunto(\StructType\DOCUMENTOADJUNTOTYPE $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DOCUMENTOADJUNTOTYPE) {
            throw new InvalidArgumentException(sprintf('The DocumentoAdjunto property can only contain items of type \StructType\DOCUMENTOADJUNTOTYPE, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DocumentoAdjunto) && count($this->DocumentoAdjunto) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DocumentoAdjunto)), __LINE__);
        }
        $this->DocumentoAdjunto[] = $item;
        
        return $this;
    }
}
