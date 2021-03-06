<section id="institut" class ="grid_institut">
                <?php foreach ($files = $data->image_left()->toFiles() as $file): ?> 
    <div class="section_institut_left">
        <img class="bild_left" src="<?= $file->url() ?>" alt="">       
    </div>
                <?php endforeach ?>

    <div class="text_left"> 
        <p><?= $data->text()->kirbytext() ?></p>
    </div>

            <?php foreach ($files = $data->image_right()->toFiles() as $file): ?> 
    <div class="section_institut_right"> 
        <img class="bild_right" src="<?= $file->url() ?>" alt=""> 
     </div>
        <?php endforeach ?>

    <div class="text_right">
        <?= $data->blocks()->myBlocksField()->toBlocks() ?> 
    </div>

            <?php foreach ($files = $data->gallery()->toFiles() as $file): ?>  
        <img class="bild_gallery" src="<?= $file->url() ?>" alt=""> 
             <?php endforeach ?>

</section>  