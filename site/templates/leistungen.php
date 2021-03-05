<?php snippet('header') ?>


<section id="leistungen">
<div class="section_leistungen-intro">
    <div class="section_leistungen-text"> 
        <?= $page->text()->myBlocksField()->toBlocks() ?>
    </div>
</div>


<div class="section_leistungen-cards"> 

<?php foreach($page->children()->listed() as $leistungen): ?>
    <div class="section_leistungen-card">
    <a href="<?= $leistungen->url() ?>">All</a>
            <h2>    <?= $leistungen->title() ?></h2> <br>
            <p><?= $leistungen->text() ?> </p> 
            <p><?= $leistungen->tags() ?> </p> 

            
        <div class="section_leistungen-tags">

 




       
          
        </div>

  


          
    </div>
    <?php endforeach ?>


</div>




</section> 





<?php snippet('footer') ?>