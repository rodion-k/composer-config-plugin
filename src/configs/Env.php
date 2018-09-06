<?php

namespace hiqdev\composer\config\configs;

class Env implements \ArrayAccess
{
    public function offsetGet($offset)
    {
        return "%env($offset)%";
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }
}