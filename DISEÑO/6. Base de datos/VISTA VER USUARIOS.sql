CREATE OR REPLACE VIEW VW_VER_USUARIOS
(    ID_USUARIO
    ,PRIMER_NOMBRE
    ,SEGUNDO_NOMBRE
    ,PRIMER_APELLIDO
    ,SEGUNDO_APELLIDO
    ,DOCUMENTO
    ,NUMERO_DOCUMENTO
    ,EDAD
    ,TELEFONO
    ,DIRECCION
    ,EMAIL
    ,ROL
    ,USUARIO_SISTEMA
    ,CLAVE
    ,RESPUESTA_MODAL
    ,DESCRIPCION_MODAL
)

AS

SELECT 	A.ID_USUARIO
		,A.PRIMER_NOMBRE
        ,A.SEGUNDO_NOMBRE 		
		,A.PRIMER_APELLIDO
        ,A.SEGUNDO_APELLIDO
		,B.SIGLAS																					AS DOCUMENTO
        ,A.NUMERO_DOCUMENTO 			
		,A.EDAD
        ,A.TELEFONO
        ,A.DIRECCION
		,A.EMAIL
		,D.NOMBRE_ROL 																				AS ROL
		,C.NOMBRE_USUARIO 																			AS USUARIO_SISTEMA
		,C.CLAVE
        ,CONCAT('Cliente -',A.ID_USUARIO)															AS RESPUESTA_MODAL
        ,CONCAT(A.PRIMER_NOMBRE,' ',A.SEGUNDO_NOMBRE,' ',A.PRIMER_APELLIDO,' ',A.SEGUNDO_APELLIDO)	AS DESCRIPCION_MODAL
FROM 		USUARIO 		AS A
INNER JOIN 	TIPO_DOCUMENTO 	AS B		ON A.Tipo_documentoId_documento = B.id_documento
INNER JOIN 	USUARIO_SISTEMA AS C		ON C.USUARIOID_USUARIO = A.id_usuario
INNER JOIN 	ROL 			AS D		ON D.id_rol = A.rolId_rol
WHERE C.ESTADO ='ACTIVO'
;