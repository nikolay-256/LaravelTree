<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Device;

class DevicesController extends Controller
{
    public function index(){

        $devices = Device::all();

        return view('devices.index',compact('devices'));
    }

    public function create(){
        return view('devices.create');
    }

    public function storeDevice(){

        $device = new Device();

        $device->name = request('name');
        $device->description = request('description');

        $device->save();

        return redirect('/devices');

    }

}
