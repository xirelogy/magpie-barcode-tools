<?php

namespace MagpieLib\BarcodeTools;

use Exception;
use Magpie\Exceptions\OperationFailedException;
use Magpie\Exceptions\SafetyCommonException;
use Magpie\General\Concepts\BinaryContentable;
use Magpie\General\Contents\SimpleBinaryContent;
use Magpie\General\Names\CommonMimeType;
use Picqer\Barcode\BarcodeGeneratorPNG as PicqerBarcodeGeneratorPNG;

/**
 * Barcode image generator
 */
class BarcodeImageGenerator
{
    /**
     * @var string Target data
     */
    protected readonly string $data;
    /**
     * @var string Target format
     */
    protected readonly string $format;
    /**
     * @var int Width factor
     */
    protected int $widthFactor;
    /**
     * @var int Height factor
     */
    protected int $heightFactor;


    /**
     * Constructor
     * @param string $data
     * @param string $format
     */
    protected function __construct(string $data, string $format)
    {
        $this->data = $data;
        $this->format = $format;
        $this->widthFactor = 2;
        $this->heightFactor = 30;
    }


    /**
     * Specify width factor
     * @param int $factor
     * @return $this
     */
    public function withWidthFactor(int $factor) : static
    {
        $this->widthFactor = $factor;
        return $this;
    }


    /**
     * Specify height factor
     * @param int $factor
     * @return $this
     */
    public function withHeightFactor(int $factor) : static
    {
        $this->heightFactor = $factor;
        return $this;
    }


    /**
     * Generate a PNG image output
     * @return BinaryContentable
     * @throws SafetyCommonException
     */
    public function generatePng() : BinaryContentable
    {
        try {
            $generator = new PicqerBarcodeGeneratorPNG();
            $data = $generator->getBarcode($this->data, $this->format, $this->widthFactor, $this->heightFactor);
            return SimpleBinaryContent::create($data, CommonMimeType::PNG);
        } catch (Exception $ex) {
            throw new OperationFailedException(previous: $ex);
        }
    }


    /**
     * Create a new generator instance
     * @param string $data
     * @param string $format
     * @return static
     */
    public static function for(string $data, string $format) : static
    {
        return new static($data, $format);
    }
}