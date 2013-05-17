<?php

namespace Gajdaw\AngazeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EmployeeSubjectControllerTest extends WebTestCase
{

    public function testUrl()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // create a new entry in the database
        $crawler = $client->request('GET', '/employeesubject/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /course/");


    }


}