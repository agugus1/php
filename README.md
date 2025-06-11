# tabla "PERSONA"
¿Qué hace el código?
Este código crea una página web que permite a los usuarios agregar información sobre personas (como documento, nombre y edad) a una base de datos y visualizar esos datos en una tabla. Es una aplicación sencilla que combina HTML, CSS, PHP y MySQL.

¿Cómo funciona?
Estructura HTML:

La página está construida con HTML, que es el lenguaje de marcado que se utiliza para crear la estructura de las páginas web. Aquí se define el contenido que se verá en el navegador, como formularios y tablas.
Estilos CSS:

Se utilizan estilos CSS (incluidos desde Bootstrap y personalizados) para darle un diseño atractivo a la página. Esto incluye colores, tamaños de fuente, espaciado y efectos visuales como sombras y cambios de color al pasar el mouse.
Formulario de Entrada:

Hay un formulario donde los usuarios pueden ingresar datos. Este formulario tiene campos para el documento, nombre y edad, y un botón para enviar la información. Cuando el usuario completa el formulario y lo envía, los datos se envían al servidor.
Conexión a la Base de Datos:

Cuando se envían los datos, el código PHP se encarga de conectarse a una base de datos MySQL. Esto se hace utilizando credenciales (como el nombre de usuario y la contraseña) para acceder a la base de datos llamada "escuela-db".
Inserción de Datos:

Si el formulario se envía correctamente, el código PHP toma los datos ingresados y los inserta en una tabla llamada persona en la base de datos. Si la inserción es exitosa, se muestra un mensaje de éxito; si hay un error, se muestra un mensaje de error.
Consulta y Visualización de Datos:

Después de agregar datos, el código realiza una consulta a la base de datos para obtener todos los registros de la tabla persona. Luego, esos datos se muestran en una tabla HTML en la página. Si no hay registros, se muestra un mensaje informando que no se encontraron resultados.
Interactividad y Estilo:

La tabla tiene estilos que permiten que se vea bien y sea interactiva. Por ejemplo, las filas se resaltan cuando pasas el mouse sobre ellas, lo que mejora la experiencia del usuario.
Resumen Final
En resumen, este código es una aplicación web que permite a los usuarios ingresar y visualizar datos de personas. Utiliza HTML para la estructura, CSS para el diseño, PHP para la lógica del servidor y MySQL para almacenar los datos. Es una forma sencilla y efectiva de gestionar información en una base de datos a través de una interfaz web.
