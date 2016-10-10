<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Response;


class UsersController extends AppController
{
    public $uses = array('User');
    public $components = array('Auth','Flash');



    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // allow these action to be excuted without a login
        $this->Auth->allow( 'login',  'register','checkUsername');
    }

    public function register()
    {
        $this->viewBuilder()->layout(false);
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $user->role_id=2;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user created successfully.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error('Unable to register the user.',['key' => 'unable']);
        }
        $this->set('user', $user);
    }

    public function login()
    {
        $this->viewBuilder()->layout(false);
        if($this->request->is('post')){
            $user=$this->Auth->identify();
            if($user)
            {
                $this->Auth->setUser($user);
                $user = $this->Users->get($this->Auth->user('id'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.',['key' => 'incorrect']);

        }

    }

    public function checkUsername() {

        $this->autoRender = false;
        $this->viewBuilder()->layout('ajax') ;

        if (!$this->request->is('ajax')) {
            die("must be ajax");
        }

        $value = trim($this->params['url']['username']);
        $exist=$this->Users->checkUser($value);

        if (!$exist) {
            $arr[result]=false;
        }
        $arr[result]=true;
        $this->set(result,json_encode($arr));
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function articlelist($id)
    {
        $this->viewBuilder()->layout(false);

        return ;
    }


}
?>