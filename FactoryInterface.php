<?php
/**
 * Factory Method Interface
 *
 * @package    IoC
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

use CommonApi\Exception\RuntimeException;

/**
 * Factory Method Interface
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface FactoryInterface
{
    /**
     * Factory Method can use this method to define Dependencies
     *  or use the Dependencies automatically defined by Reflection processes
     *
     * @param   array $reflection
     *
     * @return  array
     * @since   1.0.0
     */
    public function setDependencies(array $reflection = array());

    /**
     * Logic contained within this method is invoked after Dependencies Instances are available
     *  and before the instantiateClass Method is invoked
     *
     * @param   array $dependency_values
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeInstantiation(array $dependency_values = array());

    /**
     * Class instantiated automatically or within this method by the Factory Method
     *
     * @return  $this
     * @since   1.0.0
     * @throws  \CommonApi\Exception\RuntimeException
     */
    public function instantiateClass();

    /**
     * Logic contained within this method is invoked after the Class construction
     *  Can be used for setter logic or other post-construction processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterInstantiation();
}
