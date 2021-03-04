<?php snippet('header') ?>


<div class="section_leistungen-cards"> 

<?php foreach($data->children()->listed() as $leistungen): ?>
    <div class="section_leistungen-card">
    <a href="<?= $leistungen->url() ?>">All</a>
            <h2>    <?= $leistungen->title() ?></h2> <br>
            <p><?= $leistungen->text() ?> </p> 
          
          
    </div>
    <?php endforeach ?>


</div>

<?php snippet('footer') ?>