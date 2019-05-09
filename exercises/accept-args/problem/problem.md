Write a program that accepts one number as command-line argument and prints it to the console (stdout). It is assumed that the argument is always a number, so you do not need to check if the argument supplied is a number.

----------------------------------------------------------------------
## HINTS

You can access command-line arguments via the global `$argv` array.

To get started, write a program that simply contains:

```php
var_dump($argv);
```

Run it with `php program.php` and a number as argument. e.g:

```sh
$ php program.php 100
```

In which case the output would be an array looking something like:

```php
array(4) {
  [0] =>
  string(7) "program.php"
  [1] =>
  string(1) "100"
}
```

The first element of the `$argv` array is always the name of your script. eg `program.php`, so you need to start at the 2nd element (index 1).

`{appname}` will be supplying arguments to your program when you run `{appname} verify program.php` so you don't need to supply them yourself. To test your program without verifying it, you can invoke it with `{appname} run program.php`. When you use `run`, you are invoking the test environment that `{appname}` sets up for each exercise.

----------------------------------------------------------------------