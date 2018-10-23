<?php $__env->startSection('content'); ?>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image:url(<?php echo e(url('uploads/12.jpg')); ?>)">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Iniciar Sesion
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="label-checkbox100" for="ckb1">
                            Recuerdame
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Iniciar Sesion
                        </button>
                    </div>


                    <div class="text-center p-t-90">
                        <a class="txt1" href="<?php echo e(route('password.request')); ?>">
                            ¿Olvidaste tu contraseña?
                        </a>
                        <br>
                        <a class="txt1" href="<?php echo e(route('register')); ?>">
                            Registrate
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layouts.m', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>