<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vendor\Project;

use Vendor\Project\FirstCitizen;

class FirstCitizenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers FirstCitizenTest
     */
    public function testConstruct()
    {
        $firstCitizen = new FirstCitizen("John Doe");
        $this->assertSame("John Doe", $firstCitizen->getName());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid citizen name
     */
    public function testConstructNoArguments()
    {
        $firstCitizen = @new FirstCitizen();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Invalid citizen name
     */
    public function testConstructEmptyName()
    {
        $firstCitizen = new FirstCitizen(123);
    }
}
