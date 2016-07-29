<?php

namespace {{NAMESPACE}}Controller\Index;


use {{NAMESPACE}}DemoModule\Service\DemoService;
use Zan\Framework\Foundation\Domain\HttpController as Controller;

class IndexController extends Controller
{
    public function index()
    {
        $service = new DemoService();
        yield taskSleep(20);

        $welcome = (yield $service->hello('World'));
        $this->assign('welcome', $welcome);

        yield $this->display('DemoModule/Test');
    }
}
