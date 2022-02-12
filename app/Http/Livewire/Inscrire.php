<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;


class Inscrire extends Component
{

    public $username;
    public $cin;
    public $img_cin;
    public $phone;
    public $formation;
    public $type_learn;


    protected $rules = [
        'username' => 'required',
        'cin' => 'required',
        'img_cin' => 'required|image',
        'phone' => 'required',
        'formation' => 'required',
        'type_learn' => 'required'
    ];


    public function render()
    {
        return view('livewire.inscrire');
    }



    //insert data 
    public function inscrire_submit()
    {
        $this->validate();
        $inscrir = new Student;
        $inscrir->create($this->validate());
    }
}
