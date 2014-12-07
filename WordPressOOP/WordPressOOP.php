<?php

namespace WordPressOOP;

class WordPressOOP
{
    /**
     * Array containing all services used by the plugin.
     *
     * @var array
     */
    protected $services = array();

    /**
     * Magic method for retrieving services from the container.
     *
     * @param string $service
     * @return null|object
     */
    public function __get($service)
    {
        if ( ! isset($this->services[$service]))
            return null;

        return $this->services[$service]($this);
    }

    /**
     * Magic method for adding services to the container.
     *
     * @param string $service
     * @param callable $callback
     * @return void
     */
    public function __set($service, $callback)
    {
        $this->services[$service] = $callback;
    }
}
