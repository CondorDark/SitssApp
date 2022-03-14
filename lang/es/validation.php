<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'accepted_if' => 'El :attribute debe aceptarse cuando :other es :value.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute solo debe contener letras.',
    'alpha_dash' => 'El :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo debe contener letras y números.',
    'array' => 'El :attribute debe ser un array.',
    'before' => 'El :attribute debe ser una fecha antes :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
        'file' => 'El :attribute debe tener entre :min y :max kilobytes.',
        'numeric' => 'El :attribute debe tener entre :min y :max.',
        'string' => 'El :attribute debe tener entre :min y :max caracteres.',
    ],
    'boolean' => 'El :attribute el campo debe ser verdadero o falso.',
    'confirmed' => 'El :attribute la confirmación no coincide.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'declined' => 'El :attribute debe ser rechazado.',
    'declined_if' => 'El :attribute debe rechazarse cuando :other es :value.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe ser :digits dígitos.',
    'digits_between' => 'El :attribute debe estar entre :min y :max dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute el campo tiene un valor duplicado.',
    'email' => 'El :attribute Debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El seleccionado :attribute es invalido.',
    'exists' => 'El seleccionado :attribute es  invalido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute el campo debe tener un valor.',
    'gt' => [
        'array' => 'El :attribute debe tener más de :value elementos.',
        'file' => 'El :attribute debe tener más :value kilobytes.',
        'numeric' => 'El :attribute debe tener más :value.',
        'string' => 'El :attribute debe tener más :value caracteres.',
    ],
    'gte' => [
        'array' => 'EL :attributedebe tener :value artículos o más.',
        'file' => 'EL :attribute debe ser mayor o igual que :value kilobytes.',
        'numeric' => 'EL :attribute debe ser mayor o igual que :value.',
        'string' => 'EL :attribute debe ser mayor o igual que :value caracteres.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El seleccionado :attribute es invalido.',
    'in_array' => 'El :attribute campo does not exist in :oElr.',
    'integer' => 'El :attribute must be an integer.',
    'ip' => 'La :attribute must be a valid IP address.',
    'ipv4' => 'La :attribute must be a valid IPv4 address.',
    'ipv6' => 'La :attribute must be a valid IPv6 address.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'array' => 'El :attributedebe tener menos de :value elementos.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'numeric' => 'El :attribute debe ser menor que :value.',
        'string' => 'El :attribute debe ser menor que :value caracteres.',
    ],
    'lte' => [
        'array' => 'EL :attribute no debe tener más de :value elementos.',
        'file' => 'EL :attribute debe ser menor que o igual a :value kilobytes.',
        'numeric' => 'EL :attribute debe ser menor que o igual a :value.',
        'string' => 'EL :attribute debe ser menor que o igual a :value caracteres.',
    ],
    'mac_address' => 'EL :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El :attribute no debe tener más de :max elementos.',
        'file' => 'El :attribute no debe ser mayor que :max kilobytes.',
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'string' => 'El :attribute no debe ser mayor que :max caracteres.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El :attribute debe tener al menos :min elementos.',
        'file' => 'El :attribute debe ser por lo menos :min kilobytes.',
        'numeric' => 'El :attribute debe ser por lo menos :min.',
        'string' => 'El :attribute debe ser por lo menos :min caracteres.',
    ],
    'multiple_of' => 'El :attribute debe ser múltiplo de :value.',
    'not_in' => 'El seleccionado :attribute es invalido.',
    'not_regex' => 'El :attribute formato es invalido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'La clace :attribute es incorrecto.',
    'present' => 'El :attribute campo must be present.',
    'prohibited' => 'El :attributeel campo esta prohibido.',
    'prohibited_if' => 'El :attributeel campo esta prohibido cuando :oElr es :value.',
    'prohibited_unless' => 'El :attributeel campo esta prohibido a no ser que :other es en :values.',
    'prohibits' => 'The :attribute campo prohibits :other from being present.',
    'regex' => 'The :attribute formato es invalido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_array_keys' => 'EL :attribute campo debe contener entradas para: :values.',
    'required_if' => 'El :attribute el campo es obligatorio cuando :other es :value.',
    'required_unless' => 'El :attribute los campos son obligatorios a menos que :other es en :values.',
    'required_with' => 'El :attribute campo es requerido cuando :values es regalo.',
    'required_with_all' => 'El :attribute campo es requerido cuando :values están presentes.',
    'required_without' => 'El :attribute campo es requerido cuando :values no es present.',
    'required_without_all' => 'El :attribute campo es requerido cuando ninguno de :values están presentes.',
    'same' => 'El :attribute y :other debe coincidir con.',
    'size' => [
        'array' => 'El :attributedebe contener :size elementos.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'numeric' => 'El :attribute debe ser :size.',
        'string' => 'El :attribute debe ser :size caracteres.',
    ],
    'starts_with' => 'El :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'El :attribute debe ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona horaria valida.',
    'unique' => 'El :attribute ya se ha tomado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'El :attribute debe ser una URL valida.',
    'uuid' => 'El :attribute debe ser un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'na_station'       => 'nombre de estación ',
        'sg_station'       => 'sigla de estación ',
        'co_travel'        => 'código de ruta',
        'nu_Kilometer'     => 'cantidad de kilometros',
        'co_origin'        => 'código de origen',
        'co_destiny'       => 'código de destino',
        'nu_bus'           => 'número de bus',
        'tx_model'         => 'modelo ',
        'tx_serial'        => 'seríal ',
        'nu_place'         => 'número de puestos',
        'fe_safra'         => 'fecha de safra',
        'hr_safra'         => 'hora de safra', 
        'co_unit'          => 'código de unidad',
        'nu_mobilization'  => 'número de mobilizacion',
        'email'            => 'correo',
        'name'             => 'nombre',
        'password'         => 'clave'
        
    ]

];
