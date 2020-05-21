<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'student_id', 'course_id', 'section_id', 'semester_id', 'week_no', 'attendance_count', 'total_count', 'comment'
    ];
}
