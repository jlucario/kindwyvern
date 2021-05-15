<?php
/**
 * @copyright  Vertex. All rights reserved.  https://www.vertexinc.com/
 * @author     Mediotype                     https://www.mediotype.com/
 */

namespace Vertex\Tax\Model\ResourceModel\CustomerCode;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vertex\Tax\Model\Data\CustomerCode as Model;
use Vertex\Tax\Model\ResourceModel\CustomerCode as ResourceModel;

/**
 * Collection of Customer Codes
 */
class Collection extends AbstractCollection
{
    /**
     * {@inheritdoc}
     *
     * MEQP2 Warning: Protected method.  Needed to override AbstractDb's _construct
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
