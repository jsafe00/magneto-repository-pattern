<?php

namespace Thecoachsmb\Mymodule\Api;

use Thecoachsmb\Mymodule\Api\Data\ItemInterface;

interface ItemRepositoryInterface
{
    /**
     * @return \Thecoachsmb\Mymodule\Api\Data\ItemInterface[]
     */
    public function getList();

    /**
     * @param ItemInterface $article
     * @return ItemInterface
     */
    public function save(ItemInterface $article);

}
