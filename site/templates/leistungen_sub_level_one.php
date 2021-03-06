<?php snippet('header_sub') ?>

<section class="section_leis_sub--sub">
  <div class="section_leis_sub--sub-inhalt"> <p> <a href="<?= $page->url() ?>">All</a> </p> 
  <h2><?= $page->title()->html() ?> </h2>  
 <?= $page->text()->myBlocksField()->toBlocks() ?>
 </div>
 </section>
<?php snippet('footer') ?>