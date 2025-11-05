<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atêlie da Nick</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?= url("assets/admin/css/style.css") ?>">
    <?php if ($this->section("specific-style")): ?>
        <?= $this->section("specific-style"); ?>
    <?php endif; ?>
</head>
<body>
    <!-- Sidebar -->
<aside id="sidebar" class="sidebar fechar">
  <nav>
    <ul>
      <li><a href="<?= url("admin") ?>"><i class="fa-solid fa-house"></i><span>Home</span></a></li>
      <li><a href="<?= url("admin/products") ?>"><i class="fa-solid fa-box"></i><span>Produtos</span></a></li>
      <li><a href="#"><i class="fa-solid fa-newspaper"></i><span>Artigos</span></a></li>
      <li><a href="#"><i class="fa-solid fa-bag-shopping"></i><span>Pedidos</span></a></li>
      <li><a href="#"><i class="fa-solid fa-ticket"></i><span>Cupons</span></a></li>
      <li><a href="#"><i class="fa-solid fa-user-group"></i><span>Clientes</span></a></li>
      <li><a href="#"><i class="fa-solid fa-chart-column"></i><span>Relatórios</span></a></li>
      <li><a href="#"><i class="fa-solid fa-gear"></i><span>Configurações</span></a></li>
      <li><a href="#"><i class="fa-solid fa-layer-group"></i><span>Capacidade</span></a></li>
      <li class="sair"><a href="#"><i class="fa-solid fa-right-from-bracket"></i><span>Sair</span></a></li>
    </ul>
  </nav>
</aside>

    <header class="header">
      <!-- Menu Hamburguer -->
      <div class="titleHeader">
          <button id="hamburguer" class="btn-icone">
            <i class="fa-solid fa-bars"></i>
          </button>
          <!-- Logo -->
          <h1 class="logo">ATELIÊ DA NICK</h1>
      </div>

      <!-- Título da Página -->
      <h2 class="titulo-pagina"><?= $title ?? "Painel de Controle"; ?></h2>

      <!-- Navegação do Usuário -->
      <nav class="user-nav">
        <button class="btn-icone"><i class="fa-regular fa-bell"></i></button>
        <button class="btn-icone"><i class="fa-regular fa-comment"></i></button>
        <button class="btn-icone"><i class="fa-regular fa-envelope"></i></button>

        <div class="perfil">
          <img src="<?= url("assets/admin/img/avatar-default.jpg") ?>" alt="Avatar do Admin">
          <span class="nome-admin">Admin Nick</span>
        </div>
      </nav>
    </header>

  <main class="conteudo"><?= $this->section("main") ?></main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= url("assets/admin/js/grafico.js") ?>"></script>
<script type="module" src="<?= url("assets/admin/js/script.js") ?>"></script>
</body>
</html>
