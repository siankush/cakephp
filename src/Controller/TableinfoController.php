<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
use Cake\View\View;


/**
 * Tableinfo Controller
 *
 * @property \App\Model\Table\TableinfoTable $Tableinfo
 * @method \App\Model\Entity\Tableinfo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TableinfoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $session = $this->request->getSession();
        // if ($session->read('email') != null) {
        // } else {
        //     $this->redirect(['action' => 'login']);
        // }

        $tableinfo = $this->paginate($this->Tableinfo);

        $this->set(compact('tableinfo'));
    }

    /**
     * View method
     *
     * @param string|null $id Tableinfo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $session = $this->request->getSession();
        // if ($session->read('email') != null) {
        // } else {
        //     $this->redirect(['action' => 'login']);
        // }
        $tableinfo = $this->Tableinfo->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tableinfo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tableinfo = $this->Tableinfo->newEmptyEntity();
        if ($this->request->is('post')) {
            $tableinfo = $this->Tableinfo->patchEntity($tableinfo, $this->request->getData());

            $image=$this->request->getData('image_file');

            $name = $image->getClientFilename();

            $targetPath= WWW_ROOT.'img'.DS.$name;

            if($name)

            $image->moveTo($targetPath);

            $tableinfo->image=$name;
            print_r($tableinfo);

            if ($this->Tableinfo->save($tableinfo)) {
                $this->Flash->success(__('The tableinfo has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The tableinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('tableinfo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tableinfo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        // $session = $this->request->getSession();
        // if ($session->read('email') != null) {
        // } else {
        //     $this->redirect(['action' => 'login']);
        // }

        $tableinfo = $this->Tableinfo->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tableinfo = $this->Tableinfo->patchEntity($tableinfo, $this->request->getData());

            $image=$this->request->getData('imgfile');

            $name = $image->getClientFilename();

            $targetPath= WWW_ROOT.'img'.DS.$name;

            if($name)

            $image->moveTo($targetPath);

            $tableinfo->image=$name;
            print_r($tableinfo);

            if ($this->Tableinfo->save($tableinfo)) {
                $this->Flash->success(__('The tableinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tableinfo could not be saved. Please, try again.'));
        }
        $this->set(compact('tableinfo'));
    }

    

    /**
     * Delete method
     *
     * @param string|null $id Tableinfo id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tableinfo = $this->Tableinfo->get($id);
        if ($this->Tableinfo->delete($tableinfo)) {
            $this->Flash->success(__('The tableinfo has been deleted.'));
        } else {
            $this->Flash->error(__('The tableinfo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login(){
      
        if ($this->request->is('post')) {
            // $tableinfo = $this->Tableinfo->patchEntity($tableinfo, $this->request->getData());

             $email=$this->request->getData('email');
             $password=$this->request->getData('password');
            

             $result = $this->Tableinfo->login($email, $password);
         
             if ($result) {
                 $session = $this->getRequest()->getSession();
                 $session->write('email', $email);
                 $this->Flash->success(__('The user has been logged in successfully.'));
 
                 return $this->redirect(['action' => 'index']);
             }
            $this->Flash->error(__('The tableinfo could not be saved. Please, try again.'));
        }
           
    }

    public function forget_password(){
    
        if($this->request->is('post'))
       {
          $user_data = $this->request->data;
         if(!empty($user_data)){
             $this->User->recursive=-1;
           $check_email = $this->User->find('first',array('conditions'=>array('User.email_address'=>$user_data['User']['email_address'])));
           
           if(!empty($check_email)){
             $data['id'] = $check_email['User']['id'];
             $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
             $new_password = '';
             for ($i=0; $i<6; $i++)
             {
             $new_password .= $characters[rand(0, strlen($characters) - 1)];
             }
             
             $data['password'] = md5($new_password);
             $this->User->save($data);
               /* Sending Email to user */
             $email=$user_data['User']['email_address'];
             $message = '';  
             $message .= '<html>';
                     $message.='<table style="width:800px;margin:auto;border-collapse:collapse;border:1px solid #5A5A5A;">';
             $message.='<thead style="background:#5A5A5A;">';
             $message.='<tr>';
             $message.='<td width="50%" style="padding:14px 20px;text-align:right;font-size:25px;color:#fff;"></td>';
             $message.='</tr>';
             $message.='</thead>';
             $message.='<tbody>';
             $message.='<tr>';
             $message.='<td style="padding:5px 20px;" colspan="2">';
             $message .= "<h3>New Password  :".$new_password."</h3></br>";
                
             
             $message .= '<br/><br/>Best Regards';
             $message .= '<br/><br/> My Team';
             $message.='</td>';
             $message.='</tr>';
             $message.='</tbody>';
             $message.='</table>';
             $message .= '<html>';
           $data_send['body'] = $message;
               $data_send['subject'] = "Forgot Password - My Team";
        
               $data_send['to'] = $email;
               //echo "<pre>";print_r($data_send);die;
                   // echo "<pre>";print_r($data_send);die;
          
          $output = $this->send_mail($data_send);
         
               /* Sending Email to user */
             if($output){  
                $this->Session->setFlash('Password has been changed, Check Your Mail', 'default', array('class' => 'example_class'));
                 $this->redirect(array('controller' => 'users', 'action' => 'login'));
               //echo json_encode(array('status' => 'success', 'message' => "Password has been changed , please check your email")); die;
             }
             else{
                     $this->Session->setFlash('Password has been changed ', 'default', array('class' => 'example_class'));
                   $this->redirect(array('controller' => 'users', 'action' => 'registration'));
             }
           }
           else{
                     $this->Session->setFlash('Email Not Exist', 'default', array('class' => 'example_class'));
                   $this->redirect(array('controller' => 'users', 'action' => 'registration'));
           }
         }
       }
     }

    public function logout() {
        $session = $this->request->getSession();
        $session->destroy();
        return $this->redirect(['action' => 'login']);
    }
}
