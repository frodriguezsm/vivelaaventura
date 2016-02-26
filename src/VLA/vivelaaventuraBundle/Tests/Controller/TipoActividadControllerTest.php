<?php

namespace VLA\vivelaaventuraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TipoActividadControllerTest extends WebTestCase
{
    public function testNewactividad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/new');
    }

    public function testCreateactividad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/create');
    }

    public function testEditactividad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/edit/(id)');
    }

    public function testUpdateactividad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/update(id)');
    }

    public function testDeleteactividad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete(id)');
    }

    public function testListactividad()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/list');
    }

}
