<?php

namespace Gajdaw\AngazeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubjectControllerTest extends WebTestCase
{

    public function testUrlIndex()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // create a new entry in the database
        $crawler = $client->request('GET', '/subject/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /course/");


        $this->assertEquals(1, $crawler->filter('td:contains("Analiza matematyczna")')->count(), 'Missing element td:contains("Analiza matematyczna")');
        $this->assertEquals(1, $crawler->filter('td:contains("Logika algorytmicza")')->count(), 'Missing element td:contains("Logika algorytmicza")');
        $this->assertEquals(1, $crawler->filter('td:contains("Sieci")')->count(), 'Missing element td:contains("Sieci")');
        $this->assertEquals(1, $crawler->filter('td:contains("Bazy danych")')->count(), 'Missing element td:contains("Bazy danych")');






    }


}