<?php

return array(

    'invalid_category_type' => 'La categoría debe ser una categoría para consumibles.',
    'does_not_exist' => 'El consumible no existe.',

    'create' => array(
        'error'   => 'El consumible no fue creado, por favor inténtelo nuevamente.',
        'success' => 'Consumible creado con éxito.'
    ),

    'update' => array(
        'error'   => 'El consumible no fue actualizado, por favor, inténtelo de nuevo',
        'success' => 'Consumible actualizado con éxito.'
    ),

    'delete' => array(
        'confirm'   => '¿Está seguro de que desea eliminar este consumible?',
        'error'   => 'Hubo un problema al eliminar el consumible. Por favor inténtelo de nuevo.',
        'success' => 'El consumible fue borrado con éxito.'
    ),

     'checkout' => array(
        'error'   		=> 'El consumible no fue asignado, por favor inténtelo de nuevo',
        'success' 		=> 'Consumible asignado correctamente.',
        'user_does_not_exist' => 'Ese usuario no es válido. Por favor, inténtelo de nuevo.',
         'unavailable'      => 'No hay suficientes consumibles para esta asignación. Por favor, compruebe la cantidad disponible. ',
    ),

    'checkin' => array(
<<<<<<< HEAD
        'error'   		=> 'El consumible no fue ingresado, por favor inténtelo de nuevo',
        'success' 		=> 'El consumible fue ingresado correctamente.',
        'user_does_not_exist' => 'Ese usuario no es válido. Por favor, inténtelo de nuevo.'
    )
=======
        'error'   		=> 'El consumible no fue ingresado, por favor, inténtelo de nuevo',
        'success' 		=> 'El consumible fue ingresado con éxito.',
        'user_does_not_exist' => 'El usuario es inválido. Por favor inténtelo de nuevo.'
    ),

    'numeric'  => 'El número total debe ser numérico' ,
    'required' => 'El número total no puede estar vacío' ,
    'over'     => 'El número total prestado es mayor que el stock disponible',
    'under'    => 'El número total no puede ser cero'

>>>>>>> 6945fbb0c (- updating validator to use localized strings)


);
