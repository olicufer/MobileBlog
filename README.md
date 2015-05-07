# MobileBlog

App web para que los usuarios registrados puedan publicar noticias desde su m�vil.
La noticia dispondr� de una foto, texto, localizacion (latitud y longitud ) y foto del usuario que la publica.

<h2>Secciones</h2> 
<h3>P�blica</h3>
Cualquier usuario ver� las �ltimas diez noticias publicadas por el resto de usuarios �listado noticias�. Si quiere publicar una nueva noticia debe estar logueado en la aplicaci�n como usuario registrado.	 Las noticias de esta pantalla s�lo contendr� el t�tulo de la noticia, si queremos ver la descripci�n se deber� pulsar sobre la imagen para ver el �detalle noticia�
<h3>backoffice</h3>
Web de administraci�n para poder administrar las noticias y usuarios.
Solo accesible para usuarios administradores
<h3>front-office</h3>
Web de administraci�n para el perfil del usuario.
Cada usuario solo puede acceder a su perfil y modificar sus datos: [nombre, email, foto y password]



<h2>Instalaci�n</h2>

Cambiar los parametros de conexi�n a la base datos en fichero: <strong>"core/Database.php"</strong>
Importar script <strong>"mb15.sql"</strong> para crear la BaseDatos con la tablas necesarias 

	/* 
	* Variables privadas para conexion BBDD
	*/
	private $db_host = "localhost"; // servidor
	private $db_user = "root";      // usuario
	private $db_pass = "";          // password
	private $db_name = "mb15";	// nombre bbdd


<h3>Emails</h3>
Para enviar emails usamos una cuenta de GMAIL, para cambiar la configuraci�n acceder al fichero <strong>core/CorreoElectronico.php</strong>

	//Atributos privados
	private $phpMailer = null;
	private $port = 465;
	private $host = "smtp.gmail.com";
	private $mail_user = 'tuEmail0@gmail.com';
	private $mail_pass = 'tu contrase�a';
	private $appName = 'MobileBlog App';
	private $type_smtp = 'ssl';

<h3>Usuarios de pruebas</h3>

admin@admin.com	Administrador; pass: 123456		
user2@user2.com	Usuario      ; pass: 123456  

