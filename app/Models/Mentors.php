<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentors extends Model
{
    use HasFactory;

    protected $table = "tb_mentor";
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'group',
        'mentor_fullname',
        'mentor_slug',
        'mentor_category',
        'mentor_graduation',
        'currently_working',
        'expertise',
        'description',
        'short_desc',
        'mentor_picture',
        'mentor_alt',
        'mentor_status',
        'lang',
        'created_at',
        'updated_at'
    ];

    public function mentor_video(){
        return $this->hasMany(MentorVideos::class, 'mentor_id', 'group');
    }
    public function blog(){
        return $this->hasMany(Blogs::class, 'mt_id', 'id');
    }
    public function languages(){
        return $this->belongsTo(Languages::class, 'lang', 'language_id');
    }
}