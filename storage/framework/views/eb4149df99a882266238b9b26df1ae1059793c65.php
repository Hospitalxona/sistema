<?php $__currentLoopData = $resm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td colspan="2" style="border: none;">
        <input type="text" class="form-control" size="50" name="Nombre_Mwrw" value="<?php echo e($e->medicamento); ?>">
    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
