# CalculadoraApi

Api rest que realiza operaciones basicas como la suma, resta, multiplicacion y division, ademas de poder usar las operaciones por consola.

### Como ejecutar este proyecto

1. Con el proyecto descargado nos dirigimos a la carpeta del proyecto.
2. Una vez en la carpeta del proyecto ejecutamos `composer install` para instalar las dependencias.
3. Si no se cuenta con con la linea de comandos (CLI) de `symfony` se debe instalarla. (en el siguiente enlace esta disponible la informacionde de como [Instalar la linea de comandos](https://symfony.com/download "symfony") dependiendo de su sistema operativo).
4. Ejecutamos el comando: `symfony server:start`
5. Esto nos indicara la ruta del sedvidor local y el puerto en el que se encuentra escuchando. Ejemplo: `http://localhost:8000`
6. Para realizar las prubas de las operaciones con el servidor corriendo nos dirigimos a la ruta `http://127.0.0.1:8000/add/5/6` donde **add** puede ser reemplazado por cualquier operacion que se desee realizar. como res = -, mul = \*, div = /.

### Pasos realizados para la creacion de la API

1. Creación del aplicativo con la linea de comando de symfony `symfony new calculadora_api`.
2. Dirigirme a la carpeta del proyecto con `cd calculadora_api/`.
3. Instalación de Annotations Routes con el comando `composer require annotations`.
4. Instalación de herramienttas de pruebas unitarias con el comando `composer require --dev phpunit/phpunit symfony/test-pack`.
5. Creación controlador **OperacionController.php**. encargado de la gestion de los llamdos al Api y retorno de respuesta.
6. Creación del servicio **Calculate.php**. encargado de realizar las operaciones.
7. Creación de la interfase **Operation.php**. encargado de definir los metodos que se deben implementar en el servicio.
8. Creación del comando **OperationCommand.php**. para realizar las operaciones por consola. con el comando de ejemplo `./bin/console operations 5 6 add` para validacion de llamdo por consola tambien disponibles las demas operaciones como resta,multiplicacion y division.
9. Creación del test **CalculateTest.php**. para realizar las pruebas unitarias del servicio.(comando para hacer uso de las pruebas unitarias: `php ./vendor/bin/phpunit`).

### ver app front llamando la API

1. La aplicaion front esta echa en react:
   - si se desea ver el front consumiento el api backend se debe ubicar en la carpeta del proyecto y entrar con `cd front_consumo_api/`
   - se debe ejecutar el comando `npm i`
   - se debe ejecutar el comando `npm start`
