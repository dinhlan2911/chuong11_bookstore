<?php
class GroupModel extends Model
{
	protected $_tableName = TBL_GROUP;
	public function __construct()
	{
		parent::__construct();
		$this->setTable($this->_tableName);
	}

	public function listItem($arrParam, $option = null)
	{
		$query[] = "SELECT `id`, `name`, `group_acp`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`";
		$query[] = "FROM `$this->_tableName`";
		$query = implode(" ", $query);
		$result = $this->listRecord($query);
		return $result;
	}
}