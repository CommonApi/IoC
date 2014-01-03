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
     * Get Contents from Container Entry associated with the key or return false
     *
     * @param   string $key
     *
     * @return  bool
     * @since   0.1
     */
    public function exists($key);

    /**
     * Get Contents from Container Entry associated with the key or return false
     *
     * @param   string $key
     *
     * @return  mixed
     * @since   0.1
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
     * @since   0.1
     */
    public function set($key, $value);

    /**
     * Remove Container Entry associated with the key or return false
     *
     * @param   string $key
     *
     * @return  $this
     * @since   0.1
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function remove($key);

    /**
     * Clone the existing service instance and return the cloned instance
     *
     * @param   string $key
     *
     * @return  object
     * @since   0.1
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function cloneInstance($key);
}
