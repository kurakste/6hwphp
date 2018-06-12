<div class="lot">
    <div class="lotImage">
        <p><img class="small-image" src="<?php echo $input['titleImagePath'] ?>" alt="PHP Polnoe rookovodstvo"/></P>
    </div>
    <div class="lotDescriptions">
        <h4>Лот №<?php echo $input['id'] ?></h4>
        <h4><?php echo $input['Name'] ?></h4>  
        <h5>Цена:<?php echo $input['price'] ?>  руб.</h5>
        <p><?php echo $input['condition'] ?></p>
        <div class="clearfix"></div>
        <a href="items.php?id=<?php echo $input['id'] ?>">ПОДРОБНЕЕ</a>
        <div class="smallBtn catBuyButton"><a href="#">Купить</a></div>
    </div>

</div> <!-- lot --!>

