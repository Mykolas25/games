<?php

foreach($games as $game){
?>
    <article>
        <header>
            <?= $game['name']; ?>
        </header>
        <div>
            <?= $game['release_date']; ?>
        </div>
        <div>
            <?= $game['genre']; ?>
        </div>
        <div>
            <?= $game['developer']; ?>
        </div>
    </article>
    
<?php } ?>
