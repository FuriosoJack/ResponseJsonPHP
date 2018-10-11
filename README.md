# ResponseJsonPHP
Realiza Response Json con el codigo y mensaje de estado HTTP

## Instalacion

Ejecutar en la consola dentro en la raiz del proyecto el comando: 
```bash
$ composer require furiosojack/responsejsonphp
```

o añadiendo directamente el el archivo `composer.json`


```json
{
    "require": {
        "furiosojack/responsejsonphp": "~0.1"
    }
}
```

## Uso (Ejemplos)
```php
<?php 
    require_once __DIR__ . '/vendor/autoload.php';
    use FuriosoJack\ResponseJsonPHP\ResponseJson;
    ResponseJson::build(400,array(
                'title' => 'Error en la solicitud',
                'description' => 'Faltan parametros'
           )
     );    
```

Response Output:

HTTP/1.1 400 Bad Request
```json
{"title": "Error en la solicitud", "description": "Faltan parametros" }
```



