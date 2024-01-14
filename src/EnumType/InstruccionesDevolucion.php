<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InstruccionesDevolucion EnumType
 * @subpackage Enumerations
 */
class InstruccionesDevolucion extends AbstractStructEnumBase
{
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Return allowed values
     * @uses self::VALUE_D
     * @uses self::VALUE_A
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_D,
            self::VALUE_A,
        ];
    }
}
