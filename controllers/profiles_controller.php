<?php
class ProfilesController extends AppController {
	public $name = 'Profiles';
/*
	public function index() {
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->paginate());
	}
*/
	public function view($user_id = null) {
		$this->Profile->User->bindModel(array('hasOne' => array('Profile')));
		$conditions = array('User.id' => $user_id);
		$contain = array('Profile');
		$foreignKey = null;
		$profile = $this->Profile->User->find('first', compact('conditions', 'contain', 'foreignKey'));
		if (!$profile) {
			$this->Session->setFlash(__('Invalid Profile', true));
			$this->redirect($this->referer());
		}
		$this->set(compact('profile'));
		$this->Session->write('Profile.user_id', $user_id);
	}
/*
	public function add() {
		if ($this->data) {
			$this->Profile->create();
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The Profile has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'view', $this->Session->read('Profile.user_id')));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Profile->User->find('list');
		$this->set(compact('users'));
	}
*/
	public function edit() {
		if ($this->data) {
			if ($this->Profile->save($this->data)) {
				$this->Session->setFlash(__('The Profile has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'view', $this->Session->read('Profile.user_id')));
			} else {
				$this->Session->setFlash(__('The Profile could not be saved. Please, try again.', true));
			}
		} else {
			$this->data = $this->Profile->find('first');
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