<?php

/**
 * FINE granularity DIFF.
 *
 * Computes a set of instructions to convert the content of
 * one string into another.
 *
 * Originally created by Raymond Hill (https://github.com/gorhill/PHP-FineDiff), brought up
 * to date by Cog Powered (https://github.com/iphis/FineDiff).
 *
 * @copyright Copyright 2011 (c) Raymond Hill (http://raymondhill.net/blog/?p=441)
 * @copyright Copyright 2013 (c) Robert Crowe (http://iphis.com)
 *
 * @link https://github.com/iphis/FineDiff
 *
 * @version 0.0.1
 *
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace iphis\FineDiff\Granularity;

interface GranularityInterface extends \ArrayAccess, \Countable
{
    public function offsetExists($offset);

    public function offsetGet($offset);

    public function offsetSet($offset, $value);

    public function offsetUnset($offset);

    public function count();

    /**
     * Get the delimiters that make up the granularity.
     *
     * @return array
     */
    public function getDelimiters();

    /**
     * Set the delimiters that make up the granularity.
     *
     * @param array $delimiters
     *
     * @return void
     */
    public function setDelimiters(array $delimiters);
}
