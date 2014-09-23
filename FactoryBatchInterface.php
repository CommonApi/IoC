<?php
/**
 * Factory Scheduling Interface
 *
 * @package    IoC
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\IoC;

/**
 * Factory Scheduling Interface
 *
 * @package    IoC
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface FactoryBatchInterface
{
    /**
     * Request for array of Products to be removed from the IoC Container
     *
     * @return  array
     * @since   1.0.0
     */
    public function removeContainerEntries();

    /**
     * Request for array of Products and Values to be saved to the IoC Container
     *
     * @return  array
     * @since   1.0.0
     */
    public function setContainerEntries();

    /**
     * Request for array of Factory Methods to be Scheduled
     *
     * @return  array
     * @since   1.0.0
     */
    public function scheduleFactories();
}
