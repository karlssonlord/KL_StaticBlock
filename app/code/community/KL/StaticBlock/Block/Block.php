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
 * @license   LGPL v2.1 http://choosealicense.com/licenses/lgpl-v2.1/
 * @link      https://github.com/karlssonlord/KL_StaticBlock
 */

/**
 * The Static Block block
 *
 * @category KL
 * @package  StaticBlock
 * @author   Andreas Karlsson <andreas@karlssonlord.com>
 */
class KL_StaticBlock_Block_Block extends Mage_Core_Block_Template
{
    protected $_storeId;
    protected $_blockId;
    protected $_block;

    /**
     * Constructor
     *
     * @return void
     */
    public function _construct()
    {
        parent::_construct();

        $this->_storeId = Mage::app()->getStore()->getId();
    }

    /**
     * Get the title tag for the block
     *
     * @return Mage_Cms_Model_Block
     */
    protected function _getBlock()
    {
        if (!$this->_block) {
            $this->_blockId = $this->getBlockId() ?: $this->getNameInLayout();
            $this->_block   = Mage::getModel('cms/block')
                ->setStoreId($this->_storeId)
                ->load($this->_blockId);
        }

        return $this->_block;
    }

    /**
     * Get the title tag for the block
     *
     * @return string
     */
    public function getTitleTag()
    {
        if (!$this->_titleTag) {
            $this->_titleTag = parent::getTitleTag() ?: 'h2';
        }

        return $this->_titleTag;
    }

    /**
     * Get the title of the CMS block
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->_getBlock()->getTitle();
    }

    /**
     * Get the content of the CMS block
     *
     * @return string
     */
    public function getContent()
    {
        $processor  = Mage::helper('cms')->getBlockTemplateProcessor();
        $rawContent = $this->_getBlock()->getContent();
        $content    = $processor->filter($rawContent);

        return $content;
    }
}
