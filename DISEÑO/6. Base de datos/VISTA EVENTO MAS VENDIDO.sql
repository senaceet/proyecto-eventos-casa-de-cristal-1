CREATE OR REPLACE VIEW VW_EVENTO_MAS_VENDIDO 
(	EVENTO_MAS_VENDIDO 
)

AS

SELECT MAX(TIPO_EVENTO) EVENTO_MAS_VENDIDO
FROM(
    SELECT COUNT(ID_PEDIDO) CANTIDAD
           ,TIPO_DE_PAQUETE TIPO_EVENTO
    FROM(
    SELECT PE.ID_PEDIDO
         , PA.TIPO_DE_PAQUETE
         , CONCAT(US.PRIMER_NOMBRE,' ',US.SEGUNDO_NOMBRE) NOMBRES_PAGADOR
         , CONCAT(US.PRIMER_APELLIDO,' ',US.SEGUNDO_APELLIDO) APELLIDOS_PAGADOR
         , FA.ID_FACTURA
         , FA.VALOR_TOTAL
         , FA.TIPO_DE_FACTURA
         , PG.ID_PAGO
         , TP.NOMBRE_PAGO
    FROM PEDIDO PE
    INNER JOIN PAQUETE PA         ON PA.ID_PAQUETE         = PE.PAQUETE_IDPAQUETE
    INNER JOIN USUARIO US         ON US.ID_USUARIO         = PE.USUARIOID_USUARIO
    INNER JOIN FACTURA FA         ON FA.PEDIDOID_PEDIDO     = PE.ID_PEDIDO
    INNER JOIN PAGOS   PG         ON PG.USUARIOID_USUARIO = US.ID_USUARIO
    INNER JOIN TIPOS_DE_PAGO TP ON TP.ID_TIPO_PAGO        = PG.TIPOS_DE_PAGOID_TIPO_PAGO
    ORDER BY 1
    ) A
    GROUP BY TIPO_DE_PAQUETE
    ORDER BY 1 DESC
    ) B
;