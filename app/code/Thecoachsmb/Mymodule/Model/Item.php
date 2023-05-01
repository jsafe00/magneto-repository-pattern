<?php

namespace Thecoachsmb\Mymodule\Model;

use Magento\Framework\Model\AbstractModel;
use \Thecoachsmb\Mymodule\Api\Data\ItemInterface;
use \Magento\Framework\DataObject\IdentityInterface;


class Item extends AbstractModel implements ItemInterface, IdentityInterface
{
    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Thecoachsmb\Mymodule\Model\ResourceModel\Item::class);
    }

    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ARTICLE_ID);
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Set Created At
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ARTICLE_ID, $id);
    }

    /**
     * Get Identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::ARTICLE_ID . '_' . $this->getId()];
    }
}