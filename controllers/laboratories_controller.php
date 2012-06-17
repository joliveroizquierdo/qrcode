<?php
include '../phpqrcode/phpqrcode.php'; 
class LaboratoriesController extends AppController {

	var $name = 'Laboratories';
function beforeFilter() {    parent::beforeFilter();     $this->Auth->allow('index2','view2');}
	function index() {
		$this->Laboratory->recursive = 0;
		$this->set('laboratories', $this->paginate());
	}

function index2() {
		$this->Laboratory->recursive = 0;
		$this->set('laboratories', $this->paginate());
	}
    
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'laboratory'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('laboratory', $this->Laboratory->read(null, $id));
	}

function view2($nom=null) {
		if (!$nom) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'laboratory'));
			$this->redirect(array('action' => 'index'));
		}
        
        $id2=$this->Laboratory->find('all',array('conditions'=>array('laboratory.nombre'=>$nom)));
      //  debug($id2);
		$this->set('laboratory', $this->Laboratory->read(null, $id2['0']['Laboratory']['id']));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Laboratory->create();
               $cadena='http://localhost/qrcode/Laboratories/view/'.$this->data['Laboratory']['nombre'];
             $nombre=$this->data['Laboratory']['nombre'];
               header('Content-Type: text/html; charset=UTF-8');
               QRcode::png($cadena, 'img/'.$this->data['Laboratory']['nombre'].'.png'); 
			if ($this->Laboratory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('El %s fue agregado correctamente', true), 'laboratorio'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('El %s no fue agregado. Por favor, intentelo nuevamente.', true), 'laboratorio'));
			}
		}
		$departments = $this->Laboratory->Department->find('list',array('fields'=>'nombre'));
		$this->set(compact('departments'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'laboratory'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Laboratory->save($this->data)) {
				$this->Session->setFlash(sprintf(__('El %s fue actualizado', true), 'laboratorio'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('El %s no fue actulizado. Por favor, intentelo de nuevo.', true), 'laboratorio'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Laboratory->read(null, $id);
		}
		$departments = $this->Laboratory->Department->find('list',array('fields'=>'nombre'));
		$this->set(compact('departments'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'laboratory'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Laboratory->delete($id)) {
			$this->Session->setFlash(sprintf(__('El %s fue eliminado del sistema', true), 'Laboratorio'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('The %s was not deleted', true), 'Laboratory'));
		$this->redirect(array('action' => 'index'));
	}
}
?>