<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Complaint;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'address'
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
