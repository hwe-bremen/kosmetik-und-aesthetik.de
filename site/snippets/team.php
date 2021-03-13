<section id="team">
    <div class="section_team-intro">
         <div class="section_team-text"> 
                 <?= $data->text()->myBlocksField()->toBlocks() ?>

                 <button class="button_standard team_button" >  <a href="https://www.altvater-hautarzt.de/">Erfahren Sie hier mehr</a></button> 

        </div>
    </div>

    <div class="section_team-cards"> 


    <?php foreach($data->children()->listed() as $team): ?>
    
        <div class="section_team-card">
        <?php foreach ($files = $team->cover()->toFiles() as $file): ?>  
        <img class="team_bild--cover" src="<?= $file->url() ?>" alt=""> 

        <?php endforeach ?>
   
         <div class="team-cards--text">  
             <?= $team->text()->myBlocksField()->toBlocks() ?>
        </div>


           
          
        </div>
                <?php endforeach ?>
          

</section> 
