<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{   
    function testUserInit()
    {
        $u = new User(0, "John", "tailor");
        $this->assertInstanceOf('User', $u);
        
        $ser = serialize($u);

        // var_dump($ser);

        $newobj = unserialize($ser);

        var_dump($newobj->getId());

        // var_dump(unserialize(serialize($u)));
        // print_r(serialize($u));
        // print_r($u);
    }
}
?>