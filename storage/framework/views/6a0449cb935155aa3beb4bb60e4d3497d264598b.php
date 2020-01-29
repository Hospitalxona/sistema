<?php $__currentLoopData = $resm1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td colspan="2" style="border: none;">
        <input type="text" class="form-control" name="Cantidad_surtida" value="<?php echo e($e1->existencia); ?>" readonly>
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>