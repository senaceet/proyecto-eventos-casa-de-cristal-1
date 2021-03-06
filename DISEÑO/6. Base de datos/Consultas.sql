use eventos_casa_de_cristal;

-- TABLAS --------------------------------------------------------------------------------------------------------------------

SELECT * FROM CARGO;
SELECT * FROM EMPLEADO;
SELECT * FROM EMPLEADO_TURNO;
SELECT * FROM ESTADO_PEDIDO;
SELECT * FROM EVENTO;
UPDATE EVENTO SET ESTADO = 'ACTIVO' WHERE ID_EVENTO = 7;
UPDATE EVENTO SET TIPO_IMAGEN='image/jpg' ,IMAGEN='Grados.jpg' WHERE ID_EVENTO=6;
SELECT * FROM FACTURA;
SELECT * FROM INVENTARIO;
SELECT * FROM INVENTARIO_PAQUETE;
SELECT * FROM INVENTARIO_PAQUETE where paqueteid_paquete = 17 AND INVENTARIOID_INVENTARIO = 3;
SELECT * FROM LOG_DE_ERRORES;
SELECT * FROM PAGOS;
SELECT * FROM PAQUETE;
SELECT * FROM PAQUETE WHERE TIPO_DE_PAQUETE LIKE '%||Matrimonio';
SELECT * FROM PEDIDO;
Select fecha_pedido, DATE_ADD(fecha_pedido,INTERVAL 1 HOUR) from pedido;
SELECT * FROM ROL;
select * from SERVIDOR_DE_CORREO;
select * from TIPO_DOCUMENTO;
select * from TIPOS_DE_PAGO;
SELECT * FROM TURNO;
select * from USUARIO;
delete from USUARIO where id_usuario=38;
select * from USUARIO_LOG;
select * from USUARIO_SISTEMA;
delete from USUARIO_SISTEMA where usuarioid_usuario=38;
update USUARIO_SISTEMA set estado='ACTIVO' WHERE ID_USUARIOSISTEMA >0;

-- VISTAS ----------------------------------------------------------------------------------------------------------------------
select * from VW_EVENTO_MAS_VENDIDO;
select * from VW_EVENTO_MENOS_VENDIDO;
select * from VW_PAGO_PREFERIDO;
select * from VW_PRODUCTOS_VENDIDOS;
select * from VW_REPORTE_VENTAS;
SELECT * FROM VW_VER_USUARIOS;
select count(email) email FROM VW_VER_USUARIOS where email ='jsgomez488@misena.edu.co';
SELECT * FROM VW_VER_EMPLEADOS;
SELECT * FROM VW_CANTIDAD_REGISTROS_INICIO_ADMIN;
SELECT * FROM VW_VER_PEDIDOS where id_usuario=2;
SELECT * FROM VW_VER_PAQUETE;
SELECT * FROM VW_VER_EVENTOS;
SELECT * FROM VW_VER_PAQUETES_EVENTOS;
SELECT * FROM VW_VER_INVENTARIO;
SELECT * FROM VW_VER_TURNO;
SELECT * FROM VW_VER_PAQUETE WHERE TIPO_DE_EVENTO='Matrimonio';
SELECT * FROM VW_VER_PEDIDOS ORDER BY 1 DESC LIMIT 1;
SELECT * FROM VW_VER_PEDIDOS_USUARIO;
SELECT * FROM VW_VER_TIPO_DOCUMENTO;


-- PROCEDIMIENTOS -------------------------------------------------------------------------------------------------------------
CALL PR_TIPO_DOCUMENTO(); -- <-- Lista todos los tipos de documento disponibles
CALL PR_ROLES(); -- <-- Lista todos los roles distintos a usuario
CALL PR_CARGOS();-- <-- Lista todos los cargos
CALL PR_VER_USUARIOS(); -- <-- Lista todos los usuarios
CALL PR_VER_EMPLEADOS(); -- <-- Lista todos los empleados
CALL PR_ACTUALIZAR_CARGO(4,'Programador'); -- < Actualiza los cargos
CALL PR_CREAR_USUARIO( 'KAROL', '', 'gomez', 'avila', 1, 1015452884, 25, 3108023148, 'carrera 94', 'KAROL887@misena.edu.co');  -- <--crear usuarios desde aqui
CALL PR_ELIMINAR_USUARIO(32); -- Elimina el registro del usuario
CALL PR_ACTUALIZAR_USUARIO( 1,'KAROL', '', 'gomez', 'avila', 'NIT', 1015452884, 25, 3108023148, 'carrera 94', 'KAROL887@misena.edu.co');  -- <--Actualizar usuarios desde aqui
CALL PR_CREAR_EMPLEADO( 'KAROL', '', 'gomez', 'avila', 1, 1015452884, 25, 3108023148, 'carrera 94', 'KAROL887@misena.edu.co','2');  -- <--crear empleados desde aqui
CALL PR_ACTUALIZAR_EMPLEADO( 1,'KAROL', '', 'gomez', 'avila', 'CE', 1015452884,'DJ', 25, 3108023148, 'carrera 94', 'KAROL887@MISENA.EDU.CO','ADMINISTRADOR');  -- <--Actualizar usuarios desde aqui
CALL PR_ELIMINAR_EMPLEADO(2);-- Elimina el registro del empleado
CALL PR_VER_PEDIDOS(); -- Ver pedidos
CALL PR_ESTADO_PEDIDO(); -- Listar estados de pedido disponibles
CALL PR_ACTUALIZAR_PEDIDO( 1, 'BOGOTA', 'AURES', 'carrera 123 # 82 - 41', 'Realizado',SYSDATE(),SYSDATE()); -- actualizar pedidos
CALL PR_OBTENER_USUARIO_SISTEMA('USUARIO','Leonel2019','Leonel2019');-- Obtener usuario sistema Usuario
CALL PR_OBTENER_USUARIO_SISTEMA('EMPLEADO','gustavo26','gustavo26');-- Obtener usuario sistema Empleado y administrador
CALL PR_CREAR_PEDIDOS( 5, 3, 'BOGOTA', 'AURES', 'carrera 123 # 82 - 41', SYSDATE(),SYSDATE()); -- Generar pedido
CALL PR_CREAR_PAGO_CARRITO( 4, 2, 'BOGOTA', 'LIJACA', 'carrera 123 # 82 - 41', SYSDATE(),SYSDATE(), 2380000); -- CREAR PAGO
CALL PR_VER_INVENTARIO();-- Obtener inventario
CALL PR_CREAR_INVENTARIO('luces',30,20000,'utileria'); -- Crear pruductos de inventarios
CALL PR_ACTUALIZAR_INVENTARIO(11,'luces',30,20000,'utileria'); -- ACTUALIZAR INVENTARIO
CALL PR_ELIMINAR_INVENTARIO(11);-- Inactivar productos del inventario
CALL PR_VER_TURNOS(); -- Obtener turnos
CALL PR_VER_TURNO_EMPLEADO(2); -- Obtener turnos del empleado
CALL PR_CREAR_TURNO(1,'CC',1065320855); -- CREAR TURNO
CALL PR_ELIMINAR_TURNO( 10, 1); -- ELIMINAR TURNO
CALL PR_CREAR_EVENTOS( P_NOMBRE_EVENTO , P_TIPO_IMAGEN, IMAGEN); -- CREAR EVENTOS
CALL PR_ELIMINAR_EVENTO('bien'); -- ELIMINAR EVENTOS
CALL PR_ACTUALIZAR_EVENTO( P_ID_EVENTO, P_NOMBRE_EVENTO , P_TIPO_IMAGEN, IMAGEN); -- ACTUALIZAR EVENTO
CALL PR_OBTENER_ULTIMO_PAQUETE('matrimonio');
CALL PR_CREAR_PAQUETES( 'matrimonio', 'matrimonio 5', 0, 10); -- Crear paquete de evento
CALL PR_CREAR_INVENTARIO_PAQUETES(  0, 0, 0); -- Agregar inventario a paquetes
CALL PR_ELIMINAR_INVENTARIO_PAQUETE( 17, 4); -- Quitar inventario a paquetes
CALL PR_ELIMINAR_PAQUETE(19); -- Eliminar paquete
CALL PR_GENERAR_REPORTE('PEDIDOS',SYSDATE(),SYSDATE()); -- REPORTES


-- FUNCIONES ------------------------------------------------------------------------------------------------------------------
SELECT FN_CALCULAR_EDAD(1995) AS EDAD; -- <-- calcula edad
SELECT FN_FORMATEAR_NOMBRES('JuLiANNNNNN','NOR'); -- FORMATEAR TEXTO (MAY,MIN,NOR)

-- --------------------------------------------------------------------------------------------------------------------
SELECT ID_CARGO FROM CARGO WHERE NOMBRE_DE_CARGO ='DJ';
-- DESCRIBE TABLAS --------------------------------------------------------------------------------------------------------------------

DESCRIBE CARGO;
DESCRIBE EMPLEADO;
DESCRIBE EMPLEADO_TURNO;
DESCRIBE EVENTO;
DESCRIBE FACTURA;
DESCRIBE INVENTARIO;
DESCRIBE INVENTARIO_PAQUETE;
DESCRIBE LOG_DE_ERRORES;
DESCRIBE PAGOS;
DESCRIBE PAQUETE;
DESCRIBE PEDIDO;
DESCRIBE ROL;
DESCRIBE SERVIDOR_DE_CORREO;
DESCRIBE TIPO_DOCUMENTO;
DESCRIBE TIPO__DE_PAGO;
DESCRIBE TURNO;
DESCRIBE USUARIO;
DESCRIBE USUARIO_LOG;
DESCRIBE USUARIO_SISTEMA;



-- OTROS ---
select A.id_usuario,
	   CONCAT(A.Primer_nombre, ' ',A.Segundo_nombre, ' ',A.Primer_apellido, ' ',A.Segundo_apellido) NOMBRE,
       CONCAT(B.Siglas,'-',A.numero_documento) DOCUMENTO,
       A.edad,
       A.email,
       D.Nombre_rol ROL,
       C.NOMBRE_USUARIO USUARIO,
       C.CLAVE
from 		usuario A
inner join 	tipo_documento B		ON A.Tipo_documentoId_documento = B.id_documento
inner join 	usuario_sistema C		ON C.USUARIOID_USUARIO = A.id_usuario
inner join 	ROL D					ON D.id_rol = A.rolId_rol
where id_usuario= 1 
;



select A.id_EMPLEADO,
	   CONCAT(A.Primer_nombre, ' ',A.Segundo_nombre, ' ',A.Primer_apellido, ' ',A.Segundo_apellido) NOMBRE,
       CONCAT(B.Siglas,'-',A.numero_documento) DOCUMENTO,
       A.edad,
       A.email,
       D.Nombre_rol ROL,
       C.NOMBRE_USUARIO USUARIO,
       C.CLAVE
from 		EMPLEADO A
inner join 	tipo_documento B		ON A.Tipo_documentoId_documento = B.id_documento
inner join 	usuario_sistema C		ON C.EMPLEADOID_EMPLEADO = A.id_EMPLEADO
inner join 	ROL D					ON D.id_rol = A.rolId_rol
where id_EMPLEADO= 1 
;



SELECT 	A.ID_USUARIO
	,A.PRIMER_NOMBRE
		,CONCAT(A.PRIMER_NOMBRE, ' ',A.SEGUNDO_NOMBRE) 		AS NOMBRES
		,CONCAT(A.PRIMER_APELLIDO, ' ',A.SEGUNDO_APELLIDO) 	AS APELLIDOS
		,CONCAT(B.SIGLAS,'-',A.NUMERO_DOCUMENTO) 			AS DOCUMENTO
		,A.EDAD
        ,A.TELEFONO
		,A.EMAIL
		,D.NOMBRE_ROL 										AS ROL
		,C.NOMBRE_USUARIO 									AS USUARIO_SISTEMA
		,C.CLAVE
FROM 		USUARIO 		AS A
INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
INNER JOIN 	USUARIO_SISTEMA AS C		ON C.USUARIOID_USUARIO 			= A.id_usuario
INNER JOIN 	ROL 			AS D		ON D.id_rol 					= A.rolId_rol
WHERE C.ESTADO = 'ACTIVO'
AND ID_USUARIO=23
;