@extends('layouts.header')
@extends('layouts.footer')

@section('content')
<div class="container">
    <div class="card-body">


        <section id="no_discord">
            <h2>WARNING</h2>
            <p>Discord ID を登録してください。</p>
            <button type="button" class="btn btn-primary btn-lg" href="/user">SETTING</button>
        </section>

        <section id="searching">
            <h2>対戦相手検索中</h2>
            <p>待機時間：</p>
            <button type="button" class="btn btn-primary btn-lg" id="battle-cancel">キャンセル</button>
            <!-- delate user from waiting list -->
            <!-- <form method='POST' action="/store">
                @csrf
                <input type='hidden' name='user_id' value="{{ $user['id'] }}">
                <button type="button" class="btn btn-primary btn-lg" id="free-battle-button"><p id="text">フリー対戦</p></button>
            </form> -->
        </section>

        @if({{$user == null}})
            <!-- redirect to login -->
            <button type="button" class="btn btn-primary btn-lg"
                href ="/login">ランクマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                href ="/login">フレンドマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                href ="/login">フリーバトル</button>
        @elseif({{$user->discordID == null}})
            <!-- redirect popup to userpage -->
            <button type="button" class="btn btn-primary btn-lg"
                id="no-discord" >ランクマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="no-discord">フレンドマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="no-discord">フリーバトル</button>
        @else
            <!-- look for opponent -->
            <button type="button" class="btn btn-primary btn-lg"
                id="rank-battle-button" >ランクマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="friend-battle-button">フレンドマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="free-battle-button">フリーバトル</button>
    </div>
</div>

@endsection