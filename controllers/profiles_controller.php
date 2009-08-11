<?php
class ProfilesController extends AppController {
	public $name = 'Profiles';
/*
	public function index() {
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->paginate());
	}
*/
	public function view($id = null) {
		$conditions = array('Profile.id' => $id);
		$contain = array('User');
		$profile = $this->Profile->find('first', compact('conditions', 'contain'));
		if (!$profile) {
			$conditions = array('Profile.user_id' => $id);
			$profile = $this->Profile->find('first', compact('conditions', 'contain'));
		}
		if (!$profile) {
			if ($this->Auth->user('id')) {
				$data = array('Profile' => array('user_id' => $this->Auth->user('id')));
				$this->Profile->save($data, false);
				$conditions = array('Profile.user_id' => $id);
				$profile = $this->Profile->find('first', compact('conditions', 'contain'));
			} else {
				$this->Session->setFlash(__('Invalid Profile', true));
				$this->redirect($this->referer());
			}
		}
		$this->set(compact('profile'));
		$this->Session->write('Profile.id', $id);
	}

	public function add() {
		if ($this->data) {
			$this->Profile->create();
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The Profile has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'view', $this->Session->read('Profile.id')));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Profile->User->find('list');
		$this->set(compact('users'));
	}

	public function edit($id = null) {
		if (!$id && !$this->data) {
			$this->Session->setFlash(__('Invalid Profile', true));
			$this->redirect($this->referer());
		}
		if ($this->data) {
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The Profile has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'view', $this->Session->read('Profile.id')));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.', true));
			}
		} else {
			$this->data = $this->Profile->read(null, $id);
		}
	}
/*
	public function delete($id = null) {
		if (!$id) {
			if (isset($this->data['delete'])) {
				if ($this->Profile->deleteAll(array('Profile.id' => $this->data['delete']))) {
					$this->Session->setFlash(__('Profile deleted', true), 'default', array('class' => 'message success'));
				}
			}
		} else {
			if ($this->Profile->delete($id)) {
				$this->Session->setFlash(__('Profile deleted', true), 'default', array('class' => 'message success'));
			}
		}
		$this->redirect(array('action'=>'index'));
	}
*/
}
?>