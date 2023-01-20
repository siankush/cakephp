<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Email;
use Cake\Mailer\Mailer;
use Cake\Mailer\TransportFactory;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;




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
        // echo $this->Commn->test(520,23);
        // die;
        $tableinfo = $this->Tableinfo->newEmptyEntity();
        if ($this->request->is('post')) {
            $tableinfo = $this->Tableinfo->patchEntity($tableinfo, $this->request->getData());

            $image=$this->request->getData('image_file');

            $name = $image->getClientFilename();

            $targetPath= WWW_ROOT.'img'.DS.$name;

            if($name)

            $image->moveTo($targetPath);

            $tableinfo->image=$name;

            echo $name;
            if ($this->Tableinfo->save($tableinfo)) {
                $this->Flash->success(__('The tableinfo has been saved.'));

                return $this->redirect(['action' => 'index']);
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

            $fileName2 = $tableinfo["image"];


        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();

            $productImage = $this->request->getData("image");

            $fileName = $productImage->getClientFilename();
            if ($fileName == '') {
                $fileName = $fileName2;
            }

            $data["image"] = $fileName;
            
            $tableinfo = $this->Tableinfo->patchEntity($tableinfo, $data);
            if ($this->Tableinfo->save($tableinfo)) {
                $hasFileError = $productImage->getError();
                if ($hasFileError > 0) {
                    $data["image"] = "";
                } else {
                    $fileType = $productImage->getClientMediaType();

                    if ($fileType == "image/png" || $fileType == "image/jpeg" || $fileType == "image/jpg") {
                        $imagePath = WWW_ROOT . "img/" . $fileName;
                        $productImage->moveTo($imagePath);
                        $data["image"] = $fileName;
                    }
                }
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
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

     public function forgtpass()
    {
if ($this->request->is('post')) {
		$email = $this->request->getData('email');
		$token = Security::hash(Security::randomBytes(25));
		
		$TableinfoTable = TableRegistry::get('Tableinfo');

			if ($email == NULL) {
				$this->Flash->error(__('Please insert your email address')); 
			} 
			if	($tableinfo = $TableinfoTable->find('all')->where(['email'=>$email])->first()) { 
				$tableinfo->token = $token;
				if ($TableinfoTable->save($tableinfo)){
					$mailer = new Mailer('default');
					$mailer->setTransport('gmail');
					$mailer->setFrom(['ankush14042000@gmail.com' => 'ankush'])
					->setTo($email)
					->setEmailFormat('html')
					->setSubject('Forgot Password Request')
					->deliver('Hello<br/>Please click link below to reset your password<br/><br/>
                    <a href="http://localhost:8765/tableinfo/resetpassword/'.$token.'">Reset Password</a>');
				}
				$this->Flash->success('Reset password link has been sent to your email ('.$email.'), please check your email');
			}
			if	($total = $TableinfoTable->find('all')->where(['email'=>$email])->count()==0) {
				$this->Flash->error(__('Email is not registered in system'));
			}
	}
}

public function resetpassword($token)
{
	if($this->request->is('post')){

		$newPass = $this->request->getData('password');

		$TableinfoTable = TableRegistry::get('Tableinfo');

		$tableinfo = $TableinfoTable->find('all')->where(['token'=>$token])->first();
		$tableinfo->password = $newPass;
		$tableinfo->token = 'null';

		if ($TableinfoTable->save($tableinfo)) {
			$this->Flash->success('Password successfully reset. Please login using your new password');
			return $this->redirect(['action'=>'login']);
		}
	}
}
    public function logout() {
        $session = $this->request->getSession();
        $session->destroy();
        return $this->redirect(['action' => 'login']);
    }
}
