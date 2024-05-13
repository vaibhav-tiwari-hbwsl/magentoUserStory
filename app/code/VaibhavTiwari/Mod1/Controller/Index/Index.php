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
namespace VaibhavTiwari\Mod1\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use VaibhavTiwari\Mod1\Model\Test;

/**
 * UserStory 1
 * 
 * @category UserStory1
 * @package  VaibhavTiwari
 * @author   VaibhavTiwari <vaibhav.tiwari@hbwsl.com>
 * @license  dummy dummy.comm
 * @link     dummy.com
 */
class Index extends Action
{
    protected $test;

    /**
     * Constructor
     * 
     * @param $context context
     * @param $test    test
     */
    public function __construct(
        Context $context,
        Test $test
    ) {
        parent::__construct($context);
        $this->test = $test;
    }

    /**
     * Execute
     * 
     * @return null
     */
    public function execute()
    {
        $this->test->displayParams();
    }
}
