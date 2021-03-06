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

namespace iphis\FineDiff\Parser;

use iphis\FineDiff\Exceptions\GranularityCountException;
use iphis\FineDiff\Granularity\GranularityInterface;

interface ParserInterface
{
    /**
     * Creates an instance.
     *
     * @param GranularityInterface $granularity
     */
    public function __construct(GranularityInterface $granularity);

    /**
     * Granularity the parser is working with.
     *
     * Default is Character.
     *
     * @see Character
     * @see Word
     * @see Sentence
     * @see Paragraph
     *
     * @return GranularityInterface
     */
    public function getGranularity();

    /**
     * Set the granularity that the parser is working with.
     *
     * @see Character
     * @see Word
     * @see Sentence
     * @see Paragraph
     *
     * @param GranularityInterface $granularity
     *
     * @return void
     */
    public function setGranularity(GranularityInterface $granularity);

    /**
     * Get the opcodes object that is used to store all the opcodes.
     *
     * @return OpcodesInterface
     */
    public function getOpcodes();

    /**
     * Set the opcodes object used to store all the opcodes for this parse.
     *
     * @param OpcodesInterface $opcodes
     *
     * @return void
     */
    public function setOpcodes(OpcodesInterface $opcodes);

    /**
     * Generates the opcodes needed to transform one string to another.
     *
     * @param string $from_text
     * @param string $to_text
     *
     * @throws GranularityCountException
     *
     * @return OpcodesInterface
     */
    public function parse($from_text, $to_text);
}
