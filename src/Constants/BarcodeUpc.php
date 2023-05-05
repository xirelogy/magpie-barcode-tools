<?php

namespace MagpieLib\BarcodeTools\Constants;

use Magpie\General\Traits\StaticClass;
use Picqer\Barcode\BarcodeGenerator as PicqerBarcodeGenerator;

/**
 * UPC format
 */
class BarcodeUpc
{
    use StaticClass;

    /**
     * UPC-A
     */
    public const A = PicqerBarcodeGenerator::TYPE_UPC_A;
    /**
     * UPC-E
     */
    public const E = PicqerBarcodeGenerator::TYPE_UPC_E;
    /**
     * UPC EAN2
     */
    public const EAN2 = PicqerBarcodeGenerator::TYPE_EAN_2;
    /**
     * UPC EAN5
     */
    public const EAN5 = PicqerBarcodeGenerator::TYPE_EAN_5;
    /**
     * UPC EAN8
     */
    public const EAN8 = PicqerBarcodeGenerator::TYPE_EAN_8;
    /**
     * UPC EAN13
     */
    public const EAN13 = PicqerBarcodeGenerator::TYPE_EAN_13;
}