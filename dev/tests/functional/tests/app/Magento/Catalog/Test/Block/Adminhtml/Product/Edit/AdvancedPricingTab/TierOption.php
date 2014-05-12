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

namespace Magento\Catalog\Test\Block\Adminhtml\Product\Edit\AdvancedPricingTab;

use Mtf\Client\Element;
use Mtf\Client\Element\Locator;
use Mtf\Block\Block;

/**
 * Select Type
 */
class TierOption extends Block
{
    /**
     * Fill
     *
     * @param string $rowPrefix
     * @param array $data
     */
    public function fill($rowPrefix, $data)
    {
        if (isset($data['website'])) {
            $this->_rootElement
                ->find('#' . $rowPrefix . '_website', Locator::SELECTOR_CSS, 'select')
                ->setValue($data['website']);
        }
        if (isset($data['customer_group'])) {
            $this->_rootElement
                ->find('#' . $rowPrefix . '_cust_group', Locator::SELECTOR_CSS, 'select')
                ->setValue($data['customer_group']);
        }
        if (isset($data['price'])) {
            $this->_rootElement->find('#' . $rowPrefix . '_price')->setValue($data['price']);
        }
        if (isset($data['quantity'])) {
            $this->_rootElement->find('#' . $rowPrefix . '_qty')->setValue($data['quantity']);
        }
    }
}
