<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\RoleModel;

class LoginController extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }

    public function signUp()
    {
        return view('pages/signup');
    }


    public function usersignup()
    {
        $rakib = new UserModel();

        $file = $this->request->getFile('u_photo');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img/user', $imageName);
        }

        $data = [

            'fullname' => $this->request->getPost('fullname'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'number' => $this->request->getPost('number'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'u_role' => $this->request->getPost('u_role'),
            'u_photo' => $imageName

        ];

        $rakib->save($data);
        return redirect('dashboard');
    }

    // fetch all data

    public function role()
    {
        $user = new RoleModel();
        $data['rakib'] = $user->orderBy('role_id', 'DESC')->findAll();
        return view('element/form', $data);
    }


    public function fetchuser()
    {

        $user = new UserModel();

        $data = [
            'rakib' => $user->orderBy('id', 'DESC')->paginate(10),
            'pager' => $user->pager,

        ];

        // $data['rakib'] = $user->orderBy('id', 'DESC')->findAll();

        return view('pages/user/viewuser', $data);
    }


    // fetch singel data

    public function edit($user_id = null)
    {
        $user = new RoleModel();
        $data['rakib'] = $user->orderBy('role_id', 'DESC')->findAll();

        $user = new UserModel();
        $data['user'] = $user->where('id', $user_id)->first();
        return view('pages/user/edituser', $data);
    }


    public function delete($user_id = null)
    {

        $user = new UserModel();
        $user->delete($user_id);
        return redirect('viewuser');
    }

    public function update($id = null)
    {
        $update = new UserModel();

        $file = $this->request->getFile('u_photo');

        $data = [

            'fullname' => $this->request->getPost('fullname'),
            'address' => $this->request->getPost('address'),
            'email' => $this->request->getPost('email'),
            'number' => $this->request->getPost('number'),
            'username' => $this->request->getPost('username'),
            'u_role' => $this->request->getPost('u_role'),
            'password' => $this->request->getPost('password')
        ];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img/user', $imageName);
            $data['u_photo'] = $imageName;
        }

        $update->update($id, $data);
        return redirect('viewuser');
    }

    public function loginauth()
    {
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $userModel->where('username', $username)->first();
        // $data= $userModel->join('ddonetion', 'user.id = ddonetion.donner_id');

        if ($data && $data['password'] == $password) {
            $ses_data = [
                'id' => $data['id'],
                'fullname' => $data['fullname'],
                'address' => $data['address'],
                'email' => $data['email'],
                'number' => $data['number'],
                'u_photo' => $data['u_photo'],
                'u_role' => $data['u_role'],

                'isLoggedIn' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/');
        } else {
            $session->setFlashdata('msg', 'Please Check Login Details');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
