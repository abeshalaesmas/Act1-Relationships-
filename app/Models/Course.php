<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

   use HasFactory;
   protected $fillable = [
        "course_name",
        "session",
        "grades"
   

   ];
   protected $guarded = [
      "user_id"
   ];


   public function users(){
    return $this->belongsToMany(User::class,'users_courses', 'user_id', 'course_id');
   }

  
}
