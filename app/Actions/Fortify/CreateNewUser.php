<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input): User
    {
        // validasi input
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],  // Pastikan email unik di tabel users
            'password' => $this->passwordRules(),
        ])->validate();

        // validasi apakah email yang di input terdaftar di tabel siswa
        if (!Siswa::where('email', $input['email'])->exists()) {
            throw ValidationException::withMessages([
                'email' => 'Email ini tidak terdaftar sebagai siswa.',
            ]);
        }

        // membuat user baru dengan role null
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => null,  // Role masih null, admin nanti yang akan set role
        ]);
    }
}