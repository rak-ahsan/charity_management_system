<?php

namespace App\Controllers;

use App\Models\CharityModel;
use App\Models\StatusModel;
use App\Models\EventModel;
use App\Models\EventPhotos;

use App\Controllers\BaseController;

class EventController extends BaseController
{


    public function __construct()
    {
        if (session()->get('u_role') != "3" && session()->get('c_role') != "4" ) {
            echo 'Access denied';
            exit;
        }
    }

    public function index()
    {
        $user = new CharityModel();
        $data['rakib'] = $user->orderBy('charity_id', 'DESC')->findAll();

        return view('pages/event/addevent', $data);
    }

    public function eventsave()
    {
        $user = new EventModel();

        $file = $this->request->getFile('eventphoto');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img/event', $imageName);
        }



        $data = [
            'ev_name' => $this->request->getPost('EventName'),
            'ev_location' => $this->request->getPost('EventLocation'),
            'ev_organiser' => $this->request->getPost('EventOrganiser'),
            'ev_time' => $this->request->getPost('EventTime'),
            'ev_description' => $this->request->getPost('description'),
            'amountneed' => $this->request->getPost('amountneed'),
            'eventphoto' => $imageName
        ];

        $user->save($data);
        return redirect('addevent');
    }

    public function fetchevent()
    {

        $user = new EventModel();
        $user->join('charity', 'event.ev_organiser = charity.charity_id');
        $user->join('status', 'event.ev_status = status.status_id');
        $user->join('totalamount', 'totalamount.event_id = event.ev_id');

        $data['rakib'] = $user->orderBy('ev_id', 'DESC')->findAll();
        return view('pages/event/viewevent', $data);
    }



    public function delete($user_id = null)
    {
        $user = new EventModel();
        $user->delete($user_id);
        return redirect('viewevent');
    }

    public function fetchsingel($id = null)
    {
        $user = new EventModel();
        $data['event'] = $user->where('ev_id ', $id)->first();

        $user = new CharityModel();
        $data['rakib'] = $user->orderBy('charity_id', 'DESC')->findAll();

        $user = new StatusModel();
        $data['sta'] = $user->orderBy('status_id', 'ASC')->findAll(2);

        return view('pages/event/update', $data);
    }

    public function update($id = null)
    {
        $update = new EventModel();
        $file = $this->request->getFile('eventphoto');

        $data = [
            'ev_name' => $this->request->getPost('EventName'),
            'ev_location' => $this->request->getPost('EventLocation'),
            'ev_organiser' => $this->request->getPost('EventOrganiser'),
            'ev_time' => $this->request->getPost('EventTime'),
            'amountneed' => $this->request->getPost('amountneed'),
            'ev_status' => $this->request->getPost('ev_status'),
            'amountgot' => $this->request->getPost('amountgot'),
            'ev_description' => $this->request->getPost('description')
        ];

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('public/img/event', $imageName);
            $data['eventphoto'] = $imageName;
        }



        $update->update($id, $data);
        return redirect('viewevent');
    }

    public function multi()
    {
        $user = new EventModel();
        $data['rakib'] = $user->where('ev_status ', 1)->findAll();

        return view('pages/event/eventphotos', $data);
    }



    public function multisave()
    {
        $user = new EventPhotos();
        $files = $this->request->getFiles();
        $Eventid = $this->request->getPost('EventPhoto');
    
        if (isset($files['photos'])) {
            foreach ($files['photos'] as $file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    if (!$file->move('public/img/event/all', $newName)) {
                        echo "error img";
                    } else {
                        $data = [
                            'eventpname' => $newName,
                            'event_id' => $Eventid,
                        ];
                        if (!$user->save($data)) {
                            echo "error data";
                        }
                    }
                }
            }
        }
    
        return redirect('eventphoto');
    }

    public function eventphotos(){
        $user = new EventPhotos();

        $user->join('event', 'event.ev_id = eventphotos.event_id');
        $data['eventphotos'] = $user->findAll();

        return view ('pages/event/photosview',$data);
    }

    public function deletephoto($user_id= null){
        $user = new EventPhotos();
        $user->delete($user_id);
        return redirect('viewphotos');
    }
    
}
