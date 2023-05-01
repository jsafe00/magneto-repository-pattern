<?php 

namespace Thecoachsmb\Mymodule\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Thecoachsmb\Mymodule\Model\Item;
use Thecoachsmb\Mymodule\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
    
    protected function _construct()
    {
        $this->_init(
            Item::class,
            ItemResource::class
        );
    }
}

