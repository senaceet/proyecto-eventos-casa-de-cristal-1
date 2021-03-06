DELIMITER &
CREATE PROCEDURE PR_CREAR_TURNO( P_ID_PEDIDO INT, P_TIPO_DOCUMENTO VARCHAR (20), P_NUMERO_DOCUMENTO INT )

BEGIN
    -- Declarar variables
    DECLARE V_ID_PEDIDO				INT	;
    DECLARE V_ID_TURNO				INT	;
	DECLARE V_ID_EMPLEADO			INT	;
    
    -- VALIDAR SI EXISTE EL PEDIDO
    SELECT ID_PEDIDO INTO V_ID_PEDIDO FROM PEDIDO WHERE ID_PEDIDO = P_ID_PEDIDO;
    
    -- VALIDAR SI EXISTE EL TURNO
    SELECT ID_TURNO INTO V_ID_TURNO FROM TURNO WHERE PEDIDOID_PEDIDO = V_ID_PEDIDO;
    
    -- VALIDAR SI EXISTE EL EMPLEADOPR_CREAR_TURNO
    SELECT A.ID_EMPLEADO INTO V_ID_EMPLEADO FROM EMPLEADO AS A, TIPO_DOCUMENTO AS B WHERE B.SIGLAS = P_TIPO_DOCUMENTO AND A.NUMERO_DOCUMENTO = P_NUMERO_DOCUMENTO;
    
    -- Crea el registro en la tabla usuario
    IF V_ID_TURNO > 0 AND V_ID_EMPLEADO > 0 THEN
    
		insert into Empleado_turno( EmpleadoId_empleado, TurnoId_turno)
		values 
		(V_ID_EMPLEADO,	V_ID_TURNO);
    
    END IF;
    
END &
