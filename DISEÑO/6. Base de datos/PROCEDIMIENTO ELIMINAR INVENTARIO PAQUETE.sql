DELIMITER &
CREATE PROCEDURE PR_ELIMINAR_INVENTARIO_PAQUETE(  P_ID_PAQUETE 	INT, P_ID_INVENTARIO 	INT)

BEGIN
	-- Declarar variables
        DECLARE V_VALOR_SIN_IVA	 	BIGINT;
		DECLARE V_VALOR_TOTAL	 	BIGINT;
		DECLARE V_IVA	 			BIGINT;
        DECLARE V_CANTIDADES		BIGINT;
	
    -- Se elimina el registro
    DELETE FROM INVENTARIO_PAQUETE where PAQUETEID_PAQUETE = P_ID_PAQUETE AND INVENTARIOID_INVENTARIO = P_ID_INVENTARIO;
    
    -- contar cantidades
    SELECT COUNT(*) INTO V_CANTIDADES FROM INVENTARIO_PAQUETE WHERE PAQUETEID_PAQUETE = P_ID_PAQUETE;
    
    -- Verificar los valores del inventario para el paquete y sumar
	SELECT SUM(VALOR_SIN_IVA), SUM(IVA), SUM(VALOR_TOTAL) INTO V_VALOR_SIN_IVA, V_IVA, V_VALOR_TOTAL FROM INVENTARIO_PAQUETE WHERE PAQUETEID_PAQUETE = P_ID_PAQUETE;
    
    IF V_CANTIDADES > 0 THEN
    
		-- Actualizar el valor del paquete
		UPDATE Paquete SET valor_paquete = V_VALOR_SIN_IVA, valor_iva = V_IVA, valor_total = V_VALOR_TOTAL WHERE ID_PAQUETE = P_ID_PAQUETE;
    
    ELSE
    
		-- Actualizar el valor del paquete
		UPDATE Paquete SET valor_paquete = 0, valor_iva = 0, valor_total = 0 WHERE ID_PAQUETE = P_ID_PAQUETE;
    
    END IF;

END &
