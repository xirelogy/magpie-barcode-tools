<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * CODE32 format
 */
class BarcodeCode32
{
    use StaticClass;

    /**
     * General type (CODE32)
     */
    public const TYPE = PicqerBarcodeGenerator::TYPE_CODE_32;
}