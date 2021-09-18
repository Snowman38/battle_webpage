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
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<!-- <script src="<?php echo e(asset('js/app.js')); ?>" defer></script> -->
<script src="<?php echo e(asset('js/user.js')); ?>"></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/header.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/user.css')); ?>" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid flexbox">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand item1" href="<?php echo e(route('home')); ?>">TITLE</a>
        <div class="login-items item2">
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
                  <a class="dropdown-item" href="<?php echo e(route('setting')); ?>">
                    アカウント設定
                  </a>
                  <a class="dropdown-item" href="<?php echo e(route('battlehistory')); ?>">
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

      <div class=" navbar-collapse collapse item3" id="navbarSupportedContent" style>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('battle')); ?>">Battle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('ranking')); ?>">Ranking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('deckpost')); ?>">デッキ共有</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Coming Soon</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
</body>
</html><?php /**PATH C:\Users\yujif\Desktop\website\webpage\resources\views/layouts/header.blade.php ENDPATH**/ ?>