<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Register extends Component
{

    public $email;
    public $password;
    public $name;
    public $password_confirmation;

    public function render()
    {
        return view('livewire.register')->extends('components.layouts.guest');
    }

    public function rules(){
        return [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ];
    }

    public function register(){
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];

        $response = Http::post('http://127.0.0.1:8000/api/register', $data);

        if($response->successful()){
            $responseData = $response->json();
           $user = $responseData['data']['user'];
           $token = $responseData['data']['token'];

           Session(['user' => $user, 'token' => $token]);
           return redirect()->to('/jobs');
        }
        else{
            dd($response->json());
        }
    }
}
