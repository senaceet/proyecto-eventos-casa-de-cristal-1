CREATE OR REPLACE VIEW VW_VER_PEDIDOS
(    ID_PEDIDO
	,FECHA_PEDIDO
    ,NOMBRES
    ,APELLIDOS
    ,DOCUMENTO
    ,ID_PAQUETE    
    ,EVENTO
    ,PAQUETE
    ,VALOR_PAQUETE
    ,IVA
    ,VALOR_TOTAL
    ,ESTADO
    ,ID_FACTURA
    ,TIPO_DE_FACTURA
    ,FECHA_INICIO_EVENTO
	,FECHA_FIN_EVENTO
    ,CIUDAD_EVENTO
	,BARRIO_EVENTO
	,DIRECCION_EVENTO
    ,RESPUESTA_MODAL
    ,DESCRIPCION_MODAL
)

AS

SELECT 	 A.ID_PEDIDO
		,A.FECHA_PEDIDO
		,CONCAT(B.PRIMER_NOMBRE, ' ', B.SEGUNDO_NOMBRE)			AS NOMBRES
        ,CONCAT(B.PRIMER_APELLIDO, '', B.SEGUNDO_APELLIDO)		AS APELLIDOS
        ,CONCAT(E.SIGLAS, ' - ', B.NUMERO_DOCUMENTO)			AS DOCUMENTO
		,C.ID_PAQUETE
        ,D.TIPO_DE_EVENTO										AS EVENTO
        ,C.TIPO_DE_PAQUETE										AS PAQUETE
        ,C.VALOR_PAQUETE
        ,C.VALOR_IVA											AS IVA
        ,C.VALOR_TOTAL
        ,F.ESTADO
        ,G.ID_FACTURA
        ,G.TIPO_DE_FACTURA
        ,A.FECHA_INICIO_EVENTO
        ,A.FECHA_FIN_EVENTO
        ,CIUDAD_EVENTO
        ,BARRIO_EVENTO
        ,DIRECCION_EVENTO
        ,CONCAT('Pedido  -',A.ID_PEDIDO)															AS RESPUESTA_MODAL
        ,CONCAT(B.PRIMER_NOMBRE,' ',B.SEGUNDO_NOMBRE,' ',B.PRIMER_APELLIDO,' ',B.SEGUNDO_APELLIDO)	AS DESCRIPCION_MODAL
FROM PEDIDO						AS A
INNER JOIN USUARIO				AS B	ON A.USUARIOID_USUARIO 				= B.ID_USUARIO
INNER JOIN PAQUETE				AS C	ON A.PAQUETE_IDPAQUETE 				= C.ID_PAQUETE
INNER JOIN EVENTO				AS D	ON C.EVENTOID_EVENTO 				= D.ID_EVENTO
INNER JOIN TIPO_DOCUMENTO		AS E	ON B.TIPO_DOCUMENTOID_DOCUMENTO		= E.ID_DOCUMENTO
INNER JOIN ESTADO_PEDIDO		AS F	ON A.ESTADOPEDIDOID_ESTADOPEDIDO	= F.ID_ESTADOPEDIDO
INNER JOIN FACTURA				AS G	ON A.FACTURAID_FACTURA				= G.ID_FACTURA
ORDER BY ID_PEDIDO
;
