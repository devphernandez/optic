INSERT INTO `TIENDA` (`TIE_ID`, `TIE_NAME`) VALUES
(1, 'Tercero'),
(2, 'Quinto');

INSERT INTO `USUARIO` (`USU_ID`, `USU_NAME`, `USU_MAIL`, `USU_RUT`, `USU_PASS`, `USU_ACTIVE`, `USU_TYPE`, `TIENDA_TIE_ID`) VALUES
(1, 'Pablo Hernandez', 'devphernandez@gmail.com', '172778054', '172778054', 1, 1, 1),
(2, 'Mario Meneses', 'mario.meneses.a@gmail.com', '161731188', '161731188', 1, 1, 2),
(3, 'Vendedor 1', 'devphernandez@gmail.com', '123456789', '123456789', 1, 2, 1),
(4, 'Vendedor 2', 'mario.meneses.a@gmail.com', '987654321', '987654321', 1, 2, 2);