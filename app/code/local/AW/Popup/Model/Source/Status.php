<?php
/**
 * aheadWorks Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://ecommerce.aheadworks.com/AW-LICENSE.txt
 *
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento community edition
 * aheadWorks does not guarantee correct work of this extension
 * on any other Magento edition except Magento community edition.
 * aheadWorks does not provide extension support in case of
 * incorrect edition usage.
 * =================================================================
 *
 * @category   AW
 * @package    AW_Popup
 * @version    1.2.0
 * @copyright  Copyright (c) 2010-2012 aheadWorks Co. (http://www.aheadworks.com)
 * @license    http://ecommerce.aheadworks.com/AW-LICENSE.txt
 */


class AW_Popup_Model_Source_Status extends AW_Popup_Model_Source_Abstract
{
    const ENABLED_ID = 1;
    const DISABLED_ID = 2;

    const ENABLED_NAME = 'Enabled';
    const DISABLED_NAME = 'Disabled';

    public function toOptionArray()
    {
        $helper = $this->_getHelper();
        return array(
            array('value' => self::ENABLED_ID, 'label' => $helper->__(self::ENABLED_NAME)),
            array('value' => self::DISABLED_ID, 'label' => $helper->__(self::DISABLED_NAME)),
        );
    }
}