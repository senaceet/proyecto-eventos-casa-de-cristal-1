DELIMITER &
CREATE PROCEDURE PR_ELIMINAR_TURNO( P_ID_EMPLEADO INT, P_ID_TURNO INT)

BEGIN
	-- Declarar variables
    DECLARE V_CANTIDAD INT;
	
    -- Revisar si existe el registro
    SELECT COUNT(*) INTO V_CANTIDAD FROM EMPLEADO_TURNO WHERE EMPLEADOID_EMPLEADO = P_ID_EMPLEADO AND TURNOID_TURNO = P_ID_TURNO;     
    
    IF V_CANTIDAD = 1 THEN
    
		DELETE FROM EMPLEADO_TURNO WHERE EMPLEADOID_EMPLEADO = P_ID_EMPLEADO AND TURNOID_TURNO = P_ID_TURNO; 
    
    END IF;
    
END &
