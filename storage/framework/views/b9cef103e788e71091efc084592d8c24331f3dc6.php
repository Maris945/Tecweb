<?php $__env->startSection('Title', 'profilo staff'); ?>

<?php $__env->startSection('content'); ?>

<div style="max-height: 800px; margin-top: -50px; background-image: url(<?php echo e(asset('images/image15.jpeg')); ?>)" class="bg-image">
    
    
    
   
    
    <div class="card" style="max-width: 1300px; max-height: 700px; margin-top: 2%; margin-bottom: 10%; background-color: rgba(100,100,100, 0.6); margin-left: 250px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style=" margin-top: 80px; margin-left: 100px;">
        
   
    <div class="row" style="width:100%; margin-top: -5%">
        <div class="col-md-3">
            <img
                src="<?php echo e(asset('images/image16.jpeg')); ?>"
                class="img-fluid bg-image"
                style="object-fit: cover;
                        border-radius: 50%;
                        height: 250px;
                        width: 300px;"
                alt="Townhouses and Skyscrapers"
                />
        </div>
        
        
  <div class="col-md-8">
      
      <div class="row" >
          <div class="d-flex justify-content-start" style="margin-top:5%;">
              
              <button type="button" class="btn btn-light" data-mdb-ripple-color="dark">Messaggio</button>
          </div>
      </div>
      

      <div class="row" style="margin-top:5%;">

          <h5 style="color:white;">Joshua Ciccolini</h5>
          <p style="color:white;">
              Via Galileo Galilei 8, Montegiorgio
          </p>
          <p style="color:white; margin-top: -1%;">
              Nato a Montegiorgio
          </p>
          
      </div>
      
      
  </div>
  
  
</div>
        
        <div class="row" style="margin-top: 5%;">
            <p style="color: white;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                
            </p> 
           
        </div>
     
        
    </div>
        <br>
        

</div>
    
    
    




    
    
    
</div>


 <div class="card" style="max-width: 1300px; margin-top: 2%; margin-bottom: 10%; background-color: rgba(100,100,100, 0.6); margin-left: 250px; box-shadow: 0 2px 40px 0 rgba(100, 100, 100, .25), 0 3px 50px 40px rgba(100, 100, 100, 0.2) !important;"">
    <div class="card-body" style=" margin-top: 3%;">
       
        <?php echo $__env->make('userlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
    </div>
 </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/TecWeb2023/resources/views/profilostaff.blade.php ENDPATH**/ ?>