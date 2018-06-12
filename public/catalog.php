<?php 
/**
 * Каталог товаров.
 *
 * @author kurakste
 * @version $Id$
 * @copyright kurakste, 08 июня, 2018
 * @package default
 */
require_once('../engine/templating.php');
require_once('../engine/itemModel.php');
?>
<?php renderPhp('headerForCatalog.php'); ?>
<div class="clearfix"></div>

<?php $allItemsID = getItemIDArray(); ?>

 <div id="catalog">
     <?php foreach ($allItemsID as $id): ?>

        <?php renderPhp('itemTemplate.php', getItemFromDB($id)) ?> 

     <?php endforeach ?>

 </div> <!-- catalog -->

<?php renderPhp('footerForCatalog.php'); ?>

