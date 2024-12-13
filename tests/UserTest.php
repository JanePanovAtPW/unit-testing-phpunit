<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    public function testReturnsFullName(){
        require 'User.php';

        $user = new User();
        $user->first_name = "Jane";
        $user->surname = "Panov";

        $this->assertEquals('Jane Panov', $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault(){
        $user = new User();
        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     */
    public function user_has_first_name(){
        $user = new User();
        $user->first_name = "Jane";

        $this->assertEquals("Jane", $user->first_name);
    }
}