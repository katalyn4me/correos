<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoFranqueo EnumType
 * @subpackage Enumerations
 */
class TipoFranqueo extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FP'
     * @return string 'FP'
     */
    const VALUE_FP = 'FP';
    /**
     * Constant for value 'FM'
     * @return string 'FM'
     */
    const VALUE_FM = 'FM';
    /**
     * Constant for value 'ES'
     * @return string 'ES'
     */
    const VALUE_ES = 'ES';
    /**
     * Constant for value 'ON'
     * @return string 'ON'
     */
    const VALUE_ON = 'ON';
    /**
     * Return allowed values
     * @uses self::VALUE_FP
     * @uses self::VALUE_FM
     * @uses self::VALUE_ES
     * @uses self::VALUE_ON
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FP,
            self::VALUE_FM,
            self::VALUE_ES,
            self::VALUE_ON,
        ];
    }
}
