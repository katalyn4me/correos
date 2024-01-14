<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoPeso EnumType
 * @subpackage Enumerations
 */
class TipoPeso extends AbstractStructEnumBase
{
    /**
     * Constant for value 'R'
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Return allowed values
     * @uses self::VALUE_R
     * @uses self::VALUE_V
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_R,
            self::VALUE_V,
        ];
    }
}
