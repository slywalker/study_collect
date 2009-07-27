<?php
class TagsController extends AppController {
	public $name = 'Tags';

	public function index() {
		$this->Tag->recursive = 0;
		$this->set('tags', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Tag', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}

	public function add() {
		if ($this->data) {
			$this->Tag->create();
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(__('The Tag has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('controller' => 'studies', 'action'=>'view', $this->Session->read('Study.id')));
			} else {
				$this->Session->setFlash(__('The Tag could not be saved. Please, try again.', true));
			}
		}
		$studies = $this->Tag->Study->find('list', array('fields' => array('id', 'study_name')));
		$this->set(compact('studies'));
	}

	public function edit($id = null) {
		if (!$id && !$this->data) {
			$this->Session->setFlash(__('Invalid Tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->data) {
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(__('The Tag has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('controller' => 'studies', 'action'=>'view', $this->Session->read('Study.id')));
			} else {
				$this->Session->setFlash(__('The Tag could not be saved. Please, try again.', true));
			}
		} else {
			$this->data = $this->Tag->read(null, $id);
		}
		$studies = $this->Tag->Study->find('list', array('fields' => array('id', 'study_name')));
		$this->set(compact('studies'));
	}

	public function delete($id = null) {
		if (!$id) {
			if (isset($this->data['delete'])) {
				if ($this->Tag->deleteAll(array('Tag.id' => $this->data['delete']))) {
					$this->Session->setFlash(__('Tag deleted', true), 'default', array('class' => 'message success'));
				}
			}
		} else {
			if ($this->Tag->delete($id)) {
				$this->Session->setFlash(__('Tag deleted', true), 'default', array('class' => 'message success'));
			}
		}
		$this->redirect(array('controller' => 'studies', 'action'=>'view', $this->Session->read('Study.id')));
	}

}
?>