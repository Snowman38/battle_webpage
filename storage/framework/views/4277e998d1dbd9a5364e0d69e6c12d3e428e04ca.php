<?php $__env->startSection('content'); ?>
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
                <?php echo csrf_field(); ?>
                <input type='hidden' name='user_id' value="<?php echo e($user['id']); ?>">
                <button type="button" class="btn btn-primary btn-lg" id="free-battle-button"><p id="text">フリー対戦</p></button>
            </form> -->
        </section>

        <?php if(<?php echo e($user == null); ?>): ?>
            <!-- redirect to login -->
            <button type="button" class="btn btn-primary btn-lg"
                href ="/login">ランクマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                href ="/login">フレンドマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                href ="/login">フリーバトル</button>
        <?php elseif(<?php echo e($user->discordID == null); ?>): ?>
            <!-- redirect popup to userpage -->
            <button type="button" class="btn btn-primary btn-lg"
                id="no-discord" >ランクマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="no-discord">フレンドマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="no-discord">フリーバトル</button>
        <?php else: ?>
            <!-- look for opponent -->
            <button type="button" class="btn btn-primary btn-lg"
                id="rank-battle-button" >ランクマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="friend-battle-button">フレンドマッチ</button>
            <button type="button" class="btn btn-primary btn-lg"
                id="free-battle-button">フリーバトル</button>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\yujif\Desktop\website\webpage\resources\views/battle.blade.php ENDPATH**/ ?>