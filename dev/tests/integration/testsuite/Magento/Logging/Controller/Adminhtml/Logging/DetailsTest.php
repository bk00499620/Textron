<?php
/***
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Logging\Controller\Adminhtml\Logging;

class DetailsTest extends \Magento\TestFramework\TestCase\AbstractBackendController
{
    public function setUp()
    {
        $this->resource = 'Magento_Logging::magento_logging_events';
        $this->uri = 'backend/admin/logging/details';
        parent::setUp();
    }
}
