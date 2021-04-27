<?php
return [
    'TOKEN_PUBLICO' => env('PAGOPAR_TOKEN_PUBLICO',''),
    'TOKEN_PRIVADO' => env('PAGOPAR_TOKEN_PRIVADO',''),
    'URL_RESPUESTA' => env('PAGOPAR_URL_RESPUESTA',''),
    'pedidos' => [
        'plazo_de_pago' => env('PAGOPAR_PEDIDO_PLAZO_PAGO',2),
    ],
    'vendedor' => [
        'direccion' => env('PAGOPAR_VENDEDOR_DIRECCION',''),
        'telefono' => env('PAGOPAR_VENDEDOR_TELEFONO',''),
        'direccion_referencia' => env('PAGOPAR_VENDEDOR_DIRECCION_REFERENCIA',''),
        'direccion_coordenadas' => [],
    ]
];