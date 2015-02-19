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
            'username' => $user->username,
            'role' => $user->role
        ));
    }

    public function userloginAction()
    {
        //$this->view->disable();

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

                //Last Login and IP Address
                $ipAddress = $this->request->getClientAddress();
                $date = date("Y-m-d H:i:s");

                $this->db->query("update users set
                                        ip_add='$ipAddress',
                                        last_login = '$date'
                                        WHERE
                                        username = '$username'");


                //Forward to the 'dashboard' controller if the user is valid
                return $this->response->redirect('admin/controlpanel/index');
            }

            $this->flash->error('<strong>HATA</strong> Kullanıcı adı veya şifreniz yanlıştır');
            return false;
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        return $this->response->redirect('admin');
    }
}