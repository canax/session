<?php

namespace Anax\Session;

use \PHPUnit\Framework\TestCase;

/**
 * Testing framework session class.
 */
class SessionTest extends TestCase
{
    // /**
    //  * Set the name of the session
    //  */
    // public function testSetName()
    // {
    //     $session = new Session();
    //
    //     $name = "someName";
    //     $session->name($name);
    //     $this->assertEquals($name, session_name(), "Session name does not match.");
    // }



    /**
     * Test
     */
    public function testGetSetHas()
    {
        $session = new Session();

        $ret = $session->has("key");
        $this->assertFalse($ret, "Session should not have this entry.");

        $ret = $session->get("key");
        $this->assertNull($ret, "Session should return null for this entry.");

        $ret = $session->set("key", "value");
        $ret = $session->has("key");
        $this->assertTrue($ret, "Session should have this entry.");

        $ret = $session->get("key");
        $this->assertEquals($ret, "value", "Session should have a value for this entry.");
    }



    /**
     * Test
     */
    public function testGetOnce()
    {
        $session = new Session();

        $ret = $session->set("key", "value");
        $ret = $session->getOnce("key");
        $this->assertEquals($ret, "value", "Session should have a value for this entry.");

        $ret = $session->get("key");
        $this->assertNull($ret, "Session should return null for this entry.");
    }
}
