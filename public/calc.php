<?php
/**
 * Home Work part 1 calculator
 *
 * @author kurakste
 * @version $Id$
 * @copyright kurakste, 06 июня, 2018
 * @package default
 */

require_once('../engine/mathlib.php');
require_once('../engine/templating.php');
?>

<?php renderPhp('header.php', ['title'=>'Calculator']); ?>

<?php if ((isset($_POST['action'])) or (isset($_GET['action']))):?>
    <h2>It's done</h2>
    <h2>Result is: <?php echo doMath($_POST) ?></h2>
    <h2><a href="calc.php">Return</a></h2>
    <h2><a href="index.php">HOME</a></h2>

    <?php else: ?>
    <form action="calc.php" method="post">
        <select name="action" id="actionSel">
           <option value="add">add</option>
           <option value="minus">minus</option>
           <option value="multiply">multiply</option>
           <option value="divide">divide</option>
        </select>            
        <input type="text" name="arg1" id="arg1" value="" />
        <input type="text" name="arg2" id="arg2" value="" />
        <input type="submit" name="docalc" id="docalc" value="do math" />
    </form>
    <h2><a href="index.php">HOME</a></h2>
    
<?php endif ?>

    </body>
</html>
