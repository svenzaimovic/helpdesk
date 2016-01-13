<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use DB;
use Response;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function contact()
    {
        return view('contact');
    }

    public function incident()
    {
        if (Auth::check()) {
            return view('incident');
        }
        else {
            return view('auth/login');
        }
    }

    public function problem()
    {
        if (Auth::check()) {
            return view('problem');
        }
        else {
            return view('auth/login');
        }
    }

    public function change()
    {
        if (Auth::check()) {
            return view('change');
        }
        else {
            return view('auth/login');
        }
    }

    public function event_resolve()
    {
        if (Auth::check()) {
            return view('event_resolve');
        }
        else {
            return view('auth/login');
        }
    }

    public function events()
    {
        if (Auth::check()) {
            return view('events');
        }
        else {
            return view('auth/login');
        }
    }

    public function incidentForm()
    {
        if (Input::has('number')) {
            DB::table('incident')->insert(
                array(
                    'number' => Input::get('number'),
                    'title' => Input::get('title'),
                    'category' => Input::get('category'),
                    'description' => Input::get('description')
                    )
            );

            $fileText = "There was a problem with sending email, please check your internet connection." . PHP_EOL .
                "Please send this file to our mail at mybank@gmail.com" . PHP_EOL . PHP_EOL .
                "Number: " . Input::get('number') . PHP_EOL .
                "Title: " . Input::get('title') . PHP_EOL .
                "Category: " . Input::get('category') . PHP_EOL.
                "Description: " . Input::get('description');
            $myName = "incident.txt";
            $headers = ['Content-type'=>'text/plain', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName)];
            return Response::make($fileText, 200, $headers);
        }
        return view('incident');
    }

    public function problemForm()
    {
        if (Input::has('title')) {
            DB::table('problem')->insert(
                array(
                    'title' => Input::get('title'),
                    'description' => Input::get('description'),
                    'user' => Input::get('user'),
                    'group' => Input::get('group'),
                    'table' => Input::get('table'),
                    'assigned' => Input::get('assigned'),
                    'source' => Input::get('source'),
                    'category' => Input::get('category'),
                    'impact' => Input::get('impact'),
                    'urgency' => Input::get('urgency'),
                    'services' => Input::get('services')
                    )
            );

            $fileText = "There was a problem with sending email, please check your internet connection." . PHP_EOL .
                "Please send this file to our mail at mybank@gmail.com" . PHP_EOL . PHP_EOL .
                "Title: " . Input::get('title') . PHP_EOL .
                "Description: " . Input::get('description') . PHP_EOL .
                "User: " . Input::get('user') . PHP_EOL.
                "Group: " . Input::get('group') . PHP_EOL .
                "Table: " . Input::get('table') . PHP_EOL .
                "Assigned to: " . Input::get('assigned') . PHP_EOL.
                "Source: " . Input::get('source') . PHP_EOL .
                "Category: " . Input::get('category') . PHP_EOL .
                "Impact: " . Input::get('impact') . PHP_EOL.
                "Urgency: " . Input::get('urgency') . PHP_EOL .
                "Affected services: " . Input::get('services');
            $myName = "problem.txt";
            $headers = ['Content-type'=>'text/plain', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName)];
            return Response::make($fileText, 200, $headers);
        }
        return view('problem');
    }

    public function changeForm()
    {
        if (Input::has('number')) {
            DB::table('change')->insert(
                array(
                    'number' => Input::get('number'),
                    'title' => Input::get('title'),
                    'explain' => Input::get('explain')
                    )
            );

            $fileText = "There was a problem with sending email, please check your internet connection." . PHP_EOL .
                "Please send this file to our mail at mybank@gmail.com" . PHP_EOL . PHP_EOL .
                "ID Number: " . Input::get('number') . PHP_EOL.
                "Title: " . Input::get('title') . PHP_EOL .
                "Explanation: " . Input::get('explain');
            $myName = "change.txt";
            $headers = ['Content-type'=>'text/plain', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName)];
            return Response::make($fileText, 200, $headers);
        }
        return view('change');
    }

    public function eventForm()
    {
        if (Input::has('number')) {
            DB::table('event')->insert(
                array(
                    'number' => Input::get('number'),
                    'title' => Input::get('title'),
                    'category' => Input::get('category'),
                    'description' => Input::get('description')
                    )
            );

            $fileText = "There was a problem with sending email, please check your internet connection." . PHP_EOL .
                "Please send this file to our mail at mybank@gmail.com" . PHP_EOL . PHP_EOL .
                "ID Number: " . Input::get('number') . PHP_EOL.
                "Title: " . Input::get('title') . PHP_EOL.
                "Category: " . Input::get('category') . PHP_EOL .
                "Description: " . Input::get('description');
            $myName = "event.txt";
            $headers = ['Content-type'=>'text/plain', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName)];
            return Response::make($fileText, 200, $headers);
        }
        return view('events');
    }

    public function event_resolveForm()
    {
        if (Input::has('number')) {
            DB::table('event_resolve')->insert(
                array(
                    'number' => Input::get('number'),
                    'title' => Input::get('title'),
                    'explanation' => Input::get('explanation')
                    )
            );

            $fileText = "There was a problem with sending email, please check your internet connection." . PHP_EOL .
                "Please send this file to our mail at mybank@gmail.com" . PHP_EOL . PHP_EOL .
                "ID Number: " . Input::get('number') . PHP_EOL.
                "Title: " . Input::get('title') . PHP_EOL.
                "Explanation: " . Input::get('explanation');
            $myName = "event_resolve.txt";
            $headers = ['Content-type'=>'text/plain', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName)];
            return Response::make($fileText, 200, $headers);
        }
        return view('event_resolve');
    }

    public function contactForm()
    {
        if (Input::has('name')) {
            DB::table('contact')->insert(
                array(
                    'name' => Input::get('name'),
                    'email' => Input::get('email'),
                    'description' => Input::get('description')
                    )
            );

            $fileText = "There was a problem with sending email, please check your internet connection." . PHP_EOL .
                "Please send this file to our mail at mybank@gmail.com" . PHP_EOL . PHP_EOL .
                "Full Name: " . Input::get('name') . PHP_EOL.
                "Email: " . Input::get('email') . PHP_EOL.
                "Description: " . Input::get('description');
            $myName = "contact.txt";
            $headers = ['Content-type'=>'text/plain', 'Content-Disposition'=>sprintf('attachment; filename="%s"', $myName)];
            return Response::make($fileText, 200, $headers);
        }
        return view('contact');
    }
}
