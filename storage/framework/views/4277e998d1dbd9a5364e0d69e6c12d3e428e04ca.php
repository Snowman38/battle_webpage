<?php $__env->startSection('content'); ?>
<?php if($user == false): ?>
  <!-- discord未登録時-->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  ランクマッチ</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  フレンドマッチ</button>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  フリーバトル</button>
<?php else: ?>
  <!-- 待機画面 -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting"
            id="startcount">ランクマッチ</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting"
            id="startcount">フレンドマッチ</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting"
            id="startcount">フリーバトル</button>
<?php endif; ?>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick = "location.href='<?php echo e(route('setting')); ?>'">設定へ</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yujif\Desktop\website\webpage\resources\views/battle.blade.php ENDPATH**/ ?>