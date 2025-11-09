<?php $this->layout("_theme", ["title" => "Sobre"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/web/css/about.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>
    <h1>About</h1>
<?php $this->end(); ?>