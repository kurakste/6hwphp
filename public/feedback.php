<?php
/**
 * Feedbacer block for HomeWorl #6
 *
 * @author kurakste
 * @version $Id$
 * @copyright kurakste, 06 июня, 2018
 * @package default
 */
require_once('../engine/feedBackModel.php');
require_once('../engine/templating.php');
?>

    <?php if(isset($_GET['action']) && ($_GET['action'] == 'del')) : ?>

        <h2><?php echo dellFeedback($_GET['id']) ?></h2>
        <h2><a href="feedback.php">BACK</a></h2>

    <?php elseif(isset($_GET['action']) && ($_GET['action'] == 'addnewfb')) : ?>

        <?php renderPhp('header.php'); ?>
        <h2>Новый отзыв.</h2>
        <form action="addnewfb.php" method="post">
            <input type="text" name="fmessage" id="fmessage" value="" />
            <input type="text" name="fname" id="fname" value="" />
            <input type="submit" name="bsubmit" id="" value="" />
        </form>
        <?php renderPhp('footer.php'); ?>

    <?php else: ?>

        <?php renderPhp('header.php'); ?>
        <div class='wrapper'>
            <?php echo renderFeedbacks() ?>
            <a href="feedback.php?action=addnewfb">Add new FB</a>
            <h2><a href="index.php">HOME</a></h2>
        </div>
        <?php renderPhp('footer.php'); ?>

    <?php endif ?>
