<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Users as User,
	Modules\Backend\Models\Roles as Role;

class UsersController extends ControllerBase
{

	/**
	 * Users Index
	 *
	 * @param null $action
	 * @param null $id
	 */
	public function indexAction($action = NULL, $id = NULL)
	{

		if ($action == "edit") {

			$UserEdit = User::find("id =" . $id);

			if ($UserEdit != FALSE) {
				$this->view->setVar("UpdateUser", $UserEdit);
			}
		}

		//User List
		$UserList = $this->modelsManager->createBuilder()
			->columns('r.role_name,
						u.id,
						u.username,
						u.role,
						u.status')
			->addFrom('\Modules\Backend\Models\Users', 'u')
			->innerJoin('\Modules\Backend\Models\Roles', 'r.role_id = u.role', 'r')
			->getQuery()
			->execute();

		//User Roles
		$Roles = Role::find();

		if ($UserList != FALSE) {

			$this->view->setVar("ListUser", $UserList);
			$this->view->setVar("Roles", $Roles);
		}
	}

	/**
	 * Users Add
	 * @return bool|string
	 */
	public function addAction()
	{

		$Add = new User();

		$Add->assign(array(
			"name_surname" => $this->request->getPost('name_username', 'striptags'),
			'username'     => $this->request->getPost('username', 'striptags'),
			'password'     => sha1($this->request->getPost('password')),
			'role'         => $this->request->getPost('role', 'int'),
			'created_date' => date("Y-m-d H:i:s"),
			'status'       => 1
		));

		if (!$Add->save()) {
			return $this->flash->error($Add->getMessages());
		} else {
			return $this->flash->success('<strong>Başarılı</strong> Kullanıcı başarıyla eklenmiştir. <a href="/admin/users/index">Yeniden eklemek için tıklayınız</a>');
		}
	}

	/**
	 * Update Users
	 *
	 * @param $id
	 *
	 * @return string
	 */
	public function updateAction($id)
	{
		$this->view->disable();

		$Update = User::findFirstById($id);

		if (!$Update) {
			$this->flash->error("Kullanıcı bulunamadı");
		}

		$Update->assign(array(
			"name_surname" => $this->request->getPost('name_surname', 'striptags'),
			"username"     => $this->request->getPost('username', 'striptags'),
			"password"     => $Update->setPassword($this->request->getPost('password')),
			"role"         => $this->request->getPost('role', 'int')
		));

		if (!$Update->save()) {
			return $this->flash->error($Update->getMessages());
		} else {
			return $this->flash->success('<strong>Başarılı</strong> Kullanıcı başarıyla güncellenmiştir. <a href="/admin/users/index">Yeni bir kullanıcı güncellemek için tıklayınız</a>');
		}
	}

	/**
	 * Delete Users
	 *
	 * @return mixed
	 */
	public function deleteAction()
	{
		$this->view->disable();

		$selected_ID = $this->request->getPost('fieldID');

		foreach ($selected_ID as $key) {
			$this->db->delete(
				"users",
				"id =" . $key
			);
		}
	}

	/**
	 * Change User Status
	 *
	 * @param $action
	 *
	 * @return string
	 */
	public function statusAction($action)
	{

		$this->view->disable();

		//Module Actions
		if ($action == "disable") {

			$query = $this->db->update("users",
				array("status"),
				array("0"),
				"id=" . $this->request->getPost('id')
			);

			if ($query) {
				return $this->flash->success('Durum Güncellendi');
			} else {
				return $this->flash->error('Durum Güncellenemedi');
			}
		}

		if ($action == "enable") {

			$query = $this->db->update("users",
				array("status"),
				array("1"),
				"id=" . $this->request->getPost('id')
			);

			if ($query) {
				return $this->flash->success('Durum Güncellendi');
			} else {
				return $this->flash->error('Durum Güncellenemedi');
			}
		}
	}
}

