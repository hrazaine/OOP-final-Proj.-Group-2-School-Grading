<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable([
    'name',
    'email',
    'password',
    'role',
    'is_active'
])]

#[Hidden([
    'password',
    'remember_token'
])]

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Automatically convert database values
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    // Check whether the user is an administrator
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    // Check whether the user is a teacher
    public function isTeacher(): bool
    {
        return $this->role === 'teacher';
    }

    // Check whether the user is a student
    public function isStudent(): bool
    {
        return $this->role === 'student';
    }
}