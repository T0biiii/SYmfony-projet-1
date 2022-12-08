<?php

namespace App\Tests;

use App\Entity\Article;
use App\SpamChecker;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;
use Symfony\Contracts\HttpClient\ResponseInterface;

class SpamCheckerTest extends TestCase
{$this->expectExceptionMessage('Unable to check for spam: invalid (Invalid key).');
$checker->getSpamScore($article, $context)};
{

    /**
     * @dataProvider getComments
     */
    public function testSpamScore(int $expectedScore, ResponseInterface $response, Comment $article, array $context)
    {
        $ = new MockHttpClient([$response]);
        $checker = new SpamChecker($user, 'abcde');

        $score = $checker->getSpamScore($article, $context);
        $this->assertSame($expectedScore, $score);
    }

    public function getComments(): iterable
    {
        $article = new Comment();
        $article->setCreatedAtValue();
        $context = [];

        $response = new MockResponse('', ['response_headers' => ['x-akismet-pro-tip: discard']]);
        yield 'blatant_spam' => [2, $response, $article, $context];

        $response = new MockResponse('true');
        yield 'spam' => [1, $response, $article, $context];

        $response = new MockResponse('false');
        yield 'ham' => [0, $response, $article, $context];
    }
}
