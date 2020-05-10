CREATE OR REPLACE VIEW VW_REPORTE_VENTAS
(     ID_PEDIDO
    ,TIPO_DE_PAQUETE
    ,NOMBRES_PAGADOR
    ,APELLIDOS_PAGADOR
    ,ID_FACTURA
    ,VALOR_TOTAL
    ,TIPO_DE_FACTURA
    ,ID_PAGO
    ,NOMBRE_PAGO
)

AS

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
;