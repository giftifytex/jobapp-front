<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Login extends Component
{
    public $email;
    public $password;

    public function rules(){
        return [
            'email' => 'required|string',
            'password' => 'required|string|min:6'
        ];
    }

    public function login(){
        
        $this->validate();

        $data = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $response = Http::post('http://127.0.0.1:8000/api/login', $data);

        if ($response->successful()) {
            // API request was successful (status code 200)
            $responseData = $response->json();
            $user = $responseData['data']['data'];
            $token = $responseData['data']['token'];
            Session([
                'token' => $token,
                'user' => $user,
            ]);
            return redirect()->to('/jobs');
        } else {
            // API request failed
            $responseData = $response->json();

            // Handle the error or display an error message
            // For example, you can show $responseData['message'] to the user

            dd($responseData); // Debug or handle the error response
        }
    }


    public function render()
    {
        return view('livewire.login')->extends('components.layouts.guest');
    }
}
