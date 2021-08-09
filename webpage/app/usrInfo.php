<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//DBとやり取りする
class usrInfo extends Model
{

    // テーブル名
    protected $table = 'userinfo';

    //　可変項目
    protected $fillable =
    [
        'title',
        'user_id',
        'discordID',
        'living',
        'online',
        'rating',
        'number_of_battle',
        'number_of_win',
        'number_of_lose',
        'number_of_tie',
        'win_rate'
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
