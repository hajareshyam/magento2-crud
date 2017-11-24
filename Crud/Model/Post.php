<?php 
namespace Fermion\Crud\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
\Fermion\Crud\Model\Api\Data\PostInterface
{
    const CACHE_TAG = 'fermion_crud_post';

    protected $_cacheTag = 'fermion_crud_post';

    protected $_eventPrefix = 'fermion_crud_post';

    protected function _construct()
    {
        $this->_init('Fermion\Crud\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}