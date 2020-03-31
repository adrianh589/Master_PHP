# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambiar el nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# modificar columna sin cambiar nombre #
ALTER TABLE usuarios_renom MODIFY apellido char(50) NOT NULL ;

describe usuarios_renom;

# Añadir una columna #
ALTER TABLE usuarios_renom ADD website varchar(100) NOT NULL;

# Añadir restriccion a una columna #
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE (email);

SELECT * FROM usuarios_renom;

# Borrar una columna #
ALTER TABLE usuarios_renom DROP COLUMN website;