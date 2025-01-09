## Algo muy importante es tener el java 8 y seguir los pasos que me dio chatgpt:

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

## URL

https://stackoverflow.com/questions/46877667/how-to-add-a-new-project-to-github-using-vs-code

## BluePrint

composer require -W --dev laravel-shift/blueprint
composer require filament/filament:"^3.2" -W
php artisan filament:install --panels
php artisan make:filament-user

`php artisan blueprint:erase`
`php artisan blueprint:build`
`php artisan blueprint:new`

## Installation

To set up the jasperphp2 application, follow these steps:

1. Clone the repository: `git clone https://github.com/lcevallo/jasperphp2.git`
2. Configure environment variables: Run `cd jasperphp2 && cp .env.example .env` ,
3. Install composer: `composer install`
4. Install npm: `npm install`
5. Generate application key: `php artisan key:generate`
6. Run migrations: `php artisan migrate` (This command sets up the database tables based on defined migrations) or `php artisan migrate:rollback`
7. (Optional) Seed the database: `php artisan db:seed` (This command populates the database with sample data, if available)
8. Run Application `php artisan serve`,
9. Link Storage `php artisan storage:link`
