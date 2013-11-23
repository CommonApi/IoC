<?php
/**
 * Service Handler Interface
 *
 * @package    IoC
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\IoC;

/**
 * Service Handler Interface
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface ServiceHandlerInterface
{
    /**
     * Retrieve the name of the Service
     *
     * @return  string
     * @since   1.0
     */
    public function getServiceName();

    /**
     * Retrieve the name of the Handler Namespace
     *
     * @return  string
     * @since   1.0
     */
    public function getServiceNamespace();

    /**
     * Retrieve the Service Options
     *
     * @return  array
     * @since   1.0
     */
    public function getServiceOptions();

    /**
     * IoC Controller retrieves "store instance indicator" from DI Handler
     *
     * @return  string
     * @since   1.0
     */
    public function getStoreInstanceIndicator();

    /**
     * Set dependencies either from the reflection object or specifically defined in handler
     *
     * @param   array $reflection
     *
     * @return  boolean|array
     * @since   1.0
     */
    public function setDependencies(array $reflection = array());

    /**
     * IoC Controller shares Dependency Instances with DI Handler for final processing before creating class
     *     DI Handler adds in any non-class instances parameters
     *
     * @param   array $dependency_instances
     *
     * @return  $this
     * @since   1.0
     */
    public function processFulfilledDependencies(array $dependency_instances = null);

    /**
     * IoC Controller triggers the DI Handler to Create the Class for the Service
     *
     * @return  $this
     * @since   1.0
     */
    public function instantiateService();

    /**
     * IoC Controller triggers the DI Handler to execute logic that follows class instantiation,
     *  This is an ideal place to add Setter Dependencies or any other actions that must follow
     *   creating the Class
     *
     * @return  $this
     * @since   1.0
     */
    public function performAfterInstantiationLogic();

    /**
     * IoC Controller requests Service Instance from DI Handler
     *
     * @return  object
     * @since   1.0
     */
    public function getServiceInstance();

    /**
     * IoC Controller requests any other Services that the DI Handler wants to save in Container
     *
     * @return  array
     * @since   1.0
     */
    public function setService();

    /**
     * IoC Controller requests any Services that the DI Handler wants removed from Container
     *
     * @return  array
     * @since   1.0
     */
    public function removeService();

    /**
     * IoC Controller requests any Services that the DI Handler wants scheduled now that this Service
     *    has been created
     *
     * @return  array
     * @since   1.0
     */
    public function scheduleNextService();
}
