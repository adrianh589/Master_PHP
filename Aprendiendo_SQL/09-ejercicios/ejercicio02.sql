/**

  Modificar la comision de los venddores y ponerla al 0.5% cuando ganan mas de 50000

 */

 SELECT * FROM vendedores;

 UPDATE vendedores SET comision = 0.5 WHERE sueldo >= 50000;