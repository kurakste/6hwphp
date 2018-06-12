<?php 
/**
 * Intry point for home work #6
 *
 * @author kurakste
 * @version $Id$
 * @copyright kurakste, 06 июня, 2018
 * @package default
 */

require_once('../engine/feedBackModel.php');
require_once('../engine/templating.php');
?>

<?php renderPhp('header.php'); ?>
<ul>
    <li><a href="calc.php">Part 1 Calculator</a></li>
    <li><a href="feedback.php">Part 2 Feedbacker</a></li>
    <li><a href="catalog.php">Part 3</a></li>
</ul>
<?php renderPhp('footer.php'); ?>
