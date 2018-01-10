<?php

namespace Sample\ShoutOutBlock\Block;

class DefaultBlock extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
    $this->setData('randNum',0);
	}

	public function shoutOut()
	{
		return __('Shout out to you!!!');
	}
  
  protected function generateRandomNumber()
  {
    $this->setData('randNum',rand(1,10));
  }
  
  public function shoutOutRandomNumber()
  {
    // generate random number
    $this->generateRandomNumber();
    
    return __($this->getData('randNum'));
  }
}