# KL_StaticBlock

This is a Magento module which we use for making better use of the standard CMS static blocks. We often lack a really smooth way to get the title from the blocks. This module addresses that and enables us to make text blocks which are easy to administer for our clients.

## Installation

The easiest way to install the module is by using [modman](https://github.com/colinmollenhour/modman):

1. `modman clone git://github.com/karlssonlord/KL_StaticBlock.git`
2. `modman deploy KL_StaticBlock`

## Usage

In your layout file you can use this either as:

```
<block type="staticblock/block" name="identifier-of-your-cms-static-block">
    <action method="setTemplate"><template>kl/staticblock/block.phtml</template></action>
</block>
```

... or:

```
<block type="staticblock/block" name="name-of-your-choosing">
    <action method="setTemplate"><template>kl/staticblock/block.phtml</template></action>
    <action method="setBlockId"><template>identifier-of-your-cms-static-block</template></action>
</block>
```

If you want another heading level than `<h2>` for the title of the CMS block you can easily change it from the layout file by adding `<action method="setTitleTag"><title_tag>h3</title_tag></action>` to the block.

## License

[GPL v2](http://choosealicense.com/licenses/gpl-v2/)
