<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'text',
        'client_id',
        'in_work',
    ];

    // protected $casts = [
    //     'in_work' => 'boolean'
    // ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
