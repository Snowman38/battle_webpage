<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>


<!-- 切り替えボタンの設定 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#no-discord"　>
  押すと表示されます。
</button>

<!-- モーダルの設定 -->

<div class="modal" id="no-discord" tabindex="-1" role="dialog"
aria-labelledby="Modal" aria-hidden="true" data-backdrop="static" data-keyboard="false" data-focus="true">
  <!--以下modal-dialogのCSSの部分で modal-lgやmodal-smを追加するとモーダルのサイズを変更することができる-->
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#waiting" 
        id="startcount"　>
  押すと表示されます。
</button>

<!-- モーダルの設定 -->

<div class="modal" id="waiting" tabindex="-1" role="dialog"
aria-labelledby="Modal" aria-hidden="true" data-backdrop="static" data-keyboard="false" data-focus="true">
  <!--以下modal-dialogのCSSの部分で modal-lgやmodal-smを追加するとモーダルのサイズを変更することができる-->
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
      <p id="PassageArea"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-primary">保存</button>
      </div>
    </div>
  </div>
</div>

<p>
   <input type="button" value="カウント開始" id="startcount1" onclick="startShowing();">
   <input type="button" value="カウント停止" id="endcount1" onclick="stopShowing();">
</p>
<p id="PassageArea">(ここにカウントが表示されます)</p>


</div> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yujif\Desktop\website\webpage\resources\views/home.blade.php ENDPATH**/ ?>