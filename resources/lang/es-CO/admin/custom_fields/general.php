<?php

return [
    'custom_fields'		        => 'Campos personalizados',
    'manage'                    => 'Gestionar',
    'field'		                => 'Campo',
    'about_fieldsets_title'		=> 'Acerca de los Grupos de Campos Personalizados (Fieldsets)',
    'about_fieldsets_text'		=> 'Los conjuntos de campos permiten crear grupos de campos personalizados que son frecuentemente reutilizados para tipos específicos de modelos de activos.',
    'custom_format'             => 'Formato de Regex personalizado...',
    'encrypt_field'      	        => 'Encriptar el valor de este campo en la base de datos',
    'encrypt_field_help'      => 'ADVERTENCIA: Encriptar un campo hace que no se pueda buscar.',
    'encrypted'      	        => 'Encriptado',
    'fieldset'      	        => 'Fieldset',
    'qty_fields'      	      => 'Campos de Cantidad',
    'fieldsets'      	        => 'Fieldset',
    'fieldset_name'           => 'Nombre del Fieldset',
    'field_name'              => 'Nombre del Campo',
    'field_values'            => 'Valores del Campo',
    'field_values_help'       => 'Añade opciones seleccionables, una por línea. Líneas en blanco además de la primera será ignorada.',
    'field_element'           => 'Elemento de Formulario',
    'field_element_short'     => 'Elemento',
    'field_format'            => 'Formato',
    'field_custom_format'     => 'Formato Regex Personalizado',
    'field_custom_format_help'     => 'Este campo te permite usar una expresión regex para la validación. Este debe empezar con "regex:" - por ejemplo, para validar que un valor de campo personalizado contiene un IMEI válido (15 dígitos numéricos), podrías usar <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatorio',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Usado por Modelos',
    'order'   		            => 'Orden',
    'create_fieldset'         => 'Nuevo Fieldset',
    'update_fieldset'         => 'Actualizar conjunto de campos',
    'fieldset_does_not_exist'   => 'Fieldset :id no existe',
    'fieldset_updated'         => 'Conjunto de campos actualizado',
    'create_fieldset_title' => 'Crear un nuevo conjunto de campos',
    'create_field'            => 'Nuevo Campo Personalizado',
    'create_field_title' => 'Crear un nuevo campo personalizado',
    'value_encrypted'      	        => 'El valor de este campo está encriptado en la base de datos. Sólo los administradores pueden ver el valor desencriptado',
    'show_in_email'     => '¿Incluye el valor de este campo en los correos de pago enviados al usuario? Los campos cifrados no se pueden incluir en los correos electrónicos',
    'show_in_email_short'     => 'Incluye en correos electrónicos.',
    'help_text' => 'Texto de ayuda',
    'help_text_description' => 'Este es un texto opcional que aparecerá debajo de los elementos del formulario mientras se edita un activo para proporcionar contexto en el campo.',
    'about_custom_fields_title' => 'Acerca de campos personalizados',
    'about_custom_fields_text' => 'Los campos personalizados le permiten añadir atributos arbitrarios a los activos.',
    'add_field_to_fieldset' => 'Añadir campo al conjunto de campos',
    'make_optional' => 'Requerido - haga clic para hacer opcional',
    'make_required' => 'Opcional - haga clic para hacer necesario',
    'reorder' => 'Reordenar',
    'db_field' => 'Campo DB',
    'db_convert_warning' => 'ADVERTENCIA. Este campo está en la tabla de campos personalizados como <code>:db_column</code> pero debe ser <code>:expected</code>.',
    'is_unique' => 'Este valor debe ser único en todos los activos',
    'unique' => 'Único',
    'display_in_user_view' => 'Permitir al usuario retirado ver estos valores en su página Ver Recursos asignados',
    'display_in_user_view_table' => 'Visible para el usuario',
    'auto_add_to_fieldsets' => 'Añadir automáticamente a cada nuevo conjunto de campos',
    'add_to_preexisting_fieldsets' => 'Añadir a cualquier conjunto de campos existente',
    'show_in_listview' => 'Mostrar por defecto en las vistas de la lista. Los usuarios autorizados podrán mostrar/ocultar a través del selector de columnas',
    'show_in_listview_short' => 'Mostrar en listas',
    'show_in_requestable_list_short' => 'Mostrar en la lista de activos que se pueden solicitar',
    'show_in_requestable_list' => 'Mostrar el valor en la lista de activos que se pueden solicitar. Los campos cifrados no se mostrarán',
    'encrypted_options' => 'Este campo está cifrado, por lo que algunas opciones de visualización no estarán disponibles.',

];
