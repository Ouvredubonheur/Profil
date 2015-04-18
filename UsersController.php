<?php 
class UsersController  extends AppController {
	public $scaffold;
	
	/*function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('profil');
	}*/
	
	public function profil($user)
	{
		
		$id = $this->User->find('all',array(
		'conditions' => array('username' => $user),
		'fields'=>array('username','email','age')
		));
		//$avertissement = "Vous avez été déconnecté";
			$this->set('test',$id);	
		
	}
	
	public function monprofil()
	{
	}
	
}
