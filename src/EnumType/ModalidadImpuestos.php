<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModalidadImpuestos EnumType
 * @subpackage Enumerations
 */
class ModalidadImpuestos extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DDP'
     * @return string 'DDP'
     */
    const VALUE_DDP = 'DDP';
    /**
     * Constant for value 'DDU'
     * @return string 'DDU'
     */
    const VALUE_DDU = 'DDU';
    /**
     * Constant for value 'ddp'
     * @return string 'ddp'
     */
    const VALUE_DDP_1 = 'ddp';
    /**
     * Constant for value 'ddu'
     * @return string 'ddu'
     */
    const VALUE_DDU_1 = 'ddu';
    /**
     * Return allowed values
     * @uses self::VALUE_DDP
     * @uses self::VALUE_DDU
     * @uses self::VALUE_DDP_1
     * @uses self::VALUE_DDU_1
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DDP,
            self::VALUE_DDU,
            self::VALUE_DDP_1,
            self::VALUE_DDU_1,
        ];
    }
}
