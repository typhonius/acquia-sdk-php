<?php

namespace Acquia\Cloud\Api\Response;

class SiteName extends \Acquia\Common\Element
{
    /**
     * @return string
     */
    public function name()
    {
        return $this['name'];
    }
}
