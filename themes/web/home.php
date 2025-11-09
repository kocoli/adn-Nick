<?php $this->layout("_theme", ["title" => "Início"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/web/css/home.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>
    <h1>Home</h1>
<?php $this->end(); ?>