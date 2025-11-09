<?php $this->layout("_theme", ["title" => "Comunidade Ateliê"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/community.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="community-header">
    <h2><i class="bi bi-people-fill"></i> Comunidade Ateliê</h2>
    <p>Compartilhe suas ideias, troque dicas e inspire outras pessoas. 🌸</p>
</section>

<section id="community-container">
    <!-- FORMULÁRIO DE NOVO POST -->
    <div class="new-post">
        <h3>Publique algo</h3>
        <form action="#" method="POST">
            <textarea name="mensagem" id="mensagem" rows="4" placeholder="Escreva sua mensagem aqui..."></textarea>
            <button type="submit"><i class="bi bi-send-fill"></i> Publicar</button>
        </form>
    </div>

    <!-- FEED DE COMENTÁRIOS -->
    <div class="feed">
        <article class="post">
            <div class="user-info">
                <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Usuário">
                <div>
                    <h4>@artesanalu</h4>
                    <small>há 2 horas</small>
                </div>
            </div>
            <p>Terminei minha primeira bolsa de crochê usando o fio de algodão da loja! 😍 Super recomendo, é muito macio e fácil de trabalhar!</p>
            <div class="actions">
                <button><i class="bi bi-heart"></i> Curtir</button>
                <button><i class="bi bi-chat"></i> Comentar</button>
            </div>
        </article>

        <article class="post">
            <div class="user-info">
                <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Usuário">
                <div>
                    <h4>@felipicroche</h4>
                    <small>há 5 horas</small>
                </div>
            </div>
            <p>Alguém sabe onde encontro moldes para feltro infantil? Estou começando agora nesse tipo de trabalho e aceito dicas 😅</p>
            <div class="actions">
                <button><i class="bi bi-heart"></i> Curtir</button>
                <button><i class="bi bi-chat"></i> Comentar</button>
            </div>
        </article>

        <article class="post">
            <div class="user-info">
                <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Usuário">
                <div>
                    <h4>@mariartes</h4>
                    <small>há 1 dia</small>
                </div>
            </div>
            <p>O Ateliê mudou minha vida! Comecei vendendo peças pequenas e hoje tenho minha própria lojinha online 💕</p>
            <div class="actions">
                <button><i class="bi bi-heart"></i> Curtir</button>
                <button><i class="bi bi-chat"></i> Comentar</button>
            </div>
        </article>
    </div>
</section>

<?php $this->end(); ?>
