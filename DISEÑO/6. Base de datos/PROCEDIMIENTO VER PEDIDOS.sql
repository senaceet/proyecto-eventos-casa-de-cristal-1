CREATE PROCEDURE PR_VER_PEDIDOS()
SELECT 	 A.ID_PEDIDO
		,A.FECHA_PEDIDO
		,CONCAT(B.PRIMER_NOMBRE,' ',B.SEGUNDO_NOMBRE)			AS NOMBRES
        ,CONCAT(B.PRIMER_APELLIDO,' ',B.SEGUNDO_APELLIDO)		AS APELLIDOS
        ,CONCAT(E.SIGLAS,' - ',B.NUMERO_DOCUMENTO)			    AS DOCUMENTO
		,C.ID_PAQUETE
        ,D.TIPO_DE_EVENTO										AS EVENTO
        ,C.TIPO_DE_PAQUETE										AS PAQUETE
        ,C.VALOR_PAQUETE
        ,C.VALOR_IVA											AS IVA
        ,C.VALOR_TOTAL
        ,F.ESTADO
        ,A.FECHA_INICIO_EVENTO
        ,A.FECHA_FIN_EVENTO
        ,CIUDAD_EVENTO
        ,BARRIO_EVENTO
        ,DIRECCION_EVENTO
FROM PEDIDO					AS A
INNER JOIN USUARIO			AS B	ON A.USUARIOID_USUARIO 			= B.ID_USUARIO
INNER JOIN PAQUETE			AS C	ON A.PAQUETE_IDPAQUETE 			= C.ID_PAQUETE
INNER JOIN EVENTO			AS D	ON C.EVENTOID_EVENTO 			= D.ID_EVENTO
INNER JOIN TIPO_DOCUMENTO	AS E	ON B.TIPO_DOCUMENTOID_DOCUMENTO	= E.ID_DOCUMENTO
INNER JOIN ESTADO_PEDIDO	AS F	ON A.ESTADOPEDIDOID_ESTADOPEDIDO= F.ID_ESTADOPEDIDO
ORDER BY ID_PEDIDO
;