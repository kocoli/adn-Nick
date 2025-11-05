const hamburguer = document.getElementById("hamburguer");
const sidebar = document.getElementById("sidebar");

hamburguer.addEventListener("click", () => {
  // Alterna entre aberto/fechado
  sidebar.classList.toggle("fechar");
  sidebar.classList.toggle("abrir");
});

