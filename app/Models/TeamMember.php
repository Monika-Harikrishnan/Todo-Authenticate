<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TodoLogin;

class TeamMember extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'first_name', 'last_name', 'active'];
    protected $guarded = [];

    public function todologin()
    {
        return $this->belongsTo(todologin::class, 'user_id', 'id');
    }
}
