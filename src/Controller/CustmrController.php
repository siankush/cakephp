<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Custmr Controller
 *
 * @property \App\Model\Table\CustmrTable $Custmr
 * @method \App\Model\Entity\Custmr[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustmrController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $custmr = $this->paginate($this->Custmr);

        $this->set(compact('custmr'));
    }

    /**
     * View method
     *
     * @param string|null $id Custmr id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $custmr = $this->Custmr->get($id, [
            'contain' => ['Profile'],
        ]);

        $this->set(compact('custmr'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $custmr = $this->Custmr->newEmptyEntity();
        if ($this->request->is('post')) {
            $custmr = $this->Custmr->patchEntity($custmr, $this->request->getData());
            if ($this->Custmr->save($custmr)) {
                $this->Flash->success(__('The custmr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custmr could not be saved. Please, try again.'));
        }
        $this->set(compact('custmr'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Custmr id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $custmr = $this->Custmr->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $custmr = $this->Custmr->patchEntity($custmr, $this->request->getData());
            if ($this->Custmr->save($custmr)) {
                $this->Flash->success(__('The custmr has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custmr could not be saved. Please, try again.'));
        }
        $this->set(compact('custmr'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Custmr id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $custmr = $this->Custmr->get($id);
        if ($this->Custmr->delete($custmr)) {
            $this->Flash->success(__('The custmr has been deleted.'));
        } else {
            $this->Flash->error(__('The custmr could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
