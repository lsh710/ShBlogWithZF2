<?php
namespace Common\Model\Table;
use Zend\Db\TableGateway\TableGateway;

class BaseTable{
	
	protected $tableGateway;
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGateway = $tableGateway;
	}
	
	public function fetchAll()
	{
// 		$returnArray = array();
// 		foreach($this->tableGateway->select() as $key=>$item)
// 		{
// 			$returnArray[] = $item;
// 		}
// 		return $returnArray;
        return $this->tableGateway->select();
	}
	
// 	public function query($option=null, $start=-1, $limit=0){
		
// 	}
	
}