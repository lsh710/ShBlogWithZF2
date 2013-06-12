<?php
namespace Common\Model;
use Traversable;

abstract class BaseModelObject{

	public function exchangeArray($data)
	{
	   $this->setOptions($data);
	}
	
	public function setOptions($options){
		if(is_array($options) || ($options instanceof Traversable))
		{
			foreach ($options as $key => $value) {
	            $method = 'set' . ucfirst($key);
	            if (method_exists($this, $method)) {
	                $this->$method($value);
	            }
	        }
            return $this;
		}
	}
}