<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = 'contact_form';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];

}
