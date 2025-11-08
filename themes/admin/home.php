<?php $this->layout("_theme", ["title" => "Painel de Controle Diário"]); ?>

<?php $this->start("specific-style");?>
  <link rel="stylesheet" href="<?= url("assets/admin/css/home.css") ?>">
<?php $this->stop() ?>

<?php $this->start("main"); ?>

<section class="admin-home">

  <!-- ===== SEÇÃO DE RESUMO RÁPIDO ===== -->
  <div class="resumo-cards">
    <div class="card-resumo">
      <h3>Pedidos Pendentes</h3>
      <p>3 pedidos aguardando envio</p>
    </div>
    <div class="card-resumo">
      <h3>Novos Clientes</h3>
      <p>+12 esta semana</p>
    </div>
    <div class="card-resumo">
      <h3>Parcerias Ativas</h3>
      <p>5 empresas parceiras</p>
    </div>
  </div>

  <!-- ===== SEÇÃO DE AGENDA ===== -->
  <div class="bloco">
    <h2>Agenda da Semana</h2>
    <table class="tabela-agenda">
      <thead>
        <tr>
          <th>Data</th>
          <th>Evento</th>
          <th>Responsável</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>07/11/2025</td>
          <td>Entrega de pedido grande - Cliente Luna</td>
          <td>Nick</td>
          <td><span class="status andamento">Em andamento</span></td>
        </tr>
        <tr>
          <td>09/11/2025</td>
          <td>Reunião com fornecedor “Fios & Cores”</td>
          <td>Nick</td>
          <td><span class="status agendado">Agendado</span></td>
        </tr>
        <tr>
          <td>11/11/2025</td>
          <td>Evento artesanal na praça central</td>
          <td>Equipe</td>
          <td><span class="status concluido">Concluído</span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- ===== SEÇÃO DE PARCERIAS ===== -->
  <div class="bloco">
    <h2>Parcerias e Fornecedores</h2>
    <ul class="lista-parcerias">
      <li>
        <strong>Fios & Cores:</strong> fornecimento mensal de fios de algodão.
      </li>
      <li>
        <strong>Ateliê da Lua:</strong> parceria para produtos personalizados.
      </li>
      <li>
        <strong>Casa das Linhas:</strong> parceria em eventos locais.
      </li>
    </ul>
  </div>

  <!-- ===== SEÇÃO DE TAREFAS ===== -->
  <div class="bloco">
    <h2>Minhas Tarefas</h2>
    <ul class="lista-tarefas">
      <li><input type="checkbox" id="t1"> <label for="t1">Atualizar catálogo de produtos</label></li>
      <li><input type="checkbox" id="t2"> <label for="t2">Responder mensagens pendentes</label></li>
      <li><input type="checkbox" id="t3"> <label for="t3">Agendar post para redes sociais</label></li>
    </ul>
  </div>

</section>


<?php $this->end(); ?>