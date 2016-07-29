<?php

namespace {{NAMESPACE}}DemoModule\Service;


class DemoService
{
    public function hello($value = 'World')
    {
        yield 'Hello ' . $value . '!';
    }
}
