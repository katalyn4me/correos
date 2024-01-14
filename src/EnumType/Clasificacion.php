<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Clasificacion EnumType
 * @subpackage Enumerations
 */
class Clasificacion extends AbstractStructEnumBase
{
    /**
     * Constant for value 'special'
     * @return string 'special'
     */
    const VALUE_SPECIAL = 'special';
    /**
     * Constant for value 'regular'
     * @return string 'regular'
     */
    const VALUE_REGULAR = 'regular';
    /**
     * Constant for value 'hazmat'
     * @return string 'hazmat'
     */
    const VALUE_HAZMAT = 'hazmat';
    /**
     * Return allowed values
     * @uses self::VALUE_SPECIAL
     * @uses self::VALUE_REGULAR
     * @uses self::VALUE_HAZMAT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SPECIAL,
            self::VALUE_REGULAR,
            self::VALUE_HAZMAT,
        ];
    }
}
