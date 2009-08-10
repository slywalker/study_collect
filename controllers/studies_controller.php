<?php
class StudiesController extends AppController {
	public $name = 'Studies';

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Security->disabledFields = array('search');
	}

	public function index() {
		$tags = array();
		if (!empty($this->data['Study']['search'])) {
			$tags = mb_convert_kana(mb_trim($this->data['Study']['search']), 'as');
			$tags = preg_replace('!\s+!', ' ', $tags);
			$this->passedArgs['tags'] = urlencode($tags);
		}
		if (!empty($this->passedArgs['tags'])) {
			$tags = urldecode($this->passedArgs['tags']);
			$this->data['Study']['search'] = $tags;
			$tags = explode(' ', $tags);
		}
		$ids = null;
		foreach ($tags as $key => $tag) {
			if (is_null($ids)) {
				$conditions = array('LOWER(Tag.tag) LIKE' => strtolower($tag));
			} else {
				$conditions = array('LOWER(Tag.tag) LIKE' => strtolower($tag), 'StudiesTag.study_id' => $ids);
			}
			$joins = array(
				array(
					'table' => 'tags',
					'alias' => 'Tag',
					'type' => 'INNER',
					'conditions' => array('StudiesTag.tag_id = Tag.id'),
				),
			);
			$fields = array('id', 'study_id');
			$ids = $this->Study->StudiesTag->find('list', compact('conditions', 'joins', 'fields'));
		}
		
		$this->paginate = array(
			'foreignKey' => false,
			'order' => array('study_date' => 'desc'),
			'contain' => array('User', 'Tag'),
		);
		if (!is_null($ids)) {
			$this->paginate['conditions'] = array('Study.id' => $ids);
		}
		$this->set('studies', $this->paginate());
	}

	public function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Study', true));
			$this->redirect(array('action'=>'index'));
		}
		$conditions = array('Study.id' => $id);
		$this->Study->User->bindModel(array('hasOne' => array('Profile')));
		$contain = array('User' => array('Profile'), 'Tag', 'Content' => array('User'), 'Attend');
		$foreignKey = false;
		$study = $this->Study->find('first', compact('conditions', 'contain', 'foreignKey'));
		$this->Session->write('Study', $study['Study']);
		$this->set(compact('study'));
	}

	public function add() {
		if ($this->data) {
			$this->Study->create();
			if ($this->Study->save($this->data)) {
				$this->Session->setFlash(__('The Study has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Study could not be saved. Please, try again.', true));
			}
		}
		$tags = $this->Study->Tag->find('list');
		$this->set(compact('tags'));
	}

	public function edit($id = null) {
		if (!$id && !$this->data) {
			$this->Session->setFlash(__('Invalid Study', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->data) {
			if ($this->Study->save($this->data)) {
				$this->Session->setFlash(__('The Study has been saved', true), 'default', array('class' => 'message success'));
				$this->redirect(array('action'=>'view', $id));
			} else {
				$this->Session->setFlash(__('The Study could not be saved. Please, try again.', true));
			}
		} else {
			$this->data = $this->Study->read(null, $id);
		}
		$tags = $this->Study->Tag->find('list');
		$this->set(compact('tags'));
	}

	public function delete($id = null) {
		if (!$id) {
			if (isset($this->data['delete'])) {
				if ($this->Study->deleteAll(array('Study.id' => $this->data['delete']))) {
					$this->Session->setFlash(__('Study deleted', true), 'default', array('class' => 'message success'));
				}
			}
		} else {
			if ($this->Study->delete($id)) {
				$this->Session->setFlash(__('Study deleted', true), 'default', array('class' => 'message success'));
			}
		}
		$this->redirect(array('action'=>'index'));
	}

	public function attended() {
		$data = array();
		$data['Study']['id'] = $this->Session->read('Study.id');
		$data['Attend']['Attend'][] = $this->Auth->user('id');
		$this->Study->save($data);
		$this->redirect(array('action' => 'view', $this->Session->read('Study.id')));
	}

	public function not_attended() {
		$data = array();
		$data['Study']['id'] = $this->Session->read('Study.id');
		$data['Attend']['Attend'] = array();
		$this->Study->save($data);
		$this->redirect(array('action' => 'view', $this->Session->read('Study.id')));
	}
}
?>