<?php
/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

use CommonApi\Exception\InvalidArgumentException;

/**
 * Inversion of Control Container
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ContainerInterface
{
    /**
     * Determines if the entry identified by the $key exists within the Container
     *
     * @param   string $key
     *
     * @return  bool
     * @since   1.0.0
     */
    public function has($key);

    /**
     * Get Contents from Container Entry associated with the key or return false
     *
     * @param   string $key
     *
     * @return  mixed
     * @since   1.0.0
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
     * @since   1.0.0
     */
    public function set($key, $value);

    /**
     * Remove the existing service instance
     *
     * @param   string $key
     *
     * @return  $this
     * @since   1.0.0
     * @throws  \CommonApi\Exception\InvalidArgumentException
     */
    public function remove($key);
}
