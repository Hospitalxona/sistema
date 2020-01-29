<a href="<?php echo e(route('detalleexp', $id_expediente)); ?>"><img src="<?php echo e(asset('laravel\img\system.png')); ?>">Ver</a>
<!--<a href="#" class="btn btn-primary btn-sm">Editar</a> -->
<a href="<?php echo e(route('altacitas', $id_expediente)); ?>"><img src="<?php echo e(asset('laravel\img\calendario-cita.png')); ?>">Agendar cita</a>

<a href="<?php echo e(route('modifi', $id_expediente)); ?>"> <img src="<?php echo e(asset('laravel\img\editar-archivo.png')); ?>">Modificacion</a>