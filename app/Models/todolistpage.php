<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolistpage extends Model
{
    use HasFactory;

    protected $table = 'todolistpage';
    protected $primaryKey = 'id';
    public function todologin()
    {
        return $this->belongsTo(todologin::class, 'user_id', 'id');
    }
}

