<?php
/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

use CommonApi\Exception\InvalidArgumentException;

/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface ContainerInterface
{
    /**
     * Get Instance from Container or return false
     *
     * @param   string $container_key
     *
     * @return  mixed|bool|null|object
     * @since   0.1
     */
    public function getService($container_key);

    /**
     * Set the existing service instance with the passed in object
     *
     * @param   string      $container_key
     * @param   object      $instance
     * @param   null|string $alias
     *
     * @return  $this
     * @since   0.1
     */
    public function setService($container_key, $instance, $alias = null);


    /**
     * Clone the existing service instance and return the cloned instance
     *
     * @param   string $container_key
     *
     * @return  mixed|null|object
     * @since   0.1
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function cloneService($container_key);

    /**
     * Remove the existing service instance
     *
     * @param   string $container_key
     *
     * @return  $this
     * @since   0.1
     */
    public function removeService($container_key);
}
