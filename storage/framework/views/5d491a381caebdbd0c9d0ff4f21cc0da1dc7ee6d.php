<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/user.js')); ?>" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/header.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/user.css')); ?>" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="/home">TITLE</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/battle">Battle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ranking">Ranking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/deckpost">デッキ共有</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coming Soon</a>
          </li>
         
        </ul>
      </div>
      <div class="login items">
        <?php if(auth()->guard()->guest()): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
          </li>
        <?php if(Route::has('register')): ?>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
          </li>
        <?php endif; ?>
        <?php else: ?>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/user">
              アカウント設定
            </a>
            <a class="dropdown-item" href="/battlehistory">
              対戦履歴
            </a>
              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
              </form>
            </div>
          </li>
        <?php endif; ?>
     </div>
    </div>
  </nav>
  <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
</body>
</html><?php /**PATH C:\Users\yujif\Desktop\website\webpage\resources\views/layouts/header.blade.php ENDPATH**/ ?>