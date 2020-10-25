<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;

class Dropdowns extends Component
{
    public $countries;
    public $cities;

    public $country;
    public $city;

    public function mount()
    {
        $this->countries = Country::all();
        $this->cities = collect();
    }

    public function render()
    {
        return view('livewire.dropdowns');
    }

    public function updatedCountry($value)
    {
        $this->cities = City::where('country_id', $value)->get();
        $this->city = $this->cities->first()->id;
    }
}
