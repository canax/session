<?php

namespace Anax\Session;

use \PHPUnit\Framework\TestCase;

/**
 * Testing framework session class.
 */
class SessionConfigurableTest extends TestCase
{
    /**
     * Load configuration from array.
     */
    public function testLoadConfig()
    {
        $session = new SessionConfigurable();
        $session->configure([
            "name" => "someName"
        ]);
        // $session->name();
        // $this->assertEquals("someName", session_name(), "Session name does not match.");
    }
}
