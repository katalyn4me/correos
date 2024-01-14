<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoEnvio EnumType
 * @subpackage Enumerations
 */
class TipoEnvio extends AbstractStructEnumBase
{
    /**
     * Constant for value '1'
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '3'
     * @return string '3'
     */
    const VALUE_3 = '3';
    /**
     * Constant for value '4'
     * @return string '4'
     */
    const VALUE_4 = '4';
    /**
     * Constant for value '5'
     * @return string '5'
     */
    const VALUE_5 = '5';
    /**
     * Constant for value '6'
     * @return string '6'
     */
    const VALUE_6 = '6';
    /**
     * Constant for value '7'
     * @return string '7'
     */
    const VALUE_7 = '7';
    /**
     * Return allowed values
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @uses self::VALUE_4
     * @uses self::VALUE_5
     * @uses self::VALUE_6
     * @uses self::VALUE_7
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
            self::VALUE_4,
            self::VALUE_5,
            self::VALUE_6,
            self::VALUE_7,
        ];
    }
}
