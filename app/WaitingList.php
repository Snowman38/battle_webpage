<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//DBとやり取りする
class Waitinglist extends Model
{

    // テーブル名
    protected $table = 'waiting_list';

    //　可変項目
    protected $fillable =
    [
        'id',
        'user_id',
        'type',
        'create_at',
        'rating',
        'opponent_name',
        'status',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function searchOpponent()
    {
    //対戦相手を探す　rating+-50以下
    
    //居なかった場合ユーザをwaitinglistに追加

    //見つかった場合対戦相手をリストに追加、ページリダイレクト
        return view('user');
    }

}
