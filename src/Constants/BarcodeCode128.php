<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * CODE128 format
 */
class BarcodeCode128
{
    use StaticClass;

    /**
     * General type (CODE128)
     */
    public const TYPE = PicqerBarcodeGenerator::TYPE_CODE_128;
    /**
     * Type A (CODE128-A)
     */
    public const TYPE_A = PicqerBarcodeGenerator::TYPE_CODE_128_A;
    /**
     * Type A (CODE128-B)
     */
    public const TYPE_B = PicqerBarcodeGenerator::TYPE_CODE_128_B;
    /**
     * Type A (CODE128-C)
     */
    public const TYPE_C = PicqerBarcodeGenerator::TYPE_CODE_128_C;
}