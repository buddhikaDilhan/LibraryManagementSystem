<?php
App::uses('AppController', 'Controller');
/**
 * CdDetails Controller
 *
 * @property CdDetail $CdDetail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CdDetailsController extends AppController {

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
		$this->CdDetail->recursive = 0;
		$this->set('cdDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CdDetail->exists($id)) {
			throw new NotFoundException(__('Invalid cd detail'));
		}
		$options = array('conditions' => array('CdDetail.' . $this->CdDetail->primaryKey => $id));
		$this->set('cdDetail', $this->CdDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CdDetail->create();
			if ($this->CdDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The cd detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cd detail could not be saved. Please, try again.'));
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
		if (!$this->CdDetail->exists($id)) {
			throw new NotFoundException(__('Invalid cd detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CdDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The cd detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cd detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CdDetail.' . $this->CdDetail->primaryKey => $id));
			$this->request->data = $this->CdDetail->find('first', $options);
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
		$this->CdDetail->id = $id;
		if (!$this->CdDetail->exists()) {
			throw new NotFoundException(__('Invalid cd detail'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CdDetail->delete()) {
			$this->Session->setFlash(__('The cd detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cd detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
