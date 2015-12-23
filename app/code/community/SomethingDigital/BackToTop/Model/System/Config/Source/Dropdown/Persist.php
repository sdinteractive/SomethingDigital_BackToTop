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

class SomethingDigital_BackToTop_Model_System_Config_Source_Dropdown_Persist
{
  public function toOptionArray()
  {
    return array(
      array(
        'value' => 'persist',
        'label' => 'Persist After Scrolling',
      ),
      array(
        'value' => 'scroll',
        'label' => 'Show While Scrolling Up',
      ),
    );
  }
}