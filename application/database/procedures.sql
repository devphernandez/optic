DELIMITER //  
CREATE  PROCEDURE LOGIN(IN RUT CHAR(30), IN PASS CHAR(30), OUT NAME CHAR(30))
BEGIN
     SELECT USU_ID, USU_NAME, USU_MAIL, USU_RUT, USU_TYPE, TIE_NAME 
     FROM USUARIO INNER JOIN TIENDA ON USUARIO.TIENDA_TIE_ID = TIENDA.TIE_ID
     WHERE USU_RUT = RUT AND USU_PASS = PASS AND USU_ACTIVE = 1;
END;
//  
DELIMITER ;