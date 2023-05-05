<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * CODE11 format
 */
class BarcodeCode11
{
    use StaticClass;

    /**
     * General type (CODE11)
     */
    public const TYPE = PicqerBarcodeGenerator::TYPE_CODE_11;
}