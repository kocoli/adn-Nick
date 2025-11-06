document.addEventListener("DOMContentLoaded", () => {

  // Pegar cores do tema
  const corPrincipal = getComputedStyle(document.documentElement).getPropertyValue('--cor-principal').trim();
  const corSecundaria = getComputedStyle(document.documentElement).getPropertyValue('--cor-secundaria').trim();
  const corHover = getComputedStyle(document.documentElement).getPropertyValue('--cor-hover').trim();
  const corEscura = getComputedStyle(document.documentElement).getPropertyValue('--cor-escura').trim();

  // ===== Vendas Últimos 7 Dias (linha) =====
  const ctxVendas = document.getElementById("graficoVendas").getContext("2d");
  new Chart(ctxVendas, {
    type: "line",
    data: {
      labels: ["Seg", "Ter", "Qua", "Qui", "Sex", "Sáb", "Dom"],
      datasets: [{
        label: "Vendas",
        data: [150, 200, 175, 220, 190, 230, 210],
        borderColor: corSecundaria,
        backgroundColor: "rgba(214,139,139,0.2)",
        tension: 0.3,
        fill: true,
        pointBackgroundColor: corPrincipal
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { display: false } },
      scales: {
        y: { beginAtZero: true, ticks: { color: corEscura } },
        x: { ticks: { color: corEscura } }
      }
    }
  });

  // ===== Produtos Mais Vendidos (barra horizontal) =====
  const ctxProdutos = document.getElementById("produtosMaisVendidos").getContext("2d");
  new Chart(ctxProdutos, {
    type: "bar",
    data: {
      labels: ["Fio Barroco", "Kit Crochê Básico", "Agulha 3mm", "Linha Algodão", "Panos de Tear"],
      datasets: [{
        label: "Quantidade Vendida",
        data: [120, 85, 60, 45, 30],
        backgroundColor: [corPrincipal, corSecundaria, corHover, corPrincipal, corSecundaria],
        borderRadius: 5
      }]
    },
    options: {
      indexAxis: "y",
      responsive: true,
      plugins: { legend: { display: false } },
      scales: { x: { beginAtZero: true }, y: { ticks: { color: corEscura } } }
    }
  });

  // ===== Clientes Mais Ativos (pizza) =====
  const ctxClientes = document.getElementById("clientesMaisAtivos").getContext("2d");
  new Chart(ctxClientes, {
    type: "pie",
    data: {
      labels: ["Premium", "Plus", "Normal"],
      datasets: [{
        data: [15, 25, 60],
        backgroundColor: [corSecundaria, corPrincipal, corHover],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      plugins: { legend: { position: "bottom", labels: { color: corEscura } } }
    }
  });

});
