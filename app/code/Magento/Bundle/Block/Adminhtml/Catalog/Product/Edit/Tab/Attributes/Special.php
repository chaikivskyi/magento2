<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Bundle\Block\Adminhtml\Catalog\Product\Edit\Tab\Attributes;

/**
 * Bundle Special Price Attribute Block
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Special extends \Magento\Catalog\Block\Adminhtml\Form\Renderer\Fieldset\Element
{
    /**
     * @return string
     */
    public function getElementHtml()
    {
        $html = '<input id="' . $this->getElement()->getHtmlId()
            . '" name="' . $this->getElement()->getName()
            . '" value="' . $this->getElement()->getEscapedValue() . '" '
            . $this->getElement()->serialize($this->getElement()->getHtmlAttributes()) . '/>'
            . "\n" . '<label class="addafter" for="' . $this->getElement()->getHtmlId()
            . '"><strong>[%]</strong></label>';
        return $html;
    }
}
