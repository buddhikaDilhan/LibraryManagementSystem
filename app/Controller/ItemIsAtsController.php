<?php
App::uses('AppController', 'Controller');
/**
 * ItemIsAts Controller
 *
 * @property ItemIsAt $ItemIsAt
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemIsAtsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ItemIsAt->recursive = 0;
		$this->set('itemIsAts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemIsAt->exists($id)) {
			throw new NotFoundException(__('Invalid item is at'));
		}
		$options = array('conditions' => array('ItemIsAt.' . $this->ItemIsAt->primaryKey => $id));
		$this->set('itemIsAt', $this->ItemIsAt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemIsAt->create();
			if ($this->ItemIsAt->save($this->request->data)) {
				$this->Session->setFlash(__('The item is at has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item is at could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemIsAt->exists($id)) {
			throw new NotFoundException(__('Invalid item is at'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemIsAt->save($this->request->data)) {
				$this->Session->setFlash(__('The item is at has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item is at could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemIsAt.' . $this->ItemIsAt->primaryKey => $id));
			$this->request->data = $this->ItemIsAt->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemIsAt->id = $id;
		if (!$this->ItemIsAt->exists()) {
			throw new NotFoundException(__('Invalid item is at'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemIsAt->delete()) {
			$this->Session->setFlash(__('The item is at has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item is at could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
