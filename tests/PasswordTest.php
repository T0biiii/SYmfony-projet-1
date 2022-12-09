<?php

namespace App\tests;

use App\PasswordChecker;
use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase
{
    public function testTrue(){
    $essai = new PasswordChecker("zaexazeaz");
    $result= $essai->passwordCheck2();
    $this->assertFalse($result);
    }
}
?>