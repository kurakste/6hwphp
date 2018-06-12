<?php 
/**
* Страница выводит данные конкретного айтема получая его id 
* через _GET запрос.  
 *
 * @author kurakste
 * @version 1.0
 * @copyright kurakste, 08 июня, 2018
 * @package default
 */

require_once('../engine/templating.php');
require_once('../engine/itemModel.php');

?>

<?php renderPhp('headerForCatalog.php'); ?>
<?php if (isset($_GET['id'])): ?>
    <?php $item = getItemFromDb($_GET['id']); ?>
    <?php renderPhp('itemPageTemplate.php', $item); ?> 
<?php else: ?>
    <h1>Something goes wrong<h1>
<?php endif ?>

<?php renderPhp('footerForCatalog.php'); 
