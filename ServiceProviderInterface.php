<?php
/**
 * Service Provider Interface
 *
 * @package    IoC
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

use CommonApi\Exception\RuntimeException;

/**
 * Service Provider Interface
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface ServiceProviderInterface
{
    /**
     * Set dependencies either from the reflection object or specifically defined in handler
     *
     * @param   array $reflection
     *
     * @return  boolean|array
     * @since   0.1
     */
    public function setDependencies(array $reflection = array());

    /**
     * IoC Service Provider Controller shares Dependency Instances with Service Provider for final processing before creating class
     *     Service Provider adds in any non-class instances parameters
     *
     * @param   array $dependency_instances
     *
     * @return  $this
     * @since   0.1
     */
    public function processFulfilledDependencies(array $dependency_instances = null);

    /**
     * IoC Service Provider Controller triggers the Service Provider to create the Class for the Service
     *
     * @return  $this
     * @since   0.1
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function instantiateService();

    /**
     * IoC Service Provider Controller triggers the Service Provider to execute logic that follows class instantiation,
     *  This is an ideal place to add Setter Dependencies or any other actions that must follow
     *   creating the Class
     *
     * @return  $this
     * @since   0.1
     */
    public function performAfterInstantiationLogic();

    /**
     * IoC Service Provider Controller requests any Services that the Service Provider wants scheduled now that this Service
     *    has been created
     *
     * @return  array
     * @since   0.1
     */
    public function scheduleNextService();
}
