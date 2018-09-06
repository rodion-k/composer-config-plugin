<?php
/**
 * Composer plugin for config assembling
 *
 * @link      https://github.com/hiqdev/composer-config-plugin
 * @package   composer-config-plugin
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\composer\config\readers;

use hiqdev\composer\config\configs\Env;

/**
 * PhpReader - reads PHP files.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class PhpReader extends AbstractReader
{
    public function readRaw($__path)
    {
        /// Expose variables to be used in configs
        extract($this->builder->getVars());

        $originEnv = $_ENV;
        $_ENV = new Env();

        $return = require $__path;

        $_ENV = $originEnv;

        return $return;
    }
}
