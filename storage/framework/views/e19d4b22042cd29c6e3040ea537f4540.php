<?php $__env->startSection('title','Teacher Dashboard'); ?>
<?php $__env->startSection('styles'); ?>
<?php $__env->startSection('content'); ?>
<style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            padding: 10px;
            margin: 5px 0;
            background-color: #444;
            cursor: pointer;
        }

        .sidebar ul li a{
            color: white;
            text-decoration: none;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .header {
            background-color: #04AA6D;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
</style>
<?php $__env->stopSection(); ?>
<?php if (isset($component)) { $__componentOriginalb61c202d8e588e94c762ada9935cb4b4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb61c202d8e588e94c762ada9935cb4b4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb61c202d8e588e94c762ada9935cb4b4)): ?>
<?php $attributes = $__attributesOriginalb61c202d8e588e94c762ada9935cb4b4; ?>
<?php unset($__attributesOriginalb61c202d8e588e94c762ada9935cb4b4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb61c202d8e588e94c762ada9935cb4b4)): ?>
<?php $component = $__componentOriginalb61c202d8e588e94c762ada9935cb4b4; ?>
<?php unset($__componentOriginalb61c202d8e588e94c762ada9935cb4b4); ?>
<?php endif; ?>
<?php if (isset($component)) { $__componentOriginal035066fc4f1b1eff9bed86e474708e8d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal035066fc4f1b1eff9bed86e474708e8d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginald37f1b809d8dad08d9600a37cd72bf8e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald37f1b809d8dad08d9600a37cd72bf8e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald37f1b809d8dad08d9600a37cd72bf8e)): ?>
<?php $attributes = $__attributesOriginald37f1b809d8dad08d9600a37cd72bf8e; ?>
<?php unset($__attributesOriginald37f1b809d8dad08d9600a37cd72bf8e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald37f1b809d8dad08d9600a37cd72bf8e)): ?>
<?php $component = $__componentOriginald37f1b809d8dad08d9600a37cd72bf8e; ?>
<?php unset($__componentOriginald37f1b809d8dad08d9600a37cd72bf8e); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal0ec416a8e2b6d8258f950dd6c4621d1f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0ec416a8e2b6d8258f950dd6c4621d1f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-body','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0ec416a8e2b6d8258f950dd6c4621d1f)): ?>
<?php $attributes = $__attributesOriginal0ec416a8e2b6d8258f950dd6c4621d1f; ?>
<?php unset($__attributesOriginal0ec416a8e2b6d8258f950dd6c4621d1f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ec416a8e2b6d8258f950dd6c4621d1f)): ?>
<?php $component = $__componentOriginal0ec416a8e2b6d8258f950dd6c4621d1f; ?>
<?php unset($__componentOriginal0ec416a8e2b6d8258f950dd6c4621d1f); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal035066fc4f1b1eff9bed86e474708e8d)): ?>
<?php $attributes = $__attributesOriginal035066fc4f1b1eff9bed86e474708e8d; ?>
<?php unset($__attributesOriginal035066fc4f1b1eff9bed86e474708e8d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal035066fc4f1b1eff9bed86e474708e8d)): ?>
<?php $component = $__componentOriginal035066fc4f1b1eff9bed86e474708e8d; ?>
<?php unset($__componentOriginal035066fc4f1b1eff9bed86e474708e8d); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\xampp\htdocs\auth-app\resources\views/Teacher/teacher-dashboard.blade.php ENDPATH**/ ?>