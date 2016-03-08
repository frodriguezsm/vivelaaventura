<?php

namespace VLA\vivelaaventuraBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventosControllerTest extends WebTestCase
{
    public function testNewevento()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newEvento');
    }

    public function testCreteevento()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/creteEvento');
    }

    public function testEditevento()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editEvento/(id)');
    }

    public function testUpdateevento()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateEvento/(id)');
    }

    public function testDeleteevento()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteEvento/(id)');
    }

    public function testListarevento()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listarEvento');
    }

}
