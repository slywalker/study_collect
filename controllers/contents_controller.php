<?php
class ContentsController extends AppController {
	public $name = 'Contents';
/*
	public function index() {
		$this->Content->recursive = 0;
		$this->paginate = array('foreignKey' => false);
		$this->set('contents', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Content', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('content', $this->Content->read(null, $id));
	}
*/
	public function add() {
		if ($this->data) {
			$this->Content->create();
			if ($this->Content->save($this->data)) {
				$this->Session->setFlash(__('The Content has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('controller' => 'studies', 'action'=>'view', $this->Session->read('Study.id')));
			} else {
				$this->Session->setFlash(__('The Content could not be saved. Please, try again.', true));
			}
		}
	}

	public function edit($id = null) {
		if (!$id && !$this->data) {
			$this->Session->setFlash(__('Invalid Content', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->data) {
			if ($this->Content->save($this->data)) {
				$this->Session->setFlash(__('The Content has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('controller' => 'studies', 'action'=>'view', $this->Session->read('Study.id')));
			} else {
				$this->Session->setFlash(__('The Content could not be saved. Please, try again.', true));
			}
		} else {
			$this->data = $this->Content->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$id) {
			if (isset($this->data['delete'])) {
				if ($this->Content->deleteAll(array('Content.id' => $this->data['delete']))) {
					$this->Session->setFlash(__('Content deleted', true), 'default', array('class' => 'message success'));
				}
			}
		} else {
			if ($this->Content->delete($id)) {
				$this->Session->setFlash(__('Content deleted', true), 'default', array('class' => 'message success'));
			}
		}
		$this->redirect(array('controller' => 'studies', 'action'=>'view', $this->Session->read('Study.id')));
	}

}
?>