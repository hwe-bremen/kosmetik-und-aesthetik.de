<?php snippet('header_sub') ?>


<div class="section_leistungen-cards"> 

<?php foreach($page->children()->listed() as $leistungen_sub): ?>
    <div class="section_leistungen-card">
    <a href="<?= $leistungen_sub->url() ?>">All</a>
            <h2>    <?= $leistungen_sub->title() ?></h2>
           <?= $leistungen_sub->textblock()->toBlocks() ?>
            <p><?= $leistungen_sub->tags() ?> </p> 
          
          
    </div>
    <?php endforeach ?>
 

</div>

<?php snippet('footer') ?>