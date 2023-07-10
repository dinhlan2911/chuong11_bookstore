<?php
class GroupController extends Controller
{
	public function __construct($arrParams)
	{
		// parent::__construct($arrParams);
		// $this->_templateObj->setFolderTemplate('student/main/');
		// $this->_templateObj->setFileTemplate('index.php');
		// $this->_templateObj->setFileConfig('template.ini');
		// $this->_templateObj->load();
	}

	// Hiển thị danh sách group
	public function indexAction()
	{
		echo '<h3>' . __METHOD__ . '</h3>';
		$this->_view->render('group/index');
	}
}