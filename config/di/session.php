<?php
/**
 * Configuration file for session service.
 */
return [
    // Services to add to the container.
    "services" => [
        "session" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Anax\Session\SessionConfigurable();
                $obj->configure("session.php");
                return $obj;
            }
        ],
    ],
];
