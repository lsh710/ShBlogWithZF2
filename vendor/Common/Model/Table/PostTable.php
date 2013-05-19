<?php
namespace Common\Model\Table;

use Zend\Db\TableGateway\TableGateway;
use Common\Model\Table\BaseTable;

class PostTable extends BaseTable{
	public function __construct(TableGateway $tableGateway)
	{
		parent::__construct($tableGateway);
	}
	
	public function getPost($id)
	{
		$id  = (int) $id;
		$rowset = $this->tableGateway->select(array('id' => $id));
		$row = $rowset->current();
		if (!$row) {
			throw new \Exception("Could not find row $id");
		}
		return $row;
	}
	
	public function savePost(Post $post)
	{
// 		$data = array(
// 				'artist' => $post->artist,
// 				'title'  => $post->title,
// 		);
	
// 		$id = (int)$Post->id;
// 		if ($id == 0) {
// 			$this->tableGateway->insert($data);
// 		} else {
// 			if ($this->getPost($id)) {
// 				$this->tableGateway->update($data, array('id' => $id));
// 			} else {
// 				throw new \Exception('Form id does not exist');
// 			}
// 		}
	}
	
	public function deletePost($id)
	{
		$this->tableGateway->delete(array('id' => $id));
	}
	
}