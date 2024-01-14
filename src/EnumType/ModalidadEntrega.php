<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModalidadEntrega EnumType
 * @subpackage Enumerations
 */
class ModalidadEntrega extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ST'
     * @return string 'ST'
     */
    const VALUE_ST = 'ST';
    /**
     * Constant for value 'LS'
     * @return string 'LS'
     */
    const VALUE_LS = 'LS';
    /**
     * Constant for value 'OR'
     * @return string 'OR'
     */
    const VALUE_OR = 'OR';
    /**
     * Constant for value 'HP'
     * @return string 'HP'
     */
    const VALUE_HP = 'HP';
    /**
     * Constant for value 'CP'
     * @return string 'CP'
     */
    const VALUE_CP = 'CP';
    /**
     * Return allowed values
     * @uses self::VALUE_ST
     * @uses self::VALUE_LS
     * @uses self::VALUE_OR
     * @uses self::VALUE_HP
     * @uses self::VALUE_CP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ST,
            self::VALUE_LS,
            self::VALUE_OR,
            self::VALUE_HP,
            self::VALUE_CP,
        ];
    }
}
