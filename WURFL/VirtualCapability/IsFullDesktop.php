<?php
/**
 * Copyright (c) 2015 ScientiaMobile, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Refer to the COPYING.txt file distributed with this package.
 *
 *
 * @category   WURFL
 * @copyright  ScientiaMobile, Inc.
 * @license     GNU Affero General Public License
 */
/**
 * Virtual capability helper
 */

class WURFL_VirtualCapability_IsFullDesktop extends WURFL_VirtualCapability
{
    protected $required_capabilities = array('ux_full_desktop');

    protected function compute()
    {
        return ($this->device->ux_full_desktop === 'true');
    }
}
