<?php 
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/login');

        $this->assertResponseIsSuccessful();
        $client->submitForm('LoginTest', [
            'email' => 'test3@test.com',
            'password' => 'Utilisateur3']);

            $this->assertResponseRedirects();
            $client->followRedirect();
            $this->assertSelectorTextContains('title', 'Bazar en ligne');
    }
}

?>