<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    protected $rules = [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
    ];

    public function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store()
    {
        $this->validate();

        Student::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Student Created Successfully.');
        $this->resetInputFields();
        $this->dispatchBrowserEvent('StudentAdded', "$this->ids");
    }

    public function render()
    {
        $students = Student::orderBy('id', 'ASC')->get();
        return view('livewire.students', ['students' => $students])
                ->extends('layouts.app')
                ->section('content');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate();

        if($this->ids)
        {
            $student = Student::find($this->ids);
            $student->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
            session()->flash('message', 'Student updated Successfully!');
            $this->resetInputFields();
            $this->dispatchBrowserEvent('close-modal');
        }
    }

    public function delete($id)
    {
        if($id)
        {
            Student::where('id', $id)->delete();
            session()->flash('message', 'Student deleted Successfully!');
        }
    }
}
