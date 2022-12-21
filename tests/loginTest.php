<?php

class loginTest extends \PHPUnit\Framework\TestCase {
    protected $user;

    public function testLogin() {
        $this->user = new App\login;
        $this->assertEquals( $this->user->login("abc", "abcdef123456"),"login successfull");
    }
}