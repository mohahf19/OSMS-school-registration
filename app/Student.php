<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getgpaAttribute(){
        if ($this->total_credits == 0)
            return 0;
        
        return (double) $this->grade_points / $this->total_credits;
    }
}
