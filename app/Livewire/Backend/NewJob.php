<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class NewJob extends Component
{
    public $new_job;
    public $title, $description, $pay, $experience, $category, $location, $job_type;
    public function render()
    {
        return view('livewire.backend.new-job')->extends('components.layouts.backend');
    }

    public function save(){
        try {
            $data = [
                'user_id' => 1,
                'title' => $this->title,
                'description' => $this->email ,
                'pay' => $this->phone_number,
                'experience' => $this->website,
                'category' => $this->est_since,
                'location' => $this->team_size,
                'job_type' => $this->allow_in_search,
            ];
            // $response = Http::asForm()->put('http://127.0.0.1:8000/api/company-profile/1', $data);

            $response = Http::withHeaders([
                'Content-Type' => 'application/json', // or 'application/json'
                'Accept' => 'application/json',
            ])->post('http://127.0.0.1:8000/api/company-profile', $data);

            if ($response->successful()) {
               //show notification of successful update
            } else {
                dd($response->json());
            }
        } catch (\Exception $e) {
            // Handle exceptions, log errors, or show an error message.
            dd($e);
        }
    }
}
