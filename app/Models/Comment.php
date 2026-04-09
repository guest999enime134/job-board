<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table ='comment';
    protected $fillable = [
        'author','content','Post_ID'
    ];//can be updated
    protected $guarded = [
        'id',
    ];//can't be updated
    public function post(){
        return $this->belongsTo(Post::class);
}
}

