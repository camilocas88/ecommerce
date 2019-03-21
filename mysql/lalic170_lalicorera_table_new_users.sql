--
-- Estructura de tabla para la tabla `new_users`
--
DROP TABLE IF EXISTS new_users ;

CREATE TABLE new_users (
  user_id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(20) NOT NULL,
  last_name VARCHAR(20) NOT NULL,
  card_id INTEGER UNSIGNED,
  mail VARCHAR(50) UNIQUE NOT NULL,
  password CHAR(32) NOT NULL,
  city VARCHAR(30) NOT NULL,
  mails TINYINT(1),
  role ENUM('User', 'Admin_venta','User_franqucia','Super_user')
) 