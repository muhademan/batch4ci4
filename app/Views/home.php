 <?= $this->extend('template/layout'); ?>
 <?= $this->section('content'); ?>

 <header class="jumbotron jumbotron-fluid">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="h1"> Portal Berita CodeIgniter</h1>
             </div>
         </div>
     </div>
 </header>

 <div class="container">
     <div class="row">
         <?php foreach ($berita as $resultberita) { ?>
             <div class="col-md-12 card">
                 <h5 class="h5"><?= $resultberita['Judul'] ?></h5>
                 <p><?= $resultberita['Isi'] ?></p>
             </div>
         <?php } ?>
     </div>
 </div>
 <?= $this->endSection(); ?>