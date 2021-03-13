<section id="kontakt" class ="grid_institut kontakt-background">
    <div class="kontakt_intro">      
   <h2 class="kontakt_title"> <?= $data->title()->html() ?></h2>
    </div>
                <?php foreach ($files = $data->image_left()->toFiles() as $file): ?> 
    <div class="section_institut_left kontakt-left">
        <img class="bild_left" src="<?= $file->url() ?>" alt="">       
    </div>
                <?php endforeach ?>


    <div class="kontakt-text_right kontakt-right">
        <?= $data->blocks()->myBlocksField()->toBlocks() ?> 
    </div>


</section>  