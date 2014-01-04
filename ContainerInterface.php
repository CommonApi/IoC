<?php
/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

use CommonApi\Exception\InvalidArgumentException;

/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ContainerInterface
{
    /**
     * Process a Set of Service Requests
     *
     * @param   array $batch_services (array [$service_name] => $options)
     *
     * @return  $this
     * @since   1.0
     */
    public function scheduleServices(array $batch_services = array());

    /**
     * Get a Service, recursively resolving dependencies
     *
     * @param   string $service_name
     * @param   array  $options
     *
     * @return  mixed
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function scheduleService($service_name = null, array $options = array());

    /**
     * Determines if the entry identified by the $key exists within the Container
     *
     * @param   string $key
     *
     * @return  bool
     * @since   1.0
     */
    public function has($key);

    /**
     * Get Contents from Container Entry associated with the key or return false
     *
     * @param   string $key
     *
     * @return  mixed
     * @since   1.0
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function get($key);

    /**
     * Set the Container Entry with the associated value
     *
     * @param   string $key
     * @param   mixed  $value
     *
     * @return  $this
     * @since   1.0
     */
    public function set($key, $value);

    /**
     * Remove the existing service instance
     *
     * @param   string $key
     *
     * @return  $this
     * @since   1.0
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function remove($key);

    /**
     * Clone the existing service instance and return the cloned instance
     *
     * @param   string $key
     *
     * @return  object
     * @since   1.0
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function cloneInstance($key);
}
