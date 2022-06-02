<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'dni' => ['required', 'string', 'max:9',],
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'birth_date'=>['required', 'date'],
            'telephone'=> ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'signup-terms' => ['accepted'],
        ])->validate();

        return User::create([
            'dni' => $input['dni'],
            'name' => $input['name'],
            'surname' => $input['surname'],
            'email' => $input['email'],
            'birth_date' => $input['birth_date'],
            'telephone' => $input['telephone'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
