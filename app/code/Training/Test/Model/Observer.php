<?php
namespace Training\Test\Model;

use Magento\Framework\Event\ObserverInterface;

class Observer implements ObserverInterface
{

    /**
     * Checking whether the using static urls in WYSIWYG allowed event
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
//        $request = $observer->getEvent()->getData('request');
//        $request->setModuleName('catalog');
//        $request->setControllerName('product');
//        $request->setActionName('view');
//        $request->setParams(array('id' => 1));
    }
}
