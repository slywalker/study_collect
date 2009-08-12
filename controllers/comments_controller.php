<?php
class CommentsController extends AppController {
	public $name = 'Comments';
/*
	public function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Comment', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}
*/
	public function add() {
		if ($this->data) {
			$this->Comment->create();
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The Comment has been saved', true), 'default', array('class' => 'message success'));
			} else {
				$this->Session->setFlash(__('The Comment could not be saved. Please, try again.', true));
			}
		}
		$this->redirect($this->referer());
	}
/*
	public function edit($id = null) {
		if (!$id && !$this->data) {
			$this->Session->setFlash(__('Invalid Comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->data) {
			if ($this->Comment->save($this->data)) {
				$this->Session->setFlash(__('The Comment has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Comment could not be saved. Please, try again.', true));
			}
		} else {
			$this->data = $this->Comment->read(null, $id);
		}
		$users = $this->Comment->User->find('list');
		$this->set(compact('users'));
	}
*/
	public function delete($id = null) {
		if (!$id) {
			if (isset($this->data['delete'])) {
				if ($this->Comment->deleteAll(array('Comment.id' => $this->data['delete']))) {
					$this->Session->setFlash(__('Comment deleted', true), 'default', array('class' => 'message success'));
				}
			}
		} else {
			if ($this->Comment->delete($id)) {
				$this->Session->setFlash(__('Comment deleted', true), 'default', array('class' => 'message success'));
			}
		}
		$this->redirect($this->referer());
	}

}
?>