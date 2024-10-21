<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class todologin extends Authenticatable
{
    use HasFactory;

    protected $table = 'todologin';
    protected $primaryKey = 'id';
    public function todolistpage()
    {
        return $this->hasMany(todolistpage::class);
    }
   // Define the relationship to the TeamMember model
   public function teamMembers()
   {
       return $this->hasMany(TeamMember::class);
   }
}
