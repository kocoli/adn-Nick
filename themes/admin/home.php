<?php $this->layout("_theme", []); ?>

<?php $this->start("main"); ?>

<section class="cards">

  <div class="card">
    <i class="fa-solid fa-bag-shopping"></i>
    <div>
      <h3>Vendas Hoje</h3>
      <p>R$ 1.245,00</p>
    </div>
  </div>

  <div class="card">
    <i class="fa-solid fa-cart-shopping"></i>
    <div>
      <h3>Pedidos</h3>
      <p>32</p>
    </div>
  </div>

  <div class="card">
    <i class="fa-solid fa-users"></i>
    <div>
      <h3>Clientes</h3>
      <p>128</p>
    </div>
  </div>

  <div class="card">
    <i class="fa-solid fa-boxes-stacked"></i>
    <div>
      <h3>Produtos</h3>
      <p>87</p>
    </div>
  </div>

</section>

<section class="graficos">
  <h2>Vendas Últimos 7 Dias</h2>
  <canvas id="graficoVendas"></canvas>
</section>

<section class="graficos">
  <h2>Produtos Mais Vendidos</h2>
  <canvas id="produtosMaisVendidos"></canvas>
</section>

<section class="graficos">
  <h2>Clientes Mais Ativos</h2>
  <canvas id="clientesMaisAtivos"></canvas>
</section>

<section class="tabela-pedidos">
  <h2>Últimos Pedidos</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Produto</th>
        <th>Valor</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>#1001</td>
        <td>Maria Silva</td>
        <td>Kit Crochê Básico</td>
        <td>R$ 89,90</td>
        <td><span class="status entregue">Entregue</span></td>
      </tr>
      <tr>
        <td>#1002</td> 
        <td>João Costa</td>
        <td>Fio Barroco</td>
        <td>R$ 35,00</td>
        <td><span class="status pendente">Pendente</span></td>
      </tr>
      <tr>
        <td>#1003</td>
        <td>Larissa Prado</td>
        <td>Agulha 3mm</td>
        <td>R$ 15,00</td>
        <td><span class="status em-transito">Em trânsito</span></td>
      </tr>
    </tbody>
  </table>
</section>

<?php $this->end(); ?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="module" src="<?= url("assets/admin/js/grafico.js") ?>"></script>