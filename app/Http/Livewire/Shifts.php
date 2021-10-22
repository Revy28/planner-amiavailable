<?php

namespace App\Http\Livewire;


use App\Models\User;

use Illuminate\Http\Client\Request;
use Livewire\Component;

class Shifts extends Component
{
    public $shifts = [];
    public $allShifts = [];

    public function mount()
    {
        $this->allShifts = \App\Models\Shifts::all();
        $this->shifts = [
            ['shift_id' => '', 'starttijd' => 1]
        ];
    }

//    public function addShift(Request $request) {
//        \App\Models\Shifts::create([
//            'name' => $request->name,
//        ]);
//    }

    public function addShift()
    {
        $this->shifts[] = ['shift_id' => '', 'starttijd', 'eindtijd' => 1];
    }

    public function removeShift()
    {

    }

    public function render()
    {
        $employees = User::where('is_admin', false)->get();
        return view('livewire.shifts')->with('employees', $employees);
    }
}
