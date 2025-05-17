<?php 
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserService
{
    public function register(array $data): User
    {
        $user = User::create([
            'name_eng' => $data['name_eng'],
            'name_ur' => $data['name_ur'],
            'father_name_eng' => $data['father_name_eng'],
            'father_name_ur' => $data['father_name_ur'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        event(new Registered($user));

        return $user;
    }
}
