<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['status', 'content', 'user_id'];
    
    //このタスクを所有するユーザーを取得
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
