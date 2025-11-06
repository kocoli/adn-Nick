<?php $this->layout("_theme", ["title" => "Gerenciamento de Pedidos"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/admin/css/orders.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

  <section class="pedidos-admin">
    <!-- Barra de Pesquisa -->
    <div class="barra-pesquisa">
      <input type="text" id="search" placeholder="Buscar pedido, cliente ou status...">
      <button class="btn-principal"><i class="fa-solid fa-search"></i> Buscar</button>
    </div>

    <!-- Lista de Pedidos -->
    <div class="lista-pedidos">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Pedido</th>
            <th>Status</th>
            <th>Entrega</th>
            <th>Valor</th>
            <th>Data</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#1024</td>
            <td>Maria Souza</td>
            <td>Kit de Fios Coloridos</td>
            <td><span class="status pendente">Pendente</span></td>
            <td>Correios</td>
            <td>R$ 120,00</td>
            <td>05/11/2025</td>
            <td class="acoes">
              <button class="btn-acao visualizar"><i class="fa-solid fa-eye"></i></button>
              <button class="btn-acao imprimir"><i class="fa-solid fa-print"></i></button>
            </td>
          </tr>

          <tr>
            <td>#1025</td>
            <td>Ana Clara</td>
            <td>Tapete de Crochê Rosa</td>
            <td><span class="status enviado">Enviado</span></td>
            <td>Retirada</td>
            <td>R$ 85,00</td>
            <td>03/11/2025</td>
            <td class="acoes">
              <button class="btn-acao visualizar"><i class="fa-solid fa-eye"></i></button>
              <button class="btn-acao imprimir"><i class="fa-solid fa-print"></i></button>
            </td>
          </tr>

          <tr>
            <td>#1026</td>
            <td>João Pereira</td>
            <td>Novelinho Bege Premium</td>
            <td><span class="status entregue">Entregue</span></td>
            <td>Motoboy</td>
            <td>R$ 45,00</td>
            <td>01/11/2025</td>
            <td class="acoes">
              <button class="btn-acao visualizar"><i class="fa-solid fa-eye"></i></button>
              <button class="btn-acao imprimir"><i class="fa-solid fa-print"></i></button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>


<?php $this->end(); ?>