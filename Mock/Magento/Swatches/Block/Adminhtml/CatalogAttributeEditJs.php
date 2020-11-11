<?php
/**
 *
 */
namespace Magento\Swatches\Block\Adminhtml;

class CatalogAttributeEditJs extends \Magento\Backend\Block\Template
{
    /**
     * @return string
     */
    public function toHtml()
    {
        $this->setData(
            'jsonHelper', 
            \Magento\Framework\App\ObjectManager::getInstance()->get(\Magento\Catalog\Helper\Data::class)
        );
        
        return parent::toHtml();
    }
}
