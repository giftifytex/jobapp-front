<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CompanyProfile extends Component
{

   public $companyProfile;
   public $basic_info;
   public $social_networks;
   public $contact_info;
    public $company_name, $email, $phone_number, $website, $est_since, $team_size, $category, $allow_in_search, $description;
    public $facebook, $twitter, $linkedIn, $google_plus;
    public $city, $address;

    public function render()
    {
        try 
        {
            $response = Http::get('http://127.0.0.1:8000/api/company-profile/1');
            $this->companyProfile = $response->json();
           
            if(!empty($this->companyProfile['data'])){
            
            $this->basic_info = $this->companyProfile['data']['attributes']['basic_info'];
            $this->social_networks = $this->companyProfile['data']['attributes']['social_networks'];
            $this->contact_info = $this->companyProfile['data']['attributes']['contact_info'];
           

            $this->company_name = $this->basic_info['company_name'];
            $this->email = $this->basic_info['email'];
            $this->phone_number = $this->basic_info['phone_number'];
            $this->website = $this->basic_info['website'];
            $this->est_since = $this->basic_info['est_since'];
            $this->team_size = $this->basic_info['team_size'];
            $this->category = $this->basic_info['category'];
            $this->allow_in_search = $this->basic_info['allow_in_search'];
            $this->description = $this->basic_info['description'];

        
            $this->facebook = $this->social_networks['facebook'];
            $this->twitter = $this->social_networks['twitter'];
            $this->linkedIn = $this->social_networks['linkedin'];
            $this->google_plus = $this->social_networks['google_plus'];

            $this->city = $this->contact_info['city'];
            $this->address = $this->contact_info['address'];

        } else {
                // If the company profile data is not available, initialize attributes with empty values or defaults
                $this->company_name = '';
                $this->email = '';
                $this->phone_number = '';
                $this->website = '';
                $this->est_since = '';
                $this->team_size = '';
                $this->category = '';
                $this->allow_in_search = '';
                $this->description = '';
                $this->facebook = '';
                $this->twitter = '';
                $this->linkedIn = '';
                $this->google_plus = '';
                $this->city = '';
                $this->address = '';
            }
    }   
         catch (\Exception $e) {
            // Handle the exception, log it, or return an error response.
            // For debugging purposes, you can use dd($e) to dump the exception.
            dd($e);
        }


        return view('livewire.backend.company-profile')->extends('components.layouts.backend');
    }

    public function updateBasicInfo(){
        try {
            $data = [
                'company_name' => $this->company_name,
                'email' => $this->email ,
                'phone_number' => $this->phone_number,
                'website' => $this->website,
                'est_since' => $this->est_since,
                'team_size' => $this->team_size,
                'allow_in_search' => $this->allow_in_search,
                'description' => $this->description,
            ];
            // $response = Http::asForm()->put('http://127.0.0.1:8000/api/company-profile/1', $data);

            $response = Http::withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded', // or 'application/json'
                'Accept' => 'application/json',
            ])->asForm()->put('http://127.0.0.1:8000/api/company-profile/1', $data);

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
