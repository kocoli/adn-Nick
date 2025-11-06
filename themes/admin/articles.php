<?php $this->layout("_theme", ["title" => "Criar novos Artigos"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/admin/css/articles.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section class="artigos-admin">

  <!-- Formulário de criação -->
  <form class="form-artigo">

    <div class="grupo-form">
      <label for="titulo">Título do Artigo</label>
      <input type="text" id="titulo" name="titulo" placeholder="Ex: Como combinar fios de algodão" required>
    </div>

    <div class="grupo-form">
      <label for="categoria">Categoria</label>
      <select id="categoria" name="categoria" required>
        <option value="">Selecione uma categoria</option>
        <option value="tecelagem">Tecelagem</option>
        <option value="croche">Crochê</option>
        <option value="bordado">Bordado</option>
        <option value="novidades">Novidades</option>
      </select>
    </div>

    <div class="grupo-form">
      <label for="imagem">Imagem de Capa</label>
      <input type="file" id="imagem" name="imagem" accept="image/*">
    </div>

    <div class="grupo-form">
      <label for="conteudo">Conteúdo</label>
      <textarea id="conteudo" name="conteudo" rows="8" placeholder="Digite o conteúdo do artigo aqui..."></textarea>
    </div>

    <button type="submit" class="btn-principal">Publicar Artigo</button>
  </form>

  <!-- Lista de artigos -->
  <section class="lista-artigos">
    <h2>Artigos Publicados</h2>

    <table>
      <thead>
        <tr>
          <th>Título</th>
          <th>Categoria</th>
          <th>Data</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Como cuidar de peças de lã</td>
          <td>Tecelagem</td>
          <td>03/11/2025</td>
          <td>
            <button class="btn-editar"><i class="fa-solid fa-pen"></i></button>
            <button class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>Novos fios importados chegaram!</td>
          <td>Novidades</td>
          <td>30/10/2025</td>
          <td>
            <button class="btn-editar"><i class="fa-solid fa-pen"></i></button>
            <button class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </section>
</section>

<?php $this->end(); ?>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script type="module" src="<?= url("assets/admin/js/tinyMEC.js"); ?>"></script>