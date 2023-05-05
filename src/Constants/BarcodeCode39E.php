<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * CODE39E format
 */
class BarcodeCode39E
{
    use StaticClass;

    /**
     * General type (CODE39E)
     */
    public const TYPE = PicqerBarcodeGenerator::TYPE_CODE_39E;
    /**
     * General type (CODE39E), with checksum
     */
    public const TYPE_CHECKED = PicqerBarcodeGenerator::TYPE_CODE_39E_CHECKSUM;
}