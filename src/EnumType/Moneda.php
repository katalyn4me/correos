<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Moneda EnumType
 * Meta information extracted from the WSDL
 * - base: xs:string
 * - maxLength: 3
 * - minLength: 3
 * @subpackage Enumerations
 */
class Moneda extends AbstractStructEnumBase
{
    /**
     * Constant for value 'USD'
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
    /**
     * Constant for value 'BRL'
     * @return string 'BRL'
     */
    const VALUE_BRL = 'BRL';
    /**
     * Constant for value 'usd'
     * @return string 'usd'
     */
    const VALUE_USD_1 = 'usd';
    /**
     * Constant for value 'brl'
     * @return string 'brl'
     */
    const VALUE_BRL_1 = 'brl';
    /**
     * Return allowed values
     * @uses self::VALUE_USD
     * @uses self::VALUE_BRL
     * @uses self::VALUE_USD_1
     * @uses self::VALUE_BRL_1
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USD,
            self::VALUE_BRL,
            self::VALUE_USD_1,
            self::VALUE_BRL_1,
        ];
    }
}
