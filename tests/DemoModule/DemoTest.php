<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/21
 * Time: 00:26
 */

namespace {{NAMESPACE}}Tests\DemoModule;

use Zan\Framework\Testing\TaskTest;
use {{NAMESPACE}}DemoModule\Service\DemoService;

class DemoTest extends TaskTest
{
    public function taskHello()
    {
        $service = new DemoService();
        $result = (yield $service->hello('World'));

        $this->assertEquals('Hello World!', $result, 'DemoService.hello test failed');
    }
}
