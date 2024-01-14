<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Alertas StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Alertas extends AbstractStructBase
{
    /**
     * The MensajeAlerta
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: xsd:MensajeAlerta
     * @var string
     */
    protected string $MensajeAlerta;
    /**
     * Constructor method for Alertas
     * @uses Alertas::setMensajeAlerta()
     * @param array|string $mensajeAlerta
     */
    public function __construct($mensajeAlerta)
    {
        $this
            ->setMensajeAlerta($mensajeAlerta);
    }
    /**
     * Get MensajeAlerta value
     * @return string
     */
    public function getMensajeAlerta(): string
    {
        return $this->MensajeAlerta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMensajeAlerta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMensajeAlerta method
     * 
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMensajeAlertaForListConstraintFromSetMensajeAlerta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $alertasMensajeAlertaItem) {
            // validation for constraint: itemType
            if (!is_string($alertasMensajeAlertaItem)) {
                $invalidValues[] = is_object($alertasMensajeAlertaItem) ? get_class($alertasMensajeAlertaItem) : sprintf('%s(%s)', gettype($alertasMensajeAlertaItem), var_export($alertasMensajeAlertaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MensajeAlerta property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MensajeAlerta value
     * @param array|string $mensajeAlerta
     * @return \StructType\Alertas
     */
    public function setMensajeAlerta($mensajeAlerta): self
    {
        // validation for constraint: list
        if ('' !== ($mensajeAlertaArrayErrorMessage = self::validateMensajeAlertaForListConstraintFromSetMensajeAlerta(is_string($mensajeAlerta) ? explode(' ', $mensajeAlerta) : $mensajeAlerta))) {
            throw new InvalidArgumentException($mensajeAlertaArrayErrorMessage, __LINE__);
        }
        $this->MensajeAlerta = is_array($mensajeAlerta) ? implode(' ', $mensajeAlerta) : $mensajeAlerta;
        
        return $this;
    }
}
