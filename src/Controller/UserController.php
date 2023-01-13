<?php

namespace App\Controller;
use App\Controller\AppController;

// use Cake\Mailer\Email;
// use Cake\Mailer\Mailer;
// use Cake\Mailer\TransportFactory;

/**
 * Users Controller
 *
 * @property \App\Model\Table\TabledataTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class UserController extends AppController{



    public function add()
    {
        $user = $this->Tabledata->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Tabledata->patchEntity($user, $this->request->getData());
            if ($this->TabledataTable->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }
   

}


?>