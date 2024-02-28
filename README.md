# LaraFs
this package is made for making fs a super fast package to implement in laravel packages.


## Deployment

first install the package using composer with following command:


```bash
  composer require lhaamed/lara-fs
```

then, add this as a service provider in the "providers" array:

```bash
  lhaamed\LaraFs\LaraFsServiceProvider::class,
```

then add this as an alias in the "aliases" array:

```bash
  'FS' => lhaamed\LaraFs\FS::class,
```

never forget to use the following commands in the terminal because you have changed config files.

```bash
  php artisan optimize
```
```bash
  composer du
```

finally you can use following directive in blade files to show icons.

```bash
  @fs('home')   //this directive uses the type from fs-config file

  @fs('home','fa-solid')   //you can define the type individually for each call
```
