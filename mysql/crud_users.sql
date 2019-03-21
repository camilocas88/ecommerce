/*users*/
	/*Crear user*/
	INSERT INTO new_users SET user_id = 0, first_name = 'user', last_name = 'user', card_id = '2343456', mail = 'admin@lalicorera.com', password = MD5('12345'), city = 'Bogota', mails = 1, role = 'Super_user';

    INSERT INTO new_users SET user_id = 0, first_name = 'Camilo', last_name = 'Castillo', card_id = '1016007889', mail = 'camilo@lalicorera.com', password = MD5('12345'), city = 'Bogota', mails = 1, role = 'Super_user';

	
	/*Actualizar*/
		/*Datos generales*/
		UPDATE new_users SET first_name = 'Camilo', last_name = 'Castro', role = 'Super_user'
			WHERE first_name = 'Camilo' AND mail = 'camilo@lalicorera.com';
		/*Password*/
		UPDATE new_users SET password = MD5('12345')
			WHERE first_name = 'Camilo' AND mail = 'camilo@lalicorera.com';

		REPLACE new_users SET first_name = 'Camilo', mail = 'camilo@lalicorera.com', password = MD5('12345'), role = 'Super_user';

		REPLACE new_users SET first_name = 'Camilo', password = MD5('camilo');


	/*Eliminar user*/
	DELETE FROM new_users WHERE first_name = 'Camilo' AND mail = 'camilo@lalicorera.com' AND card_id = '1016007889';

	/*Buscar Todos los new_users*/
	SELECT * FROM new_users;

	/*Buscar un user por:*/
		/*user*/
		SELECT * FROM new_users WHERE first_name = 'Camilo';
		/*email*/
		SELECT * FROM new_users WHERE mail = 'camilo@lalicorera.com';
		/*role*/
		SELECT * FROM new_users WHERE role = 'Super_user';