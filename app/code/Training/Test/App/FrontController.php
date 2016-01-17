<?php
namespace Training\Test\App;
class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList
     */
    protected $_routerList;

    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $response;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * @param RouterList $routerList
     * @param \Magento\Framework\App\Response\Http $response
     * @param \Psr\Log\LoggerInterface
     */
    public function __construct(\Magento\Framework\App\RouterList $routerList,
                                \Magento\Framework\App\Response\Http $response,
                                \Psr\Log\LoggerInterface $logger)
    {
        $this->_logger = $logger;
        parent::__construct($routerList,$response);
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->_logger->addDebug(get_class($router));
        }
        return parent::dispatch($request);
    }
}