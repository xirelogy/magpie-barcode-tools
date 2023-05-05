<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * CODE39 format
 */
class BarcodeCode39
{
    use StaticClass;

    /**
     * General type (CODE39)
     */
    public const TYPE = PicqerBarcodeGenerator::TYPE_CODE_39;
    /**
     * General type (CODE39), with checksum
     */
    public const TYPE_CHECKED = PicqerBarcodeGenerator::TYPE_CODE_39_CHECKSUM;
}