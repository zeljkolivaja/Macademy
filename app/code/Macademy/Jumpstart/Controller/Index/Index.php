<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
    ) {
    }

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
