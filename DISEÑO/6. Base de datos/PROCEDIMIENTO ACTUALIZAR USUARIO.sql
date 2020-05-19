DELIMITER &
CREATE PROCEDURE PR_ACTUALIZAR_USUARIO( P_ID_USUARIO INT, P_PRIMER_NOMBRE VARCHAR (40), P_SEGUNDO_NOMBRE VARCHAR (40), P_PRIMER_APELLIDO VARCHAR (40), P_SEGUNDO_APELLIDO VARCHAR (40),
P_TIPO_DOCUMENTOID_DOCUMENTO VARCHAR(10), P_NUMERO_DOCUMENTO VARCHAR (20), P_EDAD INT (5), P_TELEFONO BIGINT (20), P_DIRECCION VARCHAR (50), P_EMAIL  VARCHAR (50))

BEGIN
    -- Declarar variables
    DECLARE V_PRIMER_NOMBRE 				VARCHAR (50) DEFAULT UPPER(P_PRIMER_NOMBRE);
    DECLARE V_SEGUNDO_NOMBRE 				VARCHAR (40) DEFAULT UPPER(P_SEGUNDO_NOMBRE); 
    DECLARE V_PRIMER_APELLIDO 				VARCHAR (40) DEFAULT UPPER(P_PRIMER_APELLIDO);
    DECLARE V_SEGUNDO_APELLIDO 				VARCHAR (40) DEFAULT UPPER(P_SEGUNDO_APELLIDO);
	DECLARE V_TIPO_DOCUMENTOID_DOCUMENTO 	VARCHAR	(10) ;
    DECLARE V_NUMERO_DOCUMENTO 				VARCHAR (20) DEFAULT UPPER(P_NUMERO_DOCUMENTO);
    DECLARE V_EDAD 							INT 	(5)  DEFAULT UPPER(P_EDAD); 
    DECLARE V_TELEFONO 						BIGINT	(20) DEFAULT UPPER(P_TELEFONO);
    DECLARE V_DIRECCION 					VARCHAR (50) DEFAULT UPPER(P_DIRECCION); 
    DECLARE V_EMAIL  						VARCHAR (50) DEFAULT UPPER(P_EMAIL);
    DECLARE V_ROLID_ROL  					INT		(15) DEFAULT 1;
	
    
    SELECT ID_DOCUMENTO INTO V_TIPO_DOCUMENTOID_DOCUMENTO FROM(SELECT ID_DOCUMENTO FROM TIPO_DOCUMENTO WHERE SIGLAS =P_TIPO_DOCUMENTOID_DOCUMENTO) AS ID_DOCUMENTO;
    
    /*select case P_TIPO_DOCUMENTOID_DOCUMENTO
		WHEN 'CC' 	THEN 1
        WHEN 'CE' 	THEN 2
        WHEN 'NIT'  THEN 3
        ELSE '-1'
	END INTO V_TIPO_DOCUMENTOID_DOCUMENTO;*/
     
    -- Actualizar registro de la tabla usuario sistema
    UPDATE USUARIO 							
		SET   PRIMER_NOMBRE 				=	V_PRIMER_NOMBRE
			, SEGUNDO_NOMBRE 				=	V_SEGUNDO_NOMBRE
			, PRIMER_APELLIDO 				=	V_PRIMER_APELLIDO
			, SEGUNDO_APELLIDO 				=	V_SEGUNDO_APELLIDO
			, TIPO_DOCUMENTOID_DOCUMENTO	=	V_TIPO_DOCUMENTOID_DOCUMENTO
			, NUMERO_DOCUMENTO 				=	V_NUMERO_DOCUMENTO
			, EDAD 							=	V_EDAD
			, TELEFONO 						=	V_TELEFONO
			, DIRECCION 					=	V_DIRECCION
			, EMAIL  						= 	V_EMAIL
	WHERE ID_USUARIO = P_ID_USUARIO;
    
END &
