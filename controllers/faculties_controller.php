<?php
include '../phpqrcode/phpqrcode.php'; 
class FacultiesController extends AppController {

	var $name = 'Faculties';
	var $helpers = array('Javascript');
function beforeFilter() {    parent::beforeFilter();   $this->Auth->allow('index2','view2');}
	function index() {
		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->paginate());
	}
    
    function index2() {
		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'faculty'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('faculty', $this->Faculty->read(null, $id));
	}
    function view2($nom=null) {
		if (!$nom) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'dependencium'));
			$this->redirect(array('action' => 'index'));
		}
        
        $id2=$this->Faculty->find('all',array('conditions'=>array('faculty.nombre'=>$nom)));
      //  debug($id2);
		$this->set('faculty', $this->Faculty->read(null, $id2['0']['Faculty']['id']));
	}


	function add() {
		if (!empty($this->data)) {
			$this->Faculty->create();
               $cadena='http://localhost/qrcode/Faculties/view2/'.$this->data['Faculty']['nombre'];
             $nombre=$this->data['Faculty']['nombre'];
               header('Content-Type: text/html; charset=UTF-8');
               QRcode::png($cadena, 'img/'.$this->data['Faculty']['nombre'].'.png'); 
			if ($this->Faculty->save($this->data)) {
				$this->Session->setFlash(sprintf(__('La %s fue agregada correctamente', true), 'facultad'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('La %s no fue agregada correctamente. Por favor, intente de nuevo.', true), 'facultad'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'faculty'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Faculty->save($this->data)) {
				$this->Session->setFlash(sprintf(__('la  %s fue actualizada', true), 'facultad'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'faculty'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Faculty->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'faculty'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Faculty->delete($id)) {
			$this->Session->setFlash(sprintf(__('La %s fue eliminada del sistema', true), 'Facultad'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Faculty'));
		$this->redirect(array('action' => 'index'));
	}
}
?>