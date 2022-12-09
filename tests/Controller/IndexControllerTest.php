<?php 
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/index');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains('title', 'Bazar en ligne');
    }
}
?>