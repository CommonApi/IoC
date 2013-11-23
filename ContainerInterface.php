<?php
/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\IoC;

/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface ContainerInterface
{
    /**
     * Get Instance from Container or return false
     *
     * @param   string $container_key
     *
     * @return  bool|null|object
     * @since   1.0
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
     * @since   1.0
     */
    public function setService($container_key, $instance, $alias = null);

    /**
     * Clone the existing service instance and return the cloned instance
     *
     * @param   string $container_key
     *
     * @return  null|object
     * @since   1.0
     */
    public function cloneService($container_key);

    /**
     * Remove the existing service instance
     *
     * @param   string $container_key
     *
     * @return  $this
     * @since   1.0
     */
    public function removeService($container_key);
}
