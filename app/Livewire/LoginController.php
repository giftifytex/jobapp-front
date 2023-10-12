<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class LoginController extends Component
{
    public $email;
    public $password;


    public function rules(){
       return  [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    public function submit(){
        $this->validate();
        $data = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        $response = Http::post('http://127.0.0.1:8000/api/login', $data);
       //check if the user is successfully authenticated and redirect to the jobs page.

       if($response->status() === 200){
            $responseData = $response->json();
            $token = $responseData['data'];

            dd($responseData);
       }
       else{
        $responseData = $response->json();
        dd($responseData['message']);
       }
    }
    public function render()
    {
        return view('livewire.login-controller');
    }
}
