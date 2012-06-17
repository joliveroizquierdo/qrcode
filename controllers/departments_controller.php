<?php

include '../phpqrcode/phpqrcode.php';   

class DepartmentsController extends AppController {

	var $name = 'Departments';
function beforeFilter() { 
    parent::beforeFilter();     $this->Auth->allow('index2','view2');
    }
	function index() {
		$this->Department->recursive = 0;
		$this->set('departments', $this->paginate());
	}
    
    	function index2() {
		$this->Department->recursive = 0;
		$this->set('departments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'department'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('department', $this->Department->read(null, $id));
	}
   	function view2($nom=null) {
		if (!$nom) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'dependencium'));
			$this->redirect(array('action' => 'index'));
		}
        
        $id2=$this->Department->find('all',array('conditions'=>array('department.nombre'=>$nom)));
      //  debug($id2);
		$this->set('department', $this->Department->read(null, $id2['0']['Department']['id']));
	}
    
    	function view3($nom=null) {
		if (!$nom) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'dependencium'));
			$this->redirect(array('action' => 'index'));
		}
        
        $id2=$this->Department->find('all',array('conditions'=>array('department.nombre'=>$nom)));
      //  debug($id2);
		$this->set('department', $this->Department->read(null, $id2['0']['Department']['id']));
	}
    
	function add() {
		if (!empty($this->data)) {
			$this->Department->create();
              $cadena='http://localhost/qrcode/Departments/view2/'.$this->data['Department']['nombre'];
             $nombre=$this->data['Department']['nombre'];
               header('Content-Type: text/html; charset=UTF-8');
               QRcode::png($cadena, 'img/'.$this->data['Department']['nombre'].'.png'); 
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(sprintf(__('El %s fue agregado correctamente', true), 'departamento'));
			//	$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('El %s  no fue agregado correctamente. Por favor intente de nuevo.', true), 'departamento'));
			}
		}
		$faculties = $this->Department->Faculty->find('list',array('fields'=>'nombre'));
		$this->set(compact('faculties'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'department'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Department->save($this->data)) {
				$this->Session->setFlash(sprintf(__('El %s fue actualizado ', true), 'departamento'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'department'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Department->read(null, $id);
		}
			$faculties = $this->Department->Faculty->find('list',array('fields'=>'nombre'));
		$this->set(compact('faculties'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'department'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Department->delete($id)) {
			$this->Session->setFlash(sprintf(__('el %s fue eliminado del sistema', true), 'departemanto'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Department'));
		$this->redirect(array('action' => 'index'));
	}
}
?>