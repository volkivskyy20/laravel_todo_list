<div>
    <form wire:submit.prevent="submit">
        <?php if(session()->has('success')): ?>
            <div style="color:green"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <input type="hidden" wire:model="hiddenId" value="<?php echo e($hiddenId); ?>">
        New Task: <br><input type="text" wire:model="task"><br>
        <?php $__errorArgs = ['task'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span style="color: red"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>
        <input type="Submit" class="bg-black text-2xl text-white">
        <a href="javascript:void(0)" wire:click="addForm" class="bg-black text-2xl text-white">Add</a>

    </form>
    <h3>List</h3>

    <table>
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Action</th>
        </tr>
<?php
    $i=1
?>
    <?php $__currentLoopData = $alldata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($i); ?></td>
        <td><?php echo e($ad->task); ?></td>
        <td>
            <a href="javascript:void(0)" wire:click="editForm(<?php echo e($ad->id); ?>)">Edit</a>
            <a href="javascript:void(0)" wire:click="deleteForm(<?php echo e($ad->id); ?>)">Delete</a>

        </td>
    </tr>
    <?php
    $i++
?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($alldata->links()); ?>

</div>
<?php /**PATH C:\OpenServer\domains\test2\resources\views/livewire/task.blade.php ENDPATH**/ ?>