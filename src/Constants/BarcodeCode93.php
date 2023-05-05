<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * CODE93 format
 */
class BarcodeCode93
{
    use StaticClass;

    /**
     * General type (CODE93)
     */
    public const TYPE = PicqerBarcodeGenerator::TYPE_CODE_93;
}