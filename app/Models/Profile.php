<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        "status",
        "year",
        "country"
        
        
    ];
    protected $guarded = [
        "user_id"
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    
   
}
