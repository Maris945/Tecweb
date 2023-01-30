<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div style="height: 900px; background-image: url(<?php echo e(asset('images/image2.jpg')); ?>)" class="bg-image">
    
    
    
    <div class="card" style="max-width: 500px; height: 500px; margin-top: 10%; background-color: rgba(100,100,100, 0.6); margin-left: 250px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style="max-width: 300px; margin-top: 80px; margin-left: 100px;">
        
    
        <div class="d-flex justify-content-center" style="margin-bottom: 20px;">
            <h5 style="color: white;">Login</h5>
        </div>
        
        <?php echo e(Form::open(array('route' => 'login'))); ?>

        
        <div class="input-group mb-3" >
        <?php echo e(Form::text('Username', 'Username',['id' => 'Username', 'class' => 'form-control'] )); ?>        
        </div>
        
          <div class="input-group mb-3" >
        <?php echo e(Form::password('Password',['id' => 'Password', 'class' => 'form-control'] )); ?>        
        </div>
        
        
        <div class="d-flex justify-content-center">
            <div>
            <?php echo e(Form::submit('Login' , ['class' => 'btn btn-light',  'style' => 'margin-top: 10%;'])); ?>

            </div>
        </div>
        
        <div class="d-flex justify-content-center" style="margin-top: 15%;">
                <p style="color: white; margin-right: 5%;">Non sei registrato?</p>
        </div>
        
        
         <div class="d-flex justify-content-center">
                <form action="<?php echo e(route('register')); ?>" method=GET>
                <button type="submit" class="btn btn-light px-3 me-3" style="height:40px;">Registrati</button>
        </form>
        </div>
        
               
        
        
        
        <?php echo e(Form::close()); ?>

        
    </div>
        
    </div>
        
    <div class="d-flex justify-content-end" style="margin-right: 20%; margin-top: -30%;">
    <img src="<?php echo e(asset('images/image9.png')); ?>" style="position: relative; max-width: 25%;">
</div>
    
</div>

<?php $__env->stopSection(); ?>




        
        
<?php echo $__env->make('public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/TecWeb2023/resources/views/auth/login.blade.php ENDPATH**/ ?>