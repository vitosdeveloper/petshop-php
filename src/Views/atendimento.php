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