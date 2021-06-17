<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'deadline',
        'category',
        'priority',
        'comment'
    ];
    public function ownedBy(User $user){
        return $user->id===$this->user_id;
    }
}
