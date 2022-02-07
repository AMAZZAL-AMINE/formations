<?php

namespace App\Http\Livewire;

use App\Models\Formation;
use Livewire\Component;

class Fomrations extends Component {

    public $name;
    public $slug;
    public $desc;
    public $price;

    protected $rules = [
        'name' => 'required|min:6',
        'slug' => 'required|min:6|unique:formations',
        'desc' => 'required|min:10',
        'price' => 'required',
    ];
 

    public function render() {
        return view('livewire.fomrations');
    }

    public function creatFormation() {
        $this->validate();
    
        //insert data to database
        Formation::create(
            [
               'name' => $this->name, 
               'slug' => $this->slug, 
               'desc' => $this->desc, 
               'price' => $this->price, 
            ]
        );
        session()->flash("message", "Formation Has Been Created Successfuly");
    }

}
