<?php snippet('header_sub') ?>


<section id="leistungen">
    <div class="section_leistungen-intro">
         <div class="section_leistungen-text"> 
                 <?= $page->text()->myBlocksField()->toBlocks() ?>
        </div>
    </div>

    <div class="section_leistungen-cards"> 

            <?php foreach($page->children()->listed() as $leistungen_sub): ?>
        <div class="section_leistungen-card">
    
            <h2>    <?= $leistungen_sub->title() ?></h2> <br>
            <?= $leistungen_sub->text()->myBlocksField()->toBlocks() ?>

        

            <div class="section_leistungen-tags">
                <div>
                    <div class="leistungen_nav">   <?php foreach($leistungen_sub->children()->listed() as $leistungen_sub): ?>
                        <a class="tags_leistungen" href="<?= $leistungen_sub->url() ?>"><div class="section_leistungen-tags-nav"><p><?= $leistungen_sub->tags()->html() ?></p></div></a>
                        <?php endforeach ?>
                    </div>
                       
                    </div>

            </div>
          
        </div>
                <?php endforeach ?>
          
    </div>
    <div class="abbinder">   
            <?= $page->abbinder()->kirbytext() ?>
        </div>  

</section> 




<?php snippet('footer') ?>