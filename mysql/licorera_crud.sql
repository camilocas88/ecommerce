/* Listado de Operaciones (queries) CRUD de lalicorera */

/*articules*/
    -- Crear articulos
    INSERT INTO articles (title, description, content, url, time, keywords, active) VALUES ('" . Utilities::clean($_POST['title']) . "', '" . Utilities::clean($_POST['description']) . "', '" . $_POST['content'] . "', '" . Utilities::convertStringForURL($url) . "', " . time() . ", '" . Utilities::clean($_POST['keywords']) . "', " . $active . ")
    -- Actualizar articulos
    UPDATE articles SET title = '" . Utilities::clean($_POST['title']) . "', description = '" . Utilities::clean($_POST['description']) . "', content = '" . $_POST['content'] . "', url = '" . Utilities::convertStringForURL($url) . "', keywords = '" . Utilities::clean($_POST['keywords']) . "', active = " . $active . " WHERE id = " . $_POST['articleid']"

     /*Eliminar articulos  */
    DELETE FROM articles WHERE id = " . $_POST['articleid'] . " LIMIT 1;
    -- Buscar todos los articulos
    SELECT FROM * articles;
    -- Buscar un articulo por keywords, title
    SELECT title, keywords FROM articles WHERE title LIKE '%Whisky%' AND keywords LIKE '%Macallan%';

/*banners*/
    -- Crear banners
    -- Actualizar banner
    -- Eliminar banner 
    -- Buscar todos los banners

/*cart*/
    -- Crear carta
    -- Actualizar carta
    -- Eliminar carta 
    -- Buscar por producto, user_id

/*categories*/
    -- Crear categories
    -- Actualizar categories
    -- Eliminar categories
    -- Buscar todos los categories
    -- Buscar un articulo por name, url, seo_title, keywords

/*cities*/
    -- Crear cities
    -- Actualizar cities
    -- Eliminar cities 
    -- Buscar por cities, id

/*cocktails*/

    -- Crear cocktails
    -- Actualizar cocktails
    -- Eliminar cocktails 
    -- Buscar por name,keywords, seo_title, short_description

/*cocktail_categories*/
/*debe tener una llave forane con conktails*/

    -- Crear cocktail_categorie
    -- Actualizar cocktail_categorie
    -- Eliminar cocktail_categorie 
    -- Buscar por id,name

/*coupons*/
    -- Crear coupons
    -- Actualizar coupons
    -- Eliminar coupons 
    -- Buscar por id,code, price, percent, times

/*home_banners*/

    -- Crear home_banners
    -- Actualizar home_banners
    -- Eliminar home_banners 
    -- Buscar por id,url, alt

/*messages*/

    -- Crear messages
    -- Actualizar messages
    -- Eliminar messages 
    -- Buscar por id,user_id, message, time

/*new_users*/

    -- Crear user_id
    INSERT INTO new_users SET user_id = 0, first_name = 'user', last_name = 'user', card_id = '2343456', mail = 'admin@lalicorera.com', password = MD5('12345'), city = 'Bogota', mails = 1, role = 'Super_user';
    -- Actualizar
    --     Datos Generales
    UPDATE new_users SET first_name = 'Camilo', last_name = 'Castro', role = 'Super_user'
    WHERE first_name = 'Camilo' AND mail = 'camilo@lalicorera.com';
    --     Password
    UPDATE new_users SET password = MD5('12345')
    WHERE first_name = 'Camilo' AND mail = 'camilo@lalicorera.com';
    -- Eliminar user_id
    DELETE FROM new_users WHERE first_name = 'Camilo' AND mail = 'camilo@lalicorera.com' AND card_id = '1016007889';
    -- Buscar todos los user_id
    SELECT * FROM new_users;
    -- Buscar user por:
    --     first_name
    SELECT * FROM new_users WHERE first_name = 'Camilo';
    --     mail
    SELECT * FROM new_users WHERE mail = 'camilo@lalicorera.com';
    --     role
    SELECT * FROM new_users WHERE role = 'Super_user';
    




