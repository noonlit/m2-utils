<?php

namespace BabaYaga\Test\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Test extends Action
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        echo "It works!";
    }
}