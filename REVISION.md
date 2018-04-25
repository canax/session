Revision history
=================================


v1.0.10 (2018-04-25)
---------------------------------

* Added Codacy badge.
* Adding service in config/di/session.php.
* Avoid starting the session within the $di callback initiating phase.
* README states that the session should be started using $session->start() within index.php.



v1.0.9 (2018-04-23)
---------------------------------

* Add badge for Codeclimate.
* Make pass scrutinizer by installing phpunit.



v1.0.8 (2018-04-16)
---------------------------------

* Add documentation to README.



v1.0.6 (2017-10-15)
---------------------------------

* Enable destroy() to work on cli, useful for unit testing.



v1.0.5 (2017-10-05)
---------------------------------

* Added debugInfo() to enable var_dump() of the session object.



v1.0.4 (2017-10-02)
---------------------------------

* Add a SessionInterface for type declarations.



v1.0.3 (2017-08-17)
---------------------------------

* Do not start the session when CLI (for example phpunit).



v1.0.2 (2017-08-17)
---------------------------------

* Only unset variable from session if it exists.



v1.0.1 (2017-06-26)
---------------------------------

* Added method to destroy session.



v1.0.0 (2017-05-04)
---------------------------------

* Extracted from anax to be its own module.
