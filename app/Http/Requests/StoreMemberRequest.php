<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'members' => 'required|array',
            'members.*.name' => 'required|string',
            'members.*.email' => 'required|email|unique:members,email',
            'members.*.birthday' => 'required|date',
            'members.*.sex' => 'required|string|in:male,female',
        ];
    }
}
