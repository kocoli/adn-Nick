<?php $this->layout("_theme", ["title" => "Nossas Histórias"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/articles.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="articles-header">
    <h2> Nossas Histórias</h2>
    <p>
        O Ateliê da Nick é mais do que uma loja — é um espaço de inspiração, afeto e transformação.  
        Cada peça carrega um pedaço da alma de quem cria. Conheça as histórias emocionantes de artesãos e artesãs que fazem parte da nossa comunidade e descubra como a arte mudou suas vidas.
    </p>
</section>

<section id="articles-list">
    <!-- Artigo 1 -->
    <article class="article-card">
        <img src="https://images.unsplash.com/photo-1601643159799-df2b7c0fa5b5?w=800" alt="História de Maria">
        <div class="article-content">
            <h3>🌷 Maria e o crochê que virou profissão</h3>
            <p>
                Maria começou no crochê como uma forma de terapia. Hoje, seus amigurumis encantam clientes de todo o Brasil.
            </p>
            <a href="#">Ler história</a>
        </div>
    </article>

    <!-- Artigo 2 -->
    <article class="article-card">
        <img src="https://images.unsplash.com/photo-1616627974550-788e9ff5733b?w=800" alt="História de Joana">
        <div class="article-content">
            <h3>🪡 Joana e a arte que uniu gerações</h3>
            <p>
                Entre tecidos e linhas, Joana aprendeu a costurar com a avó. Hoje, ensina novas gerações a transformar sonhos em arte.
            </p>
            <a href="#">Ler história</a>
        </div>
    </article>

    <!-- Artigo 3 -->
    <article class="article-card">
        <img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?w=800" alt="História de Ana">
        <div class="article-content">
            <h3>🧶 Ana e o poder de recomeçar</h3>
            <p>
                Após um momento difícil, Ana encontrou nas cores e texturas do tricô uma nova maneira de enxergar a vida.
            </p>
            <a href="#">Ler história</a>
        </div>
    </article>

    <!-- Artigo 4 -->
    <article class="article-card">
        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?w=800" alt="História de Carla">
        <div class="article-content">
            <h3>✨ Carla e a magia dos pequenos detalhes</h3>
            <p>
                Cada ponto que Carla dá é carregado de amor. Suas peças delicadas se tornaram presentes únicos e especiais.
            </p>
            <a href="#">Ler história</a>
        </div>
    </article>
</section>

<section id="share-story">
    <h3>Quer ver sua história aqui?</h3>
    <p>Envie seu relato e inspire outras pessoas com o seu talento! 💌</p>
    <a href="enviar-historia.php" class="btn-enviar">Enviar minha história</a>
</section>

<?php $this->end(); ?>
