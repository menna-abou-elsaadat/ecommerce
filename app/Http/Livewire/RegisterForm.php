<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\UserService;
use Auth;

class RegisterForm extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register-form')
                ->extends('layouts.login')
                ->section('content');;
    }

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        
        $user = UserService::store($validatedData['name'],$validatedData['email'],$validatedData['password']);

        Auth::login($user);
        return redirect()->to('/');
    }
}
