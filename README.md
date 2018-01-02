# License

  El codigo de licencia debe seguirse al pie de la letra, si usted utiliza esta libreria los derechos de autor deben estar incluidos en todas la copias.
  
  Para mas informacion la puede encontra en el archivo LICENSE.txt.

  
# LaraException
Retorna excepciones de forma HTTP  JSON personalizada para laravel, en http redirecciona a una vista

## Installation 

```bash
$ php composer require furiosojack/laraexception=^0.0
```

OR 

add to your `composer.json`

```json
{
    "require": {
        "furiosojack/laraexception": "^0.0"
    }
}
```

## Examples

 ```php
 LaraException::buildEJson("hola mundo",500,false);;
```

result 
```json
{"error":"hola mundo","code":500}
```

