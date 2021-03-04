<?php snippet('header') ?>


 <p> <a href="<?= $page->url() ?>">All</a> </p> 
 <?= $page->text()->myBlocksField()->toBlocks() ?>

<?php snippet('footer') ?>