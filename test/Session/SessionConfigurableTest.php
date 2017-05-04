<?php

namespace Anax\Session;

/**
 * Testing framework session class.
 *
 */
class SessionConfigurableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     */
    public function testLoadConfig()
    {
        $session = new SessionConfigurable();
        $session->configure([
            "name" => "someName"
        ]);
        $session->name();
        $this->assertEquals("someName", session_name(), "Session name does not match.");
    }
}
