<?php

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{

    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email',
        'responsible' => 'required|max:255',
        'phone' => 'required',
        'address' => 'required',
    ];

}