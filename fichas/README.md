# Fichas Module

Este proyecto es un módulo de administración de fichas que permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre las fichas en una base de datos MySQL. A continuación se detallan los componentes principales del módulo y su funcionalidad.

## Estructura del Proyecto

- **controllers/FichasController.php**: Controlador que maneja la lógica del CRUD para las fichas.
- **models/Ficha.php**: Modelo que representa la estructura de una ficha en la base de datos.
- **views/fichas/**: Contiene las vistas para mostrar, crear y editar fichas.
  - **index.php**: Muestra la lista de fichas en un DataTable.
  - **create.php**: Formulario para agregar una nueva ficha.
  - **edit.php**: Formulario para editar una ficha existente.
  - **modal_edit.php**: Ventana modal para editar la información de una ficha.
- **views/partials/datatable.php**: Configuración y código para mostrar los datos en un DataTable.
- **public/js/fichas.js**: Código JavaScript para manejar la funcionalidad del DataTable y operaciones AJAX.
- **public/css/fichas.css**: Estilos CSS específicos para las vistas del módulo de fichas.
- **routes/fichas.php**: Define las rutas para el módulo de fichas.
- **config/database.php**: Configuración de la conexión a la base de datos utilizando PDO.
- **tests/FichasTest.php**: Pruebas unitarias para verificar la funcionalidad del módulo de fichas.

## Instalación

1. Clona el repositorio en tu máquina local.
2. Configura la base de datos en `config/database.php` con tus credenciales.
3. Ejecuta las migraciones necesarias para crear las tablas en la base de datos.
4. Accede a las rutas definidas en `routes/fichas.php` para interactuar con el módulo de fichas.

## Uso

- **Listar Fichas**: Accede a la vista principal para ver todas las fichas registradas.
- **Agregar Ficha**: Utiliza el formulario para crear una nueva ficha, seleccionando el programa y la sede correspondientes.
- **Editar Ficha**: Haz clic en el botón de editar en la lista de fichas para modificar la información de una ficha existente.
- **Activar/Desactivar Estado**: Cambia el estado de una ficha utilizando la funcionalidad de activar/desactivar.

## Pruebas

Ejecuta las pruebas unitarias en `tests/FichasTest.php` para verificar que todas las funcionalidades del módulo de fichas funcionen correctamente.

## Contribuciones

Las contribuciones son bienvenidas. Si deseas mejorar este módulo, por favor abre un pull request o crea un issue para discutir cambios propuestos.