<!DOCTYPE html>
<body style='background-color: #151515; align-content: center;'>
    
    <?php echo $__env->make('layouts/nevigationbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    
</body>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/TecWeb2023/resources/views/public.blade.php ENDPATH**/ ?>