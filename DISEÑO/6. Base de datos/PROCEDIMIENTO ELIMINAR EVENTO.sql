DELIMITER &
CREATE PROCEDURE PR_ELIMINAR_EVENTO( P_NOMBRE_EVENTO VARCHAR (60))

BEGIN
	-- Declarar variables
    DECLARE V_ESTADO VARCHAR (30) DEFAULT 'INACTIVO';
	
    -- Elimina registro de la tabla usuario sistema
    UPDATE EVENTO SET ESTADO = V_ESTADO WHERE TIPO_DE_EVENTO = P_NOMBRE_EVENTO;
    
END &
