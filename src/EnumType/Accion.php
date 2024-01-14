<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Accion EnumType
 * @subpackage Enumerations
 */
class Accion extends AbstractStructEnumBase
{
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
     * Return allowed values
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_2,
            self::VALUE_3,
        ];
    }
}
