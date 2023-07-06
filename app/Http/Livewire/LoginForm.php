<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;
use Auth;

class LoginForm extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login-form')
                ->extends('layouts.login')
                ->section('content');
    }
    
    public function submit()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $user = User::where('email',$validatedData['email'])->first();
        if ($user && Hash::check($validatedData['password'], $user->password)) {
                Auth::login($user);
                return redirect()->to('/');
            
            }

        $this->addError('invalid_credentials', 'Invalid credentails, try again');

    }
}
