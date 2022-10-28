<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function crearTicket(){
        echo "crear ticket";
        return;
    }
    
    public function index(){
        return view('open.index');
    }

    public function nuevoTicketForm(){
        return view('open.nuevoTicket');
    }

    public function gracias(){
        return view('open.gracias');
    }
}
