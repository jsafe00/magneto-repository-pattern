<?php

namespace Thecoachsmb\Mymodule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb 
{
    protected function _construct()
    {
        $this->_init('thecoachsmb_article', 'article_id');
    }
}
