CREATE OR REPLACE VIEW VW_VER_TIPO_DOCUMENTO 
(
	 ID_DOCUMENTO
    ,SIGLAS
    ,NOMBRE_TIPO_DOCUMENTO
)
AS

SELECT   ID_DOCUMENTO
		,SIGLAS
		,NOMBRE_TIPO_DOCUMENTO 
FROM TIPO_DOCUMENTO;