<section id="leistungen">
<div class="section_leistungen-intro">
    <div class="section_leistungen-text"> 
        <?= $data->text()->myBlocksField()->toBlocks() ?>
    </div>
</div>


<div class="section_leistungen-cards"> 

<?php foreach($data->children()->listed() as $leistungen): ?>
    <div class="section_leistungen-card">
    <a href="<?= $leistungen->url() ?>">All</a>
            <h2>    <?= $leistungen->title() ?></h2> <br>
            <p><?= $leistungen->text() ?> </p> 
            <p><?= $leistungen->tags() ?> </p> 

             <?php foreach($data->children()->listed() as $leistungen_sub): ?>
    <div class="section_leistungen-tags">

            <p><?= $leistungen_sub->tags() ?> </p> 
          
          
    </div>
    <?php endforeach ?>


          
    </div>
    <?php endforeach ?>




</div>



</section> 
     

