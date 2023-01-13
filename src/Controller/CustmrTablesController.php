<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CustmrTables Controller
 *
 * @property \App\Model\Table\CustmrTablesTable $CustmrTables
 * @method \App\Model\Entity\CustmrTable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CustmrTablesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $custmrTables = $this->paginate($this->CustmrTables);

        $this->set(compact('custmrTables'));
    }

    /**
     * View method
     *
     * @param string|null $id Custmr Table id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $custmrTable = $this->CustmrTables->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('custmrTable'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $custmrTable = $this->CustmrTables->newEmptyEntity();
        if ($this->request->is('post')) {
            $custmrTable = $this->CustmrTables->patchEntity($custmrTable, $this->request->getData());
            if ($this->CustmrTables->save($custmrTable)) {
                $this->Flash->success(__('The custmr table has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custmr table could not be saved. Please, try again.'));
        }
        $this->set(compact('custmrTable'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Custmr Table id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $custmrTable = $this->CustmrTables->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $custmrTable = $this->CustmrTables->patchEntity($custmrTable, $this->request->getData());
            if ($this->CustmrTables->save($custmrTable)) {
                $this->Flash->success(__('The custmr table has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The custmr table could not be saved. Please, try again.'));
        }
        $this->set(compact('custmrTable'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Custmr Table id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $custmrTable = $this->CustmrTables->get($id);
        if ($this->CustmrTables->delete($custmrTable)) {
            $this->Flash->success(__('The custmr table has been deleted.'));
        } else {
            $this->Flash->error(__('The custmr table could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
