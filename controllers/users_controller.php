<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Javascript');
    //    var $components = array( 'Ssl' );
    //var $components=array('Auth');
    
  	function beforeFilter() {
  	 parent::beforeFilter(); 
  	// $this->Auth->userModel = 'Administrator'; 
 //		$this->Auth->autoRedirect = false;
   //     $this->Auth->allowedActions = array('controller'=>'departments','action' => 'view2');
       
   //     $this->Auth->fields = array('username' => 'username', 'password' => 'password');
        //$this->Auth->authorize = 'no esta auorizado';
        //debug($requireAuth());
    }
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
    
    
    function menu(){
        
    }
    
       function login() {   
         //  $this->Ssl->force();    
                  	if($this->Session->read('Auth.User.username') != '' && $this->Session->read('Auth.User.email') != ''){
                  	 $this->redirect(array('action' => 'menu'));
                       }
                     else{
                        if(!empty($this->data)){
                      $this->Session->setFlash('Error, datos incorrectos, digite corrrectamente sus datos');
							
                     }
                  }
            
       } 
          function logout() {   
            $this->redirect($this->Auth->logout());   
             }

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
			 $this->Auth->password($this->data['User']['password']);
				$this->Session->setFlash(sprintf(__('El %s fue creado correctamente', true), 'usuario'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('El %s no fue creado correctamente. Por favor, intente de nuevo.', true), 'usuario'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'user'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(sprintf(__('Los datos del %s fueron actualizados', true), 'usuario'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'user'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'user'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(sprintf(__('El %s fue eliminado del sistema', true), 'usuario'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('El %s no se pudo eliminar', true), 'Usuario'));
		$this->redirect(array('action' => 'index'));
	}
}
?>