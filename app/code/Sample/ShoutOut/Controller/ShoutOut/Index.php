<?php
/**
 * Copyright © 2015 Inchoo d.o.o.
 * created by Zoran Salamun(zoran.salamun@inchoo.net)
 */
namespace Sample\ShoutOut\Controller\ShoutOut;

use Magento\Framework\App\Action\Action;

/***
  This is a sample implementation of controllers
  in Magento2. In real life, controllers are rarely
  used.
***/
 
class Index extends Action
{
    /**
     * say hello text
     */
    public function execute()
    {
        die("Shout out for you!!!");
    }
}