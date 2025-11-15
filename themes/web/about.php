<?php $this->layout("_theme", ["title" => "Sobre"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/web/css/about.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>
    <section class="about">
      <div class="about-container">
        <h2>Sobre o Micro SaaS</h2>
        <p class="about-desc">
          Nosso Micro SaaS foi desenvolvido para facilitar o seu dia a dia com
          automações inteligentes, relatórios organizados e performance otimizada.
          Escolha o plano ideal para você!
        </p>
    
        <div class="planos">
          <!-- Plano Normal -->
          <div class="card-plano">
            <h3>Plano Normal</h3>
            <p class="preco">R$ 19/mês</p>
            <ul>
              <li>Acesso básico</li>
              <li>Relatórios limitados</li>
              <li>1 usuário</li>
            </ul>
            <a href="#" class="btn-plano">Escolher Plano</a>
          </div>
    
          <!-- Plano Premium -->
          <div class="card-plano destaque">
            <h3>Plano Premium</h3>
            <p class="preco">R$ 49/mês</p>
            <ul>
              <li>Acesso completo</li>
              <li>Relatórios avançados</li>
              <li>5 usuários</li>
              <li>Suporte priorizado</li>
            </ul>
            <a href="#" class="btn-plano">Escolher Plano</a>
          </div>
    
          <!-- Plano Plus -->
          <div class="card-plano">
            <h3>Plano Plus</h3>
            <p class="preco">R$ 99/mês</p>
            <ul>
              <li>Todos os recursos desbloqueados</li>
              <li>Usuários ilimitados</li>
              <li>Analytics detalhado</li>
              <li>Integrações extras</li>
            </ul>
            <a href="#" class="btn-plano">Escolher Plano</a>
          </div>
        </div>
      </div>
    </section>

<?php $this->end(); ?>