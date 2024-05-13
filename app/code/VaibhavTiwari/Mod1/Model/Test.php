<?php

/**
 * UserStory 1
 * 
 * @category UserStory1
 * @package  VaibhavTiwari
 * @author   VaibhavTiwari <vaibhav.tiwari@hbwsl.com>
 * @license  dummy dummy.comm
 * @link     dummy.com
 */

namespace VaibhavTiwari\Mod1\Model;

use VaibhavTiwari\Mod1\Api\CategoryInterface;

/**
 * Test Class implements CategoryInterface
 * 
 * @category UserStory1
 * @package  VaibhavTiwari
 * @author   VaibhavTiwari <vaibhav.tiwari@hbwsl.com>
 * @license  dummy dummy.comm
 * @link     dummy.com
 */

class Test implements CategoryInterface
{
    protected $array;
    protected $string;

    /**
     * Constructor
     * 
     * @param $array  array
     * @param $string string
     */
    public function __construct(array $array, string $string)
    {
        $this->array = $array;
        $this->string = $string;
    }

    /**
     * Display Parameter
     * 
     * @return null
     */
    public function displayParams()
    {
        print_r("Array: " . print_r($this->array, true) . "<br>");
        print_r("String: " . $this->string);
    }
}
