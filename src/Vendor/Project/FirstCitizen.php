<?php

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vendor\Project;

use InvalidArgumentException;

/**
 * FirstCitizen
 *
 * @author Krzysztof Piasecki
 */
class FirstCitizen
{
    /**
     * Citizen name
     *
     * @type string citizen name
     */
    private $name;

    /**
     * FirstCitizen
     *
     * @param $name citizen name
     *
     * @throws InvalidArgumentException Invalid citizen name
     */
    public function __construct($name)
    {
        if (is_string($name) == false || $name == "") {
            throw new InvalidArgumentException("Invalid citizen name");
        }
        $this->name = $name;
    }

    /**
     * Get citizen name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}