<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();
        $client->request('GET', '/');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }

    public function testError()
    {
        $client = static::createClient();
        $client->request('GET', '/error');

        $this->assertTrue($client->getResponse()->isSuccessful());
    }




}
