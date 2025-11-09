<?php $this->layout("_theme", ["title" => "Editar Perfil"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/edit.css"); ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="edit-profile">

    <h2>Gerenciar Conta</h2>

    <!-- ======== DADOS PESSOAIS ======== -->
    <form class="form-section" id="personal-data">
        <h3>Dados Pessoais</h3>
        <div class="form-grid">
            <div class="input-box">
                <label for="name">Nome completo:</label>
                <input type="text" id="name" placeholder="Digite seu nome completo" required>
            </div>

            <div class="input-box">
                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="seuemail@exemplo.com" required>
            </div>

            <div class="input-box">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" placeholder="000.000.000-00" required>
            </div>

            <div class="input-box">
                <label for="birth">Data de nascimento:</label>
                <input type="date" id="birth" required>
            </div>

            <div class="input-box">
                <label for="gender">Sexo:</label>
                <select id="gender" required>
                    <option value="">Selecione...</option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="input-box">
                <label for="photo">Foto de perfil:</label>
                <input type="file" id="photo" accept="image/*">
            </div>
        </div>

        <button type="submit" class="btn-save">Salvar Alterações</button>
    </form>


    <!-- ======== ALTERAR SENHA ======== -->
    <form class="form-section" id="password-change">
        <h3>Alterar Senha</h3>
        <div class="input-box">
            <label for="current-password">Senha atual:</label>
            <input type="password" id="current-password" required>
        </div>

        <div class="input-box">
            <label for="new-password">Nova senha:</label>
            <input type="password" id="new-password" required>
        </div>

        <div class="input-box">
            <label for="confirm-password">Confirmar nova senha:</label>
            <input type="password" id="confirm-password" required>
        </div>

        <button type="submit" class="btn-save">Atualizar Senha</button>
    </form>


    <!-- ======== MUDAR PLANO ======== -->
    <form class="form-section" id="plan-change">
        <h3>Plano de Assinatura</h3>
        <p class="desc">Escolha o plano que melhor se encaixa com o seu perfil:</p>

        <div class="plans">
            <label class="plan-card">
                <input type="radio" name="plan" value="normal" checked>
                <div class="plan-info">
                    <h4>Normal</h4>
                    <p>Gratuito • Acesso básico</p>
                </div>
            </label>

            <label class="plan-card">
                <input type="radio" name="plan" value="premium">
                <div class="plan-info">
                    <h4>Premium</h4>
                    <p>R$ 29,90/mês • Destaques em produtos</p>
                </div>
            </label>

            <label class="plan-card">
                <input type="radio" name="plan" value="plus">
                <div class="plan-info">
                    <h4>Plus</h4>
                    <p>R$ 49,90/mês • Vantagens exclusivas e suporte prioritário</p>
                </div>
            </label>
        </div>

        <button type="submit" class="btn-save">Atualizar Plano</button>
    </form>


    <!-- ======== EXCLUIR CONTA ======== -->
    <div class="form-section danger-zone">
        <h3>Excluir Conta</h3>
        <p>Para excluir seus dados pessoais você será direcionado para uma nova página, preencha os campos obrigatórios e envie a solicitação. A ação é <strong>irreversível</strong> leia a nossa <a href="#">Politica de privacidade</a> antes de exclir sua conta.</p>
        <button class="btn-delete">Excluir Conta</button>
    </div>

</section>

<?php $this->end(); ?>