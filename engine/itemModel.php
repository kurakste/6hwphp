<?php 

/**
 * Модель извлекает данные из базы и генерит представление для HTML  
 * обрати внимание что что CSS правила к сгенерированным блокам 
 * находятся в общем файле с SCC. Наверняка это не правильно. Нужно 
 * разбираться как это должно работать. 
 *
 * @author kurakste
 * @version $Id$
 * @copyright kurakste, 08 июня, 2018
 * @package default
 */

require_once('../engine/dblib.php');
require_once('../config/params.php');
require_once('../engine/rendering.php');

/**
 * Функция вернет айтем каталога по его ID
 *
 * @param $id - id of items
 * @return html (представление одного айтема для каталога)
 * @author kurakste
 */
function getItemFromDb($id) {
   dbOpen(); 
   global $db;
   $request = 'SELECT * FROM items where id=\''.$id.'\';';
   $query = mysqli_query($db, $request);
   while ($q = mysqli_fetch_assoc($query)) {
        $out[] = $q;
   }
   $out = $out[0];
   // Теперь в нулевом элементе массива лежит строчка с параметрами айтома.
   dbClose();
   $out['titleImagePath'] = getTitleImage($id);
   return $out;
}

/**
 * функция вернет массив адресов изображений для айтома
 *
 * @param $id - id of items
 * @return функция вернет массив адресов изображений для айтома 
 * с конкретным  ID 
 * @author kurakste
 */
function getImagesFromDB ($id) {
   dbOpen(); 
   global $db;
   $request = 'SELECT * FROM imagesForItems where imageid=\''.$id.'\';';
   $query = mysqli_query($db, $request);
   while ($q = mysqli_fetch_assoc($query)) {
        $out[] = $q;
   }
   dbClose();
   return $out;
}

/**
 * Функция вернет вернет имидж, который должен стоять на транице каталога.
 * На текущий момент это первый инмидж в списке для этого айтема. 
 *
 * @param $id - id of items
 * @return  функция вернет путь до изображения
 * @author kurakste
 */
function getTitleImage ($id) {
    $images = getImagesFromDB($id);
    $image = $images[0]['pathtoimage']; 
    return $image;

}
/**
 * Вернет массив ID всех айтемов, которые есть в системе. 
 *
 * @param 
 * @return  массив ID
 * @author kurakste
 */
function getItemIDArray () {
   dbOpen(); 
   global $db;
   $request = 'SELECT id FROM items;';
   $query = mysqli_query($db, $request);
   while ($q = mysqli_fetch_assoc($query)) {
        $out[] = $q['id'];
   }
   dbClose();
   return $out;
}

