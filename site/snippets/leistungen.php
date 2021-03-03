<section id="leistungen">
<div class="section_leistungen-intro">
    <div class="section_leistungen-text"> 
        <?= $data->text()->myBlocksField()->toBlocks() ?>
    </div>
</div>


<div class="section_leistungen-cards"> 

<?php foreach($data->children()->listed() as $leistungen): ?>
    <div class="section_leistungen-card">
            <h2>    <?= $leistungen->title() ?></h2> <br>
            <p><?= $leistungen->text() ?> </p> 
    </div>
    <?php endforeach ?>
</div>



</section> 
     

