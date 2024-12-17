<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Algo muy importante es tener el java 8 y segui los pasos que me dio chatgpt:

Paso 2: Instalar una versión compatible de Java

Si estás usando una versión más nueva de Java, instala una versión compatible como Java 8 o Java 11:

    Instalar Java 8:

sudo apt update
sudo apt install openjdk-8-jdk

Verifica la instalación:

    java -version

Paso 3: Configurar Java 8 como predeterminado

Si tienes múltiples versiones de Java instaladas, selecciona Java 8 como predeterminada:

sudo update-alternatives --config java

Elige la opción correspondiente a Java 8.


## Luego esta el paso del JasperStudio

Paso 1: Verificar requisitos previos

    Java Development Kit (JDK):
        Jasper Studio requiere JDK. Asegúrate de tenerlo instalado.
        Para instalarlo:

sudo apt update
sudo apt install default-jdk

Verifica la versión instalada:

        java -version

        Jasper Studio funciona bien con Java 8 o versiones más recientes.

    Espacio en disco y permisos:
        Asegúrate de tener al menos 1 GB de espacio libre.
        Usa un usuario con permisos de administrador.

Paso 2: Descargar Jasper Studio

    Ve al sitio oficial de Jasper Studio:
        Jaspersoft Studio - Official Downloads.
    Descarga la versión para Linux (normalmente un archivo .tar.gz).

Paso 3: Extraer el archivo descargado

    Navega a la carpeta donde descargaste el archivo:

cd ~/Downloads

Extrae el archivo:

    tar -xvzf JaspersoftStudio-*.tar.gz

    Esto creará una carpeta con el contenido de Jasper Studio.

Paso 4: Mover el programa a un directorio permanente

    Mueve la carpeta a /opt (o cualquier otro lugar que prefieras para programas instalados):

    sudo mv JaspersoftStudio-* /opt/jaspersoft-studio

Paso 5: Crear un acceso directo

    Crea un enlace simbólico para facilitar el acceso:

    sudo ln -s /opt/jaspersoft-studio/Jaspersoft\ Studio /usr/local/bin/jaspersoft-studio

    (Opcional) Crea un lanzador en el menú de aplicaciones:
        Abre Menú > Preferencias > Editar Menú.
        Agrega un nuevo elemento:
            Nombre: Jaspersoft Studio.
            Comando: /opt/jaspersoft-studio/Jaspersoft\ Studio.
            Icono: Selecciona uno de la carpeta del programa.

Paso 6: Ejecutar Jasper Studio

    Abre Jasper Studio:
        Desde la terminal:

        /opt/jaspersoft-studio/Jaspersoft\ Studio

        O desde el lanzador que creaste.

    En el primer inicio, Jasper Studio puede pedirte configurar un área de trabajo (carpeta para proyectos). Selecciona una ubicación adecuada.




## Subir a GitLab
git init
git remote add origin https://gitlab.com/lcevallo/jasperphp2.git
git add .
git commit -m "Laravel y Jasper"
git push origin master 
