// ===== GRÁFICO DE VENDAS =====
const ctx = document.getElementById('graficoVendas');

if (ctx) {
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
      datasets: [{
        label: 'Vendas (R$)',
        data: [250, 480, 320, 600, 900, 750, 1020],
        borderWidth: 3,
        borderColor: '#5A4A42',
        backgroundColor: 'rgba(0,41,95,0.1)',
        tension: 0.3,
        fill: true,
      }]
    },
    options: {
      scales: {
        y: { beginAtZero: true }
      },
      plugins: {
        legend: { display: false }
      }
    }
  });
}
