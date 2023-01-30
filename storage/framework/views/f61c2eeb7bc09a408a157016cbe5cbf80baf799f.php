<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>

<div style="height: 900px; margin-top: -50px; background-image: url(<?php echo e(asset('images/image2.jpg')); ?>)" class="bg-image">
    
    
    
    <div class="card" style="max-width: 500px; height: 500px; margin-top: 10%; background-color: rgba(100,100,100, 0.6); margin-left: 250px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style="max-width: 300px; margin-top: 80px; margin-left: 100px;">
        
    
        <div class="d-flex justify-content-center" style="margin-bottom: 20px;">
            <h5 style="color: white;">Login</h5>
        </div>
    
        <div class="input-group mb-3" >
  <input

    type="text"
    class="form-control"
    placeholder="Username"
    aria-label="Username"
    aria-describedby="basic-addon1"
  />
</div>
    
    <div class="input-group mb-3">
  <input
    type="password"
    class="form-control"
    placeholder="Password"
    aria-label="Password"
    aria-describedby="basic-addon1"
  />
</div>
        <div class=" d-flex justify-content-center">
        <button type="button" class="btn btn-light" data-mdb-ripple-color="dark">Login</button>
        </div>
        
        
        <div  style="margin-top: 30px; text-align: center;">
            <p style="color: white">Non sei registrato?</p>
            <form action="<?php echo e(route('registration')); ?>" method="GET">
                 <button type="submit" class="btn btn-light" data-mdb-ripple-color="dark">Registrati</button>
            </form>
           
        </div>
        
    </div>
</div>



<div class="d-flex justify-content-end" style="margin-right: 20%; margin-top: -30%;">
    <img src="<?php echo e(asset('images/image9.png')); ?>" style="position: relative; max-width: 25%;">
</div>
    
    
    
</div>






    


<?php echo $__env->make('layouts/blackbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/TecWeb2023/resources/views/auth/login.blade.php ENDPATH**/ ?>