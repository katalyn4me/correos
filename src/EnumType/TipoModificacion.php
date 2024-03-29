<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoModificacion EnumType
 * @subpackage Enumerations
 */
class TipoModificacion extends AbstractStructEnumBase
{
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
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
     * Return allowed values
     * @uses self::VALUE_0
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_0,
            self::VALUE_1,
            self::VALUE_2,
        ];
    }
}
