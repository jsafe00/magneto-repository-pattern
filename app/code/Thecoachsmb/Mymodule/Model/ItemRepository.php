<?php

namespace Thecoachsmb\Mymodule\Model;

use Thecoachsmb\Mymodule\Api\Data\ItemInterface;
use Thecoachsmb\Mymodule\Api\ItemRepositoryInterface;
use Thecoachsmb\Mymodule\Model\ResourceModel\Item\CollectionFactory;
use Magento\Framework\Exception\CouldNotSaveException;


class ItemRepository implements ItemRepositoryInterface
{
    private $collectionFactory;
    protected $itemFactory;

    public function __construct(
        CollectionFactory $collectionFactory,
        ItemFactory $itemFactory

    )
    {
        $this->collectionFactory = $collectionFactory;
        $this->itemFactory = $itemFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function save(ItemInterface $article)
    {
        try {
           
           $article->save();
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(
                __(sprintf('Could not save Item: %s', $exception->getMessage()))
            );
        }
        return $article;
    }
    

}
