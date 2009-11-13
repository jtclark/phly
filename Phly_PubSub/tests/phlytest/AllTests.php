<?php
/**
 * Phly - PHp LibrarY
 * 
 * @category   Phly
 * @package    Phly
 * @subpackage Test
 * @copyright  Copyright (C) 2008 - Present, Matthew Weier O'Phinney
 * @author     Matthew Weier O'Phinney <mweierophinney@gmail.com> 
 * @license    New BSD {@link http://www.opensource.org/licenses/bsd-license.php}
 */

namespace phlytest;

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', '\phlytest\AllTests::main');
}

/**
 * Test helper
 */
require_once dirname(__FILE__) . '/../TestHelper.php';

require_once 'phlytest/PubSubTest.php';
require_once 'phlytest/pubsub/HandleTest.php';
require_once 'phlytest/pubsub/ProviderTest.php';

/**
 * @category   Phly
 * @package    Phly
 * @subpackage Test
 * @copyright  Copyright (c) 2005-2008 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    New BSD {@link http://www.opensource.org/licenses/bsd-license.php}
 */
class AllTests
{
    public static function main()
    {
        \PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new \PHPUnit_Framework_TestSuite('Phly - All Tests');

        $suite->addTestSuite('\phlytest\PubSubTest');
        $suite->addTestSuite('\phlytest\pubsub\ProviderTest');
        $suite->addTestSuite('\phlytest\pubsub\HandleTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == '\phlytest\AllTests::main') {
    AllTests::main();
}