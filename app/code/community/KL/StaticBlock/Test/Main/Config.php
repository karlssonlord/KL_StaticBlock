<?php
/**
 * Static Block
 * Copyright (C) 2013 Karlsson & Lord AB
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category  KL
 * @package   StaticBlock
 * @author    Andreas Karlsson <andreas@karlssonlord.com>
 * @copyright 2013 Karlsson & Lord AB
 * @license   GPL v2 http://choosealicense.com/licenses/gpl-v2/
 * @link      https://github.com/karlssonlord/KL_StaticBlock
 */

/**
 * Configuration tests
 *
 * @category KL
 * @package  StaticBlock
 * @author   Andreas Karlsson <andreas@karlssonlord.com>
 */
class KL_StaticBlock_Test_Main_Config extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * Assert the block alias
     *
     * @return void
     */
    public function testBlockAlias()
    {
        $this->assertBlockAlias(
            'staticblock/test',
            'KL_StaticBlock_Block_Test'
        );
    }

    /**
     * Assert the helper alias
     *
     * @return void
     */
    public function testHelperAlias()
    {
        $this->assertHelperAlias(
            'staticblock/test',
            'KL_LessFriction_Helper_Test'
        );
    }

    /**
     * Assert the code pool
     *
     * @return void
     */
    public function testCodepool()
    {
        $this->assertModuleCodePool('community');
    }

    /**
     * Assert the module dependencies
     *
     * @return void
     */
    public function testDepends()
    {
        $this->assertModuleDepends('Mage_Cms');
        $this->assertModuleDepends('Mage_Core');
    }
}
