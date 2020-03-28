/* INSERTS PARA CATEGORIAS */

INSERT INTO categorias VALUES (null, 'videojuegos');
INSERT INTO categorias VALUES (null, 'accion');
INSERT INTO categorias VALUES (null, 'rol');
INSERT INTO categorias VALUES (null, 'deportes');

/* INSERTS PARA ENTRADAS */

INSERT INTO entradas VALUES (null, 1, 'novedades de GTA', 'review del gta', current_date(), 2);
INSERT INTO entradas VALUES (null, 1, 'review de LOL online', 'todo sobre el lol', current_date(), 3);
INSERT INTO entradas VALUES (null, 1, 'nuevs jugadores de fifa 19', 'Juego de robar', current_date(), 4);


INSERT INTO entradas VALUES (null, 2, 'todo sobre assassins', 'Juego de asesinar', current_date(), 2);
INSERT INTO entradas VALUES (null, 2, 'todo sobre WOW', 'Estrategias para WOW', current_date(), 3);
INSERT INTO entradas VALUES (null, 2, 'Acerca de PES 2020', 'Trucos para realizar en PES 2020', current_date(), 4);


INSERT INTO entradas VALUES (null, 3, 'COD replays', 'revie COD', current_date(), 1);
INSERT INTO entradas VALUES (null, 3, 'GTA', 'Reviw de Fortnite', current_date(), 1);
INSERT INTO entradas VALUES (null, 3, 'Formula 1 Juegazo', 'Review de F1', current_date(), 1);
INSERT INTO entradas VALUES (null, 3, 'Formula 2 Juegazo', 'Review de F2', current_date(), 1);

select * from entradas;

desc categorias;
desc entradas;