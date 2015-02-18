<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Users as Users;

class LoginController extends ControllerBase
{

    private function _registerSession($user)
    {
        $this->session->set('auth', array(
            'id' => $user->id,
            'name' => $user->name_surname,
            'username' => $user->username
        ));
    }

    public function userloginAction()
    {
        $this->view->disable();

        if ($this->request->isPost()) {

            //Receiving the variables sent by POST
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $password = sha1($password);

            //Find the user in the database
            $user = Users::findFirst(array(
                "username = :username: AND password = :password: AND status = '1'",
                "bind" => array('username' => $username, 'password' => $password)
            ));

            if ($user != false) {

                $this->_registerSession($user);

                //Forward to the 'dashboard' controller if the user is valid
                return $this->response->redirect('admin/controlpanel/index');
            }

            $this->flash->error('Wrong email/password');
        }

        //Forward to the login form again
       // return $this->response->redirect('login');

    }

    public function logoutAction()
    {
        $this->session->destroy();
        return $this->response->redirect('admin');
    }
}