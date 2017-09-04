<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testAdmin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/blog/{slug}');
    }

    public function testRead()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog/{slug}');
    }

    public function testComment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/blog/comment/{slug}');
    }

}
