<?php
namespace Training\Test\Observer;

use Magento\Framework\Event\ObserverInterface;

class Logger implements ObserverInterface
{
    protected $_logger = null;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        return;
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->_logger->addDebug("--------\n\n\n BODY \n\n\n " . $body);
    }
}