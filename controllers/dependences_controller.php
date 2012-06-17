<?php
include '../phpqrcode/phpqrcode.php';   
class DependencesController extends AppController {

	var $name = 'Dependences';
function beforeFilter() {    parent::beforeFilter();     $this->Auth->allow('index2','view2');}
	function index() {
		$this->Dependence->recursive = 0;
		$this->set('dependences', $this->paginate());
	}
    	function index2() {
		$this->Dependence->recursive = 0;
		$this->set('dependences', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'dependence'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dependence', $this->Dependence->read(null, $id));
	}

	function view2($nom=null) {
		if (!$nom) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'dependence'));
			$this->redirect(array('action' => 'index'));
		}
        
        $id2=$this->Dependence->find('all',array('conditions'=>array('dependence.nombre'=>$nom)));
      //  debug($id2);
		$this->set('dependence', $this->Dependence->read(null, $id2['0']['Dependence']['id']));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dependence->create();
              $cadena='http://localhost/qrcode/Dependences/view2/'.$this->data['Dependence']['nombre'];
             $nombre=$this->data['Dependence']['nombre'];
               header('Content-Type: text/html; charset=UTF-8');
               QRcode::png($cadena, 'img/'.$this->data['Dependence']['nombre'].'.png'); 
			if ($this->Dependence->save($this->data)) {
				$this->Session->setFlash(sprintf(__('La %s fue agregada correctamente', true), 'oficina'));
			//	$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('La %s fue no agregada correctamente. Por favor, intente de nuevo.', true), 'oficina'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'dependence'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dependence->save($this->data)) {
				$this->Session->setFlash(sprintf(__('La %s fue actualizada', true), 'oficinae'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'dependence'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dependence->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'dependence'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dependence->delete($id)) {
			$this->Session->setFlash(sprintf(__('La %s fue eliminada del sistema', true), 'oficina'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Dependence'));
		$this->redirect(array('action' => 'index'));
	}
}
?>