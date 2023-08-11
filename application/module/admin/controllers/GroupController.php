<?php
class GroupController extends Controller
{
	public function __construct($arrParams)
	{
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	// Hiển thị danh sách group
	public function indexAction()
	{
		$this->_view->_title = 'User Manager: Group';
		$this->_view->Items = $this->_model->listItem($this->_arrParam, null);
		$this->_view->render('group/index');
	}

	// Hiển thị them group
	public function addAction()
	{
		$this->_view->_title = 'User Manager: Group : ADD';
		$this->_view->render('group/add');
	}


	public function ajaxStatusAction()
	{
		$result = $this->_model->changeStatus($this->_arrParam, array('task' => 'change-ajax-status'));
		echo json_encode($result);
	}

	public function ajaxACPAction()
	{
		$result = $this->_model->changeStatus($this->_arrParam, array('task' => 'change-ajax-group-acp'));
		echo json_encode($result);
	}

	public function statusAction()
	{
		$this->_model->changeStatus($this->_arrParam, array('task' => 'change-status'));
		URL::redirect(URL::createLink('admin', 'group', 'index'));
	}

	public function trashAction()
	{
		$this->_model->deleteItem($this->_arrParam);
		URL::redirect(URL::createLink('admin', 'group', 'index'));
	}
}