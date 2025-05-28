<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-gray-100 text-center p-10">
    <h1 class="text-3xl text-blue-600 font-bold">
        Hello, <?php echo e($name); ?>! Welcome to Laravel
    </h1>

    <img src="<?php echo e(asset('OIP.jpg')); ?>" alt="Laravel Logo" class="mx-auto mt-4 w-32">
</body>
</html>
<?php /**PATH C:\Users\magpa\laravel-jumpstart\resources\views/greeting.blade.php ENDPATH**/ ?>