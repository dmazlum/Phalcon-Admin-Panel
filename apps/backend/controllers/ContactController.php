<?php

namespace Modules\Backend\Controllers;

use Modules\Backend\Models\Contact;

class ContactController extends ControllerBase
{

	/**
	 * Contact Index
	 */
	public function indexAction()
	{

		$contact = Contact::find();

		if ($contact != FALSE) {

			$this->view->setVar("listContact", $contact);
		}
	}

	/**
	 * Contact update
	 *
	 * @param $id
	 *
	 * @return string
	 */
	public function updateAction($id)
	{

		$update = Contact::find("id=" . $id);

		if ($update != FALSE AND $this->request->isPost()) {

			$query = $this->db->update(
				"contact",
				array('company', 'address', 'phone', 'phone2', 'mobile', 'fax', 'web', 'email'),
				array(
					$this->request->getPost('company', 'striptags'),
					$this->request->getPost('address'),
					$this->request->getPost('phone'),
					$this->request->getPost('phone2'),
					$this->request->getPost('mobile'),
					$this->request->getPost('fax'),
					$this->request->getPost('web'),
					$this->request->getPost('email', 'email'),
				),
				"id=" . $id
			);

			if ($query != TRUE) {
				return $this->flash->error('Kayıt Sırasında Hata Oluştu');
			} else {
				return $this->flash->success('<strong>Başarılı</strong> İletişim bilgileri başarıyla güncellenmiştir.');
			}
		}
	}
}
