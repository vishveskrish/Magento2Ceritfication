<?php
/*
 * Krish_Sample

 * @category   Krish
 * @package    Krish_Sample
 * @copyright  Copyright (c) 2018 Vishves Shah
 * @license    
 * @version    1.0.0
 */
namespace Krish\Sample\Model;

use Magento\Framework\Model\AbstractModel;
use Krish\Sample\Api\Data\DataInterface;

class Data extends AbstractModel implements DataInterface
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'krish_sample_data';

    /**
     * Initialise resource model
     * @codingStandardsIgnoreStart
     */
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init('Krish\Sample\Model\ResourceModel\Data');
    }

    /**
     * Get cache identities
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getDataTitle()
    {
        return $this->getData(DataInterface::DATA_TITLE);
    }

    /**
     * Set title
     *
     * @param $title
     * @return $this
     */
    public function setDataTitle($title)
    {
        return $this->setData(DataInterface::DATA_TITLE, $title);
    }

    /**
     * Get data description
     *
     * @return string
     */
    public function getDataDescription()
    {
        return $this->getData(DataInterface::DATA_TITLE);
    }

    /**
     * Set data description
     *
     * @param $description
     * @return $this
     */
    public function setDataDescription($description)
    {
        return $this->setData(DataInterface::DATA_DESCRIPTION, $description);
    }

    /**
     * Get is active
     *
     * @return bool|int
     */
    public function getIsActive()
    {
        return $this->getData(DataInterface::IS_ACTIVE);
    }

    /**
     * Set is active
     *
     * @param $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        return $this->setData(DataInterface::IS_ACTIVE, $isActive);
    }

    /**
     * Get created at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(DataInterface::CREATED_AT);
    }

    /**
     * Set created at
     *
     * @param $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(DataInterface::CREATED_AT, $createdAt);
    }

    /**
     * Get updated at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(DataInterface::UPDATED_AT);
    }

    /**
     * Set updated at
     *
     * @param $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(DataInterface::UPDATED_AT, $updatedAt);
    }
}
