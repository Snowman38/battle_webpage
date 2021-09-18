
@extends('layouts.header')
@extends('layouts.footer')

@section('content')
@if($user == false)
  <!-- discord未登録時-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  ランクマッチ</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  フレンドマッチ</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  フリーバトル</button>
@else
  <!-- 待機画面 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting"
            id="startcount">ランクマッチ</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting"
            id="startcount">フレンドマッチ</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting"
            id="startcount">フリーバトル</button>
@endif
  <!-- discord警告　modal -->
  <div class="modal" id="no-discord" tabindex="-1" role="dialog"
      aria-labelledby="Modal" aria-hidden="true" data-backdrop="static" data-keyboard="false" data-focus="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Modal">DISCORD-IDを登録してください。
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          モーダルのコンテンツを表示します。このモーダルはサイズを大きくしています。
          またレシポンシブデザインに対応しているので画面を小さくすると、モーダルも自動で縮小されます
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick = "location.href='{{ route('setting') }}'">設定へ</button>
        </div>
      </div>
    </div>
  </div>

    <!-- waiting modal -->
    <div class="modal" id="waiting" tabindex="-1" role="dialog"
     aria-labelledby="Modal" aria-hidden="true" data-backdrop="static" data-keyboard="false" data-focus="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Modal">対戦相手検索中
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <p id="PassageArea"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
        </div>
      </div>
    </div>
  </div>


</div> 
@endsection
