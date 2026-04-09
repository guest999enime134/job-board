<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string'; //UUID = Universal unique identifier
    public $incrementing = false;
    protected $table ='tag';
    protected $fillable = ['title'];//can be updated
    protected $guarded = ['id',];//can't be updated
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
