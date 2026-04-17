<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string'; //UUID = Universal unique identifier
    public $incrementing = false;
    protected $table ='post';
    protected $fillable = [
        'title','body','author','published'
    ];//can be updated
    protected $guarded = [
        'id',
    ];//can't be updated
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
