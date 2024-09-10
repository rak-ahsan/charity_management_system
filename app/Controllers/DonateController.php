<?php

namespace App\Controllers;

use App\Models\DonerModel;
use App\Controllers\BaseController;

class DonateController extends BaseController
{
    public function index()
    {
        $user = new DonerModel();

        $data = [
            'don_name' => $this->request->getPost('fullname'),
            'don_address' => $this->request->getPost('address'),
            'paymentMethod' => $this->request->getPost('paymentMethod'),
            'privacy' => $this->request->getPost('privacy'),
            'event_id' => $this->request->getPost('event_id'),
            'amount' => $this->request->getPost('amount'),
            'don_number' => $this->request->getPost('number'),
            'donner_id' => $this->request->getPost('donner_id'),
            'don_email' => $this->request->getPost('email'),
            'charity' => $this->request->getPost('charity_id'),
        ];

        $user->save($data);
        return redirect('/');
    }

    public function don()
    {
        $user = new DonerModel();
        
        $user->join('event', 'event.ev_id = ddonetion.event_id');
        $user->join('charity', 'charity.charity_id = ddonetion.charity');
        $data['rakib'] = $user->orderBy('don_id', 'DESC')->paginate(11);
        $data['pager'] = $user->pager;

        return view('pages/Donation/donview', $data);
    }
}
