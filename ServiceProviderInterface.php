<?php
/**
 * Service Provider Interface
 *
 * @package    IoC
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

use CommonApi\Exception\RuntimeException;

/**
 * Service Provider Interface
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface ServiceProviderInterface
{
    /**
     * Service Provider can use this method to define Service Dependencies
     *  or use the Service Dependencies automatically defined by Reflection processes
     *
     * @param   array $reflection
     *
     * @return  boolean|array
     * @since   1.0
     */
    public function setDependencies(array $reflection = array());

    /**
     * Logic contained within this method is invoked after Dependencies Instances are available
     *  and before the instantiateService Method is invoked
     *
     * @param   array $dependency_values
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeInstantiation(array $dependency_values = null);

    /**
     * Service instantiated automatically or within this method by the Service Provider
     *
     * @return  $this
     * @since   1.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function instantiateService();

    /**
     * Logic contained within this method is invoked after the Service Class construction
     *  and can be used for setter logic or other post-construction processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterInstantiation();

    /**
     * Service Provider Controller requests any Services (other than the current service) to be saved
     *
     * @return  array
     * @since   1.0
     */
    public function setServices();

    /**
     * Service Provider can request additional Service Providers be added to the queue
     *  for processing. Method executed following onAfterInstantiation.
     *
     * @return  array
     * @since   1.0
     */
    public function scheduleServices();
}
