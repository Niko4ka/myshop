<?php
class Phone implements ProductInterface 
{
	protected $title = "";
	protected $price = 0;
	public function __construct($foo, $bar)
	{
		$this->title = $foo;
		$this->price = $bar;
	}
	public function price()
	{
		if (isset($_SESSION["currency"]) &&  $_SESSION["currency"] == 0) {
	        $this->price .= " $";
	    } else {
	        $this->price .= " p";
	    }
	    return $this->price;
	}
	public function title()
	{
		return $this->title;
	}
	public function img() 
	{
		return "http://demo.opencart.com/image/cache/catalog/demo/htc_touch_hd_1-228x228.jpg";
	}
	public function call()
	{
		
	}
}