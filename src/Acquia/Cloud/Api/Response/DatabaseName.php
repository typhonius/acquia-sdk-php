<?php

namespace Acquia\Cloud\Api\Response;

class DatabaseName extends Object
{
    /**
     * @return string
     */
    public function name()
    {
        return $this['name'];
    }
}