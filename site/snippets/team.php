<section id="team">
    <div class="section_leistungen-intro">
         <div class="section_leistungen-text"> 
                 <?= $data->text()->myBlocksField()->toBlocks() ?>
        </div>
    </div>

    <div class="section_leistungen-cards"> 


            <?php foreach($data->children()->listed() as $team): ?>

      


        <div class="section_leistungen-card">
    
            <h2>    <?= $team->title() ?></h2> <br>
            <?= $team->text()->myBlocksField()->toBlocks() ?>


           
          
        </div>
                <?php endforeach ?>
          
    </div>
    <div class="abbinder">   
            <?= $data->abbinder()->kirbytext() ?>
        </div>  

</section> 
