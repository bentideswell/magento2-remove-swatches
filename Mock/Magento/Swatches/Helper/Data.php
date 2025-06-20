<?php
/**
 *
 */
namespace Magento\Swatches\Helper;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ResourceModel\Eav\Attribute;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Data
{
    /**
     *
     */
    public const EMPTY_IMAGE_VALUE = 'no_selection';

    /**
     *
     */
    public const DEFAULT_STORE_ID = 0;

    /**

     *
     */
    public function assembleAdditionalDataEavAttribute(Attribute $attribute)
    {
        return $this;
    }

    /**
     *
     */
    public function loadFirstVariationWithSwatchImage(ProductInterface $configurableProduct, array $requiredAttributes)
    {
        return false;
    }

    /**
     *
     */
    public function loadFirstVariationWithImage(ProductInterface $configurableProduct, array $requiredAttributes)
    {
        return false;
    }

    /**
     *
     */
    public function loadVariationByFallback(ProductInterface $parentProduct, array $attributes)
    {
        return false;
    }
  
    /**
     *
     */
    public function getProductMediaGallery(Product $product): array
    {
        return [];
    }
 
    /**
     *
     */
    public function getAttributesFromConfigurable(ProductInterface $product)
    {
        return [];
    }

    /**
     *
     */
    public function getSwatchAttributesAsArray(ProductInterface $product)
    {
        return [];
    }

    /**
     * Get swatch options by option id's according to fallback logic
     *
     * @param array $optionIds
     * @return array
     */
    public function getSwatchesByOptionsId(array $optionIds)
    {
       
        return [];
    }

    /**
     * Check if the Product has Swatch attributes
     *
     * @param ProductInterface $product
     * @return bool
     */
    public function isProductHasSwatch(ProductInterface $product)
    {
        return false;
    }

    /**
     *
     */
    public function isSwatchAttribute(Attribute $attribute)
    {
        return false;
    }

    /**
     *
     */
    public function isVisualSwatch(Attribute $attribute)
    {
        return false;
    }

    /**
     *
     */
    public function isTextSwatch(Attribute $attribute)
    {
        return false;
    }
}
