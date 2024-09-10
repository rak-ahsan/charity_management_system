<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\DonerModel;
use App\Models\CharityModel;
use App\Models\EventPhotos;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {

        $user = new DonerModel();
        $user->select('event_id, SUM(amount) as total_amount');
        $user->groupBy('event_id');
        $data['rak'] = $user->findAll();

        

        $user = new EventModel();

        
        $user->join('totalamount', 'event.ev_id = totalamount.event_id', 'left');
        $user->join('charity', 'event.ev_organiser = charity.charity_id');
        $user->join('status', 'event.ev_status = status.status_id');

        $data['event'] = $user->orderBy('ev_id', 'DESC')->where('ev_status', 1)->findAll();
        
        $user = new CharityModel();
        $user->join('categories', 'charity.Catagories = categories.cat_id');
        $data['rakib'] = $user->orderBy('charity_id', 'DESC')->where('cha_status ', 1)->findAll();


        return view('nav', $data);
    }

    public function payment()
    {
        return view('pages/payment');
    }

    public function login()
    {
        return view('nav');
    }

    public function donnet()
    {
        return view('pages/donnet');
    }

    public function back()
    {
        // $user = new DonerModel();
        // $user->join('user_donation', 'user_donation.donner_id = ddonetion.donner_id');
        // $data['cha'] = $user->findAll();


        $user = new EventModel();
        $user->join('charity', 'event.ev_organiser = charity.charity_id');
        $user->join('status', 'event.ev_status = status.status_id');
        $data['event'] = $user->orderBy('ev_id', 'DESC')->where('ev_status', 1)->countAllResults();
        $result = $user->selectSum('amountneed')->get()->getRow();
        $data['need'] = $result->amountneed;


        $user = new CharityModel();
        $user->join('categories', 'charity.Catagories = categories.cat_id');
        $data['cha'] = $user->orderBy('charity_id', 'DESC')->where('cha_status ', 1)->countAllResults();

        $user = new UserModel();
        $data['rakib'] = $user->orderBy('id', 'DESC')->countAllResults();

        $user = new DonerModel();
        $result = $user->selectSum('amount')->get()->getRow();
        $data['sum'] = $result->amount;
        $data['don'] = $user->groupBy('donner_id')->countAllResults();



        return view('backend/dashboard', $data);
    }

    public function logins()
    {

        return view('/');
    }

    public function formuser()
    {
        return view('element/form');
    }


    public function userdash()
    {

        $user = new EventModel();
        $user->join('charity', 'event.ev_organiser = charity.charity_id');
        $user->join('status', 'event.ev_status = status.status_id');
        $data['event'] = $user->orderBy('ev_id', 'DESC')->where('ev_status', 1)->countAllResults();

        $user = new CharityModel();
        $user->join('categories', 'charity.Catagories = categories.cat_id');
        $data['cha'] = $user->orderBy('charity_id', 'DESC')->where('cha_status ', 1)->countAllResults();

        $user = new DonerModel();
        $user->join('useramount', 'useramount.donner_id = ddonetion.donner_id');
        $data['rakib'] = $user->orderBy('don_id', 'DESC')->where('ddonetion.donner_id', session()->get('id'))->first();

        return view('backend/userdash',$data);
    }

    public function chalogin(){
        return view('pages/charity/logincha');
    }

    // charity login auth
    public function loginauthcha()
    {

        
        $session = session();
        $userModel = new CharityModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('Password');

        $data = $userModel->where('username', $username)->first();
        // $data= $userModel->join('ddonetion', 'user.id = ddonetion.donner_id');

        if ($data && $data['password'] == $password) {
            $ses_data = [
                'charity_id' => $data['charity_id'],
                'CharityName' => $data['CharityName'],
                'CharityAddress' => $data['CharityAddress'],
                'CharityEmail' => $data['CharityEmail'],
                'CharityNumber' => $data['CharityNumber'],
                'photos' => $data['photos'],
                'c_role' => $data['c_role'],

                'isLoggedIn' => true
            ];
            $session->set($ses_data);
            return redirect()->to('/');
        } else {
            $session->setFlashdata('msg', 'Please Check Login Details');
            return redirect()->to('/logincha');
        }
    }

    public function eventac($id= null){
        $user = new EventPhotos();

        $user->join('event', 'event.ev_id = eventphotos.event_id');
        $data['eventphotos'] = $user->where('eventphotos.event_id ', $id)->findAll();

        return view('eventactivity',$data);
    }

    public function chadash(){

        $user = new EventModel();
        $user->join('charity', 'event.ev_organiser = charity.charity_id');
        $user->join('status', 'event.ev_status = status.status_id');
        $data['event'] = $user->orderBy('ev_id', 'DESC')->where('ev_organiser', session()->get('charity_id'))->countAllResults();

        $user = new CharityModel();
        $user->join('categories', 'charity.Catagories = categories.cat_id');
        $data['cha'] = $user->orderBy('charity_id', 'DESC')->where('cha_status ', 1)->countAllResults();

        $user = new DonerModel();
        $user->join('charity_view', 'charity_view.charity = ddonetion.charity');
        $data['rakib'] = $user->where('ddonetion.charity', session()->get('charity_id'))->first();

        return view('backend/chadash',$data);
    }
}
