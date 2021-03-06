<?php snippet('header_sub') ?>


<section id="leistungen">
    <div class="section_leistungen-intro">
         <div class="section_leistungen-text"> 
                 <?= $page->text()->myBlocksField()->toBlocks() ?>
        </div>
    </div>

    <div class="section_leistungen-cards"> 

            <?php foreach($page->children()->listed() as $leistungen): ?>
        <div class="section_leistungen-card">
    
            <h2>    <?= $leistungen->title() ?></h2> <br>
            <?= $leistungen->text()->myBlocksField()->toBlocks() ?>

                <button class= button_standard>  <a href="<?= $leistungen->url() ?>">  <?= $leistungen_sub->tags()->html() ?></a></button> 

            <div class="section_leistungen-tags">
                <nav>
                    <ul>
                        <li class="section_leistungen-tags-nav"></li>
                    </ul>
                </nav>
            </div>
          
        </div>
                <?php endforeach ?>
          
    </div>
    <div class="abbinder">   
            <?= $page->abbinder()->kirbytext() ?>
        </div>  

</section> 




<?php snippet('footer') ?>