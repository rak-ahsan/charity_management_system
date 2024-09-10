<?php

namespace App\Controllers;

use App\Models\Catagories;
use App\Models\CharityModel;
use App\Models\StatusModel;
use App\Controllers\BaseController;

class CharityController extends BaseController
{

    // public function __construct()
    // {
    //     if (session()->get('u_role') != "3") {
    //         echo 'Access denied';
    //         exit;
    //     }
    // }
    public function index()
    {

        $user = new StatusModel();
        $data['sta'] = $user->orderBy('status_id', 'ASC')->findAll(2);

        $user = new Catagories();
        $data['cata'] = $user->orderBy('cat_id', 'DESC')->findAll();
        
        return view('pages/charity/addcharity', $data);
    }


    public function charitystore()
    {

        $user = new CharityModel();
        
        $file = $this->request->getFile('photos');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img/charity', $imageName);
        }
        $data = [
            'CharityName' => $this->request->getPost('CharityName'),
            'CharityAddress' => $this->request->getPost('CharityAddress'),
            'CharityEmail' => $this->request->getPost('CharityEmail'),
            'CharityNumber' => $this->request->getPost('CharityNumber'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'Catagories' => $this->request->getPost('Catagories'),
            'cha_status' => $this->request->getPost('status'),
            'message' => $this->request->getPost('message'),
            'photos' =>$imageName

        ];

        $user->save($data);
        return redirect('addcharity');
    }

    public function fetchuser()
    {
        $user = new CharityModel();
        $user->join('categories', 'charity.Catagories = categories.cat_id');
        $user->join('status', 'charity.cha_status = status.status_id');
        $data['rakib'] = $user->orderBy('charity_id', 'DESC')->paginate(3);
        $data['pager'] = $user->pager;
        return view('pages/charity/view', $data);
    }

    public function edit($id = null)
    {

        $user = new StatusModel();
        $data['sta'] = $user->orderBy('status_id', 'ASC')->findAll(2);

        $user = new Catagories();
        $data['cata'] = $user->orderBy('cat_id', 'DESC')->findAll();

        $user = new CharityModel();
        $data['user'] = $user->where('charity_id ', $id)->first();

        return view('pages/charity/edit', $data);
    }


    public function update($id = null)
    {
        $update = new CharityModel();

        $file = $this->request->getFile('photos');

        $data = [
            'CharityName' => $this->request->getPost('CharityName'),
            'CharityAddress' => $this->request->getPost('CharityAddress'),
            'CharityEmail' => $this->request->getPost('CharityEmail'),
            'CharityNumber' => $this->request->getPost('CharityNumber'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'Catagories' => $this->request->getPost('Catagories'),
            'message' => $this->request->getPost('message'),
            'cha_status' => $this->request->getPost('status'),
        ];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img/charity', $imageName);
            $data['photos'] = $imageName; 
        }


        $update->update($id, $data);
        return redirect('viewcharity');
    }

    public function delete($user_id = null)
    {

        $user = new CharityModel();
        $user->delete($user_id);
        return redirect('viewcharity');
    }

 


    
}
