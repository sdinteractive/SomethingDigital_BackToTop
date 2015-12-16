<?php
/**
 * Something Digital
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation the rights to use, copy,
 * modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, subject to the 
 * following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies 
 * or substantial portions of the Software.
 *
 * @package     SomethingDigital_BackToTop
 * @author      Brandyn Bold <brandynbold@gmail.com>
 * @copyright   Copyright (c) 2015 Something Digital
 * @license     https://opensource.org/licenses/MIT  The MIT License (MIT)
 */

class SomethingDigital_BackToTop_Helper_Data extends Mage_Core_Helper_Data
{
    /**
     * Check if module is enabled or not
     * 
     * @return boolean
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('sd_backtotop/options/enabled');
    }

    /**
     * Get The method of persistance
     * 
     * @return int
     */
    public function getPersistMethod()
    {
        return Mage::getStoreConfig('sd_backtotop/options/persist');
    }

    /**
     * Get the speed in which the user is scrolled to the top
     * 
     * @return int
     */
    public function getScrollSpeed()
    {
        return Mage::getStoreConfig('sd_backtotop/options/scroll');
    }

    /**
     * Get the text to display in the link
     * 
     * @return string
     */
    public function getText()
    {
        return Mage::getStoreConfig('sd_backtotop/design/frontendtext');
    }
}
