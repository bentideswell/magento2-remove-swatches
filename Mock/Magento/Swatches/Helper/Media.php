<?php
/**
 * Copyright 2015 Adobe
 * All Rights Reserved.
 */
namespace Magento\Swatches\Helper;

/**
 * Helper to move images from tmp to catalog directory
 * @api
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @since 100.0.2
 */
class Media extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Swatch area inside media folder
     *
     */
    public const  SWATCH_MEDIA_PATH = 'attribute/swatch';

    /**
     * Method to get swatch attribute image.
     *
     * @param string $swatchType
     * @param string $file
     * @return string
     */
    public function getSwatchAttributeImage($swatchType, $file)
    {
        return '';
    }

    /**
     *
     */
    public function moveImageFromTmp($file)
    {
       
        return '';
    }

    /**
     *
     */
    public function generateSwatchVariations($imageUrl)
    {
        return $this;
    }

    /**
     *
     */
    public function getFolderNameSize($swatchType, $imageConfig = null)
    {
        return '';
    }

    /**
     *
     */
    public function getImageConfig()
    {
        return [];
    }

    /**
     *
     */
    public function getSwatchMediaUrl()
    {
        return '';
    }

    /**
     * Return example: attribute/swatch/m/a/magento.jpg
     *
     * @param string $file
     * @return string
     */
    public function getAttributeSwatchPath($file)
    {
        return '';
    }

    /**
     * Media swatch path
     *
     * @return string
     */
    public function getSwatchMediaPath()
    {
        return '';
    }

    /**
     * Media path with swatch_image or swatch_thumb folder
     *
     * @param string $swatchType
     * @return string
     */
    public function getSwatchCachePath($swatchType)
    {
        return '';
    }
}
