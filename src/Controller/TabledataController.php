<?php
declare(strict_types=1);

namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
/**
 * Tabledata Controller
 *
 * @property \App\Model\Table\TabledataTable $Tabledata
 * @method \App\Model\Entity\Tabledata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TabledataController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tabledata = $this->paginate($this->Tabledata);

        $this->set(compact('tabledata'));
    }

    // /**
    //  * View method
    //  *
    //  * @param string|null $id Tabledata id.
    //  * @return \Cake\Http\Response|null|void Renders view
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */

    
    public function view($id = null)
    {
        // $connection =ConnectionManager::get('default');
        // // $results = $connection->execute('SELECT * FROM tabledata')->fetchAll('assoc');
        // //  print_r($results);
        $tabledata = $this->Tabledata->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tabledata'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $connection = ConnectionManager::get('default');

        if($this->request->is('POST')){

            $nameinfo = $this->request->getdata('name');
            $emailinfo = $this->request->getdata('email');
            $phoneinfo = $this->request->getdata('phone');
            $passwordinfo = $this->request->getdata('password');
            
            $query = $connection->execute("INSERT INTO tabledata(name,email,phone,password) VALUES ('$nameinfo','$emailinfo','$phoneinfo','$passwordinfo')");
            if ($query) {
                $this->Flash->success(__('The tabledata has been saved.'));
            
                    return $this->redirect(['action' => 'index']);
              }
              $this->Flash->error(__('The tabledata could not be saved. Please, try again.'));
        }
        
         




    //     $tabledata = $this->Tabledata->newEmptyEntity();
    //     if ($this->request->is('post')) {
    //         $tabledata = $this->Tabledata->patchEntity($tabledata, $this->request->getData());
    //         if ($this->Tabledata->save($tabledata)) {
    //             $this->Flash->success(__('The tabledata has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The tabledata could not be saved. Please, try again.'));
    //     }
    //     $this->set(compact('tabledata'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabledata id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
     $tabledata = $this->Tabledata->get($id, [
        'contain' => [],
     ]);

     $this->set(compact('tabledata'));
     
    if($this->request->is('PUT')){

        $connection = ConnectionManager::get('default');
        $nameinfo = $this->request->getdata('name');
        $emailinfo = $this->request->getdata('email');
        $phoneinfo = $this->request->getdata('phone');
        $passwordinfo = $this->request->getdata('password');

        $query = $connection->execute("UPDATE tabledata SET  name = '$nameinfo', email = '$emailinfo' , phone = '$phoneinfo', password = '$passwordinfo'  WHERE id = '$id' ");
    if($query){
            $this->Flash->success(__('The tabledata has been updated.'));

            return $this->redirect(['action' => 'index']);
        }else{
            $this->Flash->error(__('The tabledata could not be updated. Please, try again.'));
            
        }
       
       
    }

        // $this->viewBuilder()->setLayout('editlayout');
        // $tabledata = $this->Tabledata->get($id, [
        //     'contain' => [],
        // ]);
        // if ($this->request->is(['patch', 'post', 'put'])) {
        //     $tabledata = $this->Tabledata->patchEntity($tabledata, $this->request->getData());
        //     if ($this->Tabledata->save($tabledata)) {
        //         $this->Flash->success(__('The tabledata has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The tabledata could not be saved. Please, try again.'));
        // }
        // $this->set(compact('tabledata'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabledata id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $connection = ConnectionManager::get('default');
        $query = $connection->execute("DELETE FROM `tabledata` WHERE id = $id");
        if($query){
            $this->Flash->success(__('The tabledata has been deleted.'));
        }else{
            $this->Flash->error(__('The tabledata could not be deleted. Please, try again.'));
            
        }
         return $this->redirect(['action' => 'index']);


        // $this->request->allowMethod(['post', 'delete']);
        // $tabledata = $this->Tabledata->get($id);
        // if ($this->Tabledata->delete($tabledata)) {
        //     $this->Flash->success(__('The tabledata has been deleted.'));
        // } else {
        //     $this->Flash->error(__('The tabledata could not be deleted. Please, try again.'));
        // }

        // return $this->redirect(['action' => 'index']);
    }

    
}
