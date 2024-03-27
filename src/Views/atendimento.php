<div class="home">
  <h1>Atendimento</h1>

  <div class="links">
    <a href="/vendas">
      <button class="btn-with-icon">
        <p class="btn-icon">🧾</p>
        <h2>Vendas</h2>
      </button>
    </a>
    <a href="/servicos">
      <button class="btn-with-icon">
        <p class="btn-icon">🛠️</p>
        <h2>Serviços</h2>
      </button>
    </a>
  </div>

  <div class="section-container">
    <form action="/atendimento/show/" method="post" class="form-for-chart">
      <input name="date" type="date" max="<?php echo $dateInputMaxDate ?>" value="<?php echo $dateInputDefaultValue ?>">
      <button type="submit">Buscar</button>
    </form>

    <div class="chart-container" style="position: relative; height:40vh; width:80vw;">
      <canvas id="myChart" style="width:80vh;"></canvas>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const makeChart = () => {
    const ctx = document.getElementById('myChart');
    return new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Vendas', 'Banhos', 'Pacotes', 'Rações', 'NFC-e', 'Hospedagem', 'Consultas', 'Trocas'],
        datasets: [{
          label: 'Atendimentos realizados em: <?php echo $selectedDate ?>',
          data: [12, 19, 3, 5, 2, 3, 8, 1],
          borderWidth: 1,
          backgroundColor: [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(0, 204, 102, 0.6)',
            'rgba(255, 64, 0, 0.6)',
            'rgba(51, 153, 255, 0.6)'
          ]
        }]
      },
      options: {
        responsive: true,
        resizeDelay: 0,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
          }
        }
      }
    });
  }

  const formListener = () => {
    const form = document.querySelector('.form-for-chart');
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const [year, month, day] = form.date.value.split('-');
      console.log(form.date.value);
      const today = `${day}-${month}-${year}`;
      const newUrl = form.action + today;
      window.location.replace(newUrl);
    });
  }

  makeChart();
  formListener();
</script>