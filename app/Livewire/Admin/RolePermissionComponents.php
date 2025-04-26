<?php

namespace App\Livewire\Admin;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.admin')] 
class RolePermissionComponents extends Component
{
    public function render()
    {
        
        return view('livewire.pages.admin.dashboard');
    }
}
