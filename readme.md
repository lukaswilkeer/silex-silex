Siex-Silicon, the php Silex skeleton app for little php projets.
=====
### The Project.
This is a app skeleton usgin the silex micro-framework.
This skeleton contains.
*   Mustache Template Engine.
*   Silex/Application for core.
*   Symfony/form.
*   Symfony/validator.
*   Symfony web profiler.
*   YAML Routing
*   Various Symfony components!
*   Check the composer.json for more.

### Setting.
First, check the `config/dev.php` and `confi/prod.php` on the configuration file and set the `APPDIR` variable.
Don't forget to set write permission to folders `/cache` adn `/logs` folder according to your setup, this may vary according to your setup. If is docker, you don't need this step also on nginx.

If you're running on a apache server on windonws or a lamp server on linux, set the owner of `/logs` and `/cache` to  www-data.

### How to create a project?
Using composer,`php composer.phar create-project lukaswilkeer/silex-silicon project-folder/ v0.5`,
or clone thi repository.

### Contributing.
Fork this repository, create a branch, submit a pull request with your feature.

### Contact.
Lukas Wilkeer | @lukaswilkeer
