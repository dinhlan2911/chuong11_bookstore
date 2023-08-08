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

	public function changeStatus($arrParam, $option = null)
	{
		if ($option['task'] == 'change-ajax-status') {
			$status = ($arrParam['status'] == 0) ? 1 : 0;
			$id		= $arrParam['id'];
			$query	= "UPDATE `$this->table` SET `status` = $status WHERE `id` = '" . $id . "'";
			$this->query($query);

			$result = array(
				'id'		=> $id,
				'status'	=> $status,
				'link'		=> URL::createLink('admin', 'group', 'ajaxStatus', array('id' => $id, 'status' => $status))
			);
			return $result;
		}

		if ($option['task'] == 'change-ajax-group-acp') {
			$group_acp 	= ($arrParam['group_acp'] == 0) ? 1 : 0;
			$id			= $arrParam['id'];
			$query		= "UPDATE `$this->table` SET `group_acp` = $group_acp WHERE `id` = '" . $id . "'";
			$this->query($query);

			$result = array(
				'id'		=> $id,
				'group_acp'	=> $group_acp,
				'link'		=> URL::createLink('admin', 'group', 'ajaxACP', array('id' => $id, 'group_acp' => $group_acp))
			);
			return $result;
		}
	}
}