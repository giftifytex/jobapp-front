<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Jobs extends Component
{
    public $jobs;
    public $categories;
    public $searchTerm;
    public $location;
    public $category;
    public $jobType;
    public $datePosted;
    public $experience;
    public $salary;


    public function render()
    {
        
        $data = [
            'searchTerm' => $this->searchTerm,
            'location' => $this->location,
            'category'  => $this->category,
            'jobType' => $this->jobType,
            'datePosted'  => $this->datePosted,
            'experience'  => $this->experience,
            'salary' => $this->salary,
        ];

        $response = Http::get('http://127.0.0.1:8000/api/jobs', $data);
        $responseData = $response->json();
        //dd($responseData);
        $this->jobs = $responseData['jobs'];
        $this->categories = $responseData['categories'];
        // dd($this->jobs);
        return view('livewire.jobs');
    }

    public function searchJobs(){
        $queryParams = [];

        if (!empty($this->searchTerm)) {
            $queryParams['searchTerm'] = $this->searchTerm;
        }
    
        if (!empty($this->location)) {
            $queryParams['location'] = $this->location;
        }
        if (!empty($this->category)) {
            $queryParams['category'] = $this->category;
        }


        $response = Http::get('http://127.0.0.1:8000/api/jobs', $queryParams);
        $responseData = $response->json();
        $this->jobs = $responseData['jobs'];
        $this->categories = $responseData['categories'];
    }
}
