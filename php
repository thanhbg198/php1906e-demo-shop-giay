
   BadMethodCallException  : Method Illuminate\Routing\Route::get does not exist.

  at C:\xampp\htdocs\demoshop\vendor\laravel\framework\src\Illuminate\Support\Traits\Macroable.php:78
    74|      */
    75|     public static function __callStatic($method, $parameters)
    76|     {
    77|         if (! static::hasMacro($method)) {
  > 78|             throw new BadMethodCallException(sprintf(
    79|                 'Method %s::%s does not exist.', static::class, $method
    80|             ));
    81|         }
    82|

  Exception trace:

  1   Illuminate\Routing\Route::__callStatic("get")
      C:\xampp\htdocs\demoshop\routes\web.php:18

  2   require("C:\xampp\htdocs\demoshop\routes\web.php")
      C:\xampp\htdocs\demoshop\vendor\laravel\framework\src\Illuminate\Routing\RouteFileRegistrar.php:35

  Please use the argument -v to see more details.
