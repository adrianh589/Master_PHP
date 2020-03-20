# Renombrar una tabla #
ALTER TABLE usuarios RENAME TO usuarios_renom;

# Cambtiar el nombre de una columna #
ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# modificar columna sin cambiar nobre #
ALTER TABLE usuarios_renom MODIFY apellido char(50) NOT NULL ;

describe usuarios_renom;