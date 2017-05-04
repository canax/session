<?php

namespace Anax\Session;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;

/**
 * Class for wrapping sessions.
 *
 */
class SessionConfigurable extends Session implements ConfigureInterface
{
    use ConfigureTrait;



    /**
     * Set a session name from argument or from configuration.
     *
     * @param array $name to set as session name.
     *
     * @return self
     */
    public function name($name = null)
    {
        $name = isset($this->config['name'])
            ? $this->config['name']
            : $name;

        return parent::name($name);
    }
}
