<?php
/**
 * Service Item Interface
 *
 * @package    IoC
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

/**
 * Service Item interface - handles interaction between IoC and Service Provider to resolve dependencies and create class
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ServiceProviderAdapterInterface
{
    /**
     * Service Provider Controller requests Service Namespace via Adapter from Service Provider
     *
     * @return  string
     * @since   0.1
     */
    public function getServiceNamespace();

    /**
     * Service Provider Controller requests Service Options via Adapter from Service Provider
     *
     * @return  array
     * @since   0.1
     */
    public function getServiceOptions();

    /**
     * Service Provider Controller retrieves "store instance indicator" from Service Provider via the Adapter
     *
     * @return  string
     * @since   0.1
     */
    public function getStoreInstanceIndicator();

    /**
     * Service Provider Controller provides reflection values which the Service Provider can use to set Dependencies
     *  Dependencies are returned to the Service Provider Controller.
     *
     * @param   array $reflection
     *
     * @return  array
     * @since   0.1
     */
    public function setDependencies(array $reflection = null);

    /**
     * Service Provider Controller removes Dependency (Either itself or for if_exists)
     *
     * @param   string $dependency
     *
     * @return  $this
     * @since   0.1
     */
    public function removeDependency($dependency);

    /**
     * Service Provider Controller provides an Instance for Dependency, not sent to the
     *  Service Provider until all Dependencies in place. At that time, the Service Provider Controller
     *  uses onBeforeInstantiation to send satisfied Dependencies to the Service Provider
     *
     * @param   string $dependency
     * @param   object $dependency_value
     *
     * @return  $this
     * @since   0.1
     */
    public function setDependencyInstance($dependency, $dependency_value);

    /**
     * Service Provider Controller requests count of Dependencies not yet satisfied
     *
     * @return  int
     * @since   0.1
     */
    public function getRemainingDependencyCount();

    /**
     * Service Provider Controller shares Dependency Instances with Service Provider for final
     *  processing before creating class
     *
     * @return  $this
     * @since   0.1
     */
    public function onBeforeInstantiation();

    /**
     * Service Provider Controller triggers the Service Provider to Create the Class for the Service
     *
     * @return  object
     * @since   0.1
     */
    public function instantiateService();

    /**
     * Service Provider Controller triggers the Service Provider to execute logic that follows class instantiation,
     *  This is an ideal place to add Setter Dependencies or any other actions that must follow
     *   creating the Class
     *
     * @return  object
     * @since   0.1
     */
    public function onAfterInstantiation();

    /**
     * Service Provider Controller requests Service Instance from Service Provider
     *
     * @return  object
     * @since   0.1
     */
    public function getServiceInstance();

    /**
     * Service Provider Controller requests any other Services that the Service Provider wants to save in Container
     *
     * @return  array
     * @since   0.1
     */
    public function setService();

    /**
     * Service Provider Controller requests any Services that the Service Provider wants removed from Container
     *
     * @return  array
     * @since   0.1
     */
    public function removeService();

    /**
     * Service Provider Controller requests any Services that the Service Provider wants scheduled now that this Service
     *    has been created
     *
     * @return  array
     * @since   0.1
     */
    public function scheduleServices();
}
