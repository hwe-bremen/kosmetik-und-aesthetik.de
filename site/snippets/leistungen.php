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
            <?= $leistungen->text()->myBlocksField()->toBlocks() ?>

                <button class= button_standard>  <a href="<?= $leistungen->url() ?>">Erfahren Sie hier mehr</a></button> 

            <div class="section_leistungen-tags-nav">
               
            <?php foreach($data->children()->listed() as $leistungen_sub): ?>
                        <div class="section_leistungen-tags"> <p> <?= $leistungen_sub->tags()->html() ?></p> </div>
           
                        <?php endforeach ?>
            </div>
          
        </div>
                <?php endforeach ?>
          
    </div>
    <div class="abbinder">   
            <?= $data->abbinder()->kirbytext() ?>
        </div>  

</section> 
     

