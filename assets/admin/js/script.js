const hamburguer = document.getElementById("hamburguer");
const sidebar = document.getElementById("sidebar");

hamburguer.addEventListener("click", () => {
  // Alterna entre aberto/fechado
  sidebar.classList.toggle("fechar");
  sidebar.classList.toggle("abrir");
});

// Destacar o item ativo
document.querySelectorAll(".sidebar li").forEach(item => {
  item.addEventListener("click", () => {
    document.querySelectorAll(".sidebar li").forEach(li => li.classList.remove("ativo"));
    item.classList.add("ativo");
  });
});
