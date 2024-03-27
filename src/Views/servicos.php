<h1>Serviços</h1>

<div class="servicos-buttons-container">
  <a href="#">
    <button>Gravar</button>
  </a>
  <a href="#">
    <button>Novo</button>
  </a>
  <a href="#">
    <button>Receber</button>
  </a>
  <a href="#">
    <button>Imprimir</button>
  </a>
  <a href="/historico">
    <button>Histórico</button>
  </a>
</div>

<div class="servicos-container">

  <div class="section-container">
    <form action="" class="servicos-cliente-form">
      <h3>Cliente</h3>

      <label for="tab">
        <span>tab</span>
        <input maxlength="3" size="3" type="text" name="tab" id="tab">
        <button>🔎</button>
      </label>
      <label for="telefone">
        <span>Telefone</span>
        <input type="text" name="telefone" id="telefone" placeholder="Sem telefone">
      </label>
      <label for="cpfCnpj">
        <span>CPF / CNPJ</span>
        <input type="text" name="cpfCnpj" id="cpfCnpj">
      </label>
      <label for="nome">
        <span>Tutor/Cliente</span>
        <input type="text" name="nome" id="nome">
      </label>
    </form>
  </div>

  <div class="section-container">
    <h3>Serviço</h3>

    <form action="" class="servicos-form">
      <label for="descServico">
        <span>Descrição do serviço</span>
        <select type="text" name="descServico" id="descServico">
          <option value="banhoPacote">Banho - Pacote</option>
        </select>
        <button>🔎</button>
      </label>
      <label for="valor">
        <span>valor</span>
        <input type="number" name="valor" id="valor" min="1" value="0.00">
      </label>
      <label for="horaEntrada">
        <span>Hora de entrada</span>
        <input type="data" name="horaEntrada" id="horaEntrada" placeholder="hh:mm:ss">
      </label>
      <label for="petNome">
        <span>Pet</span>
        <input type="text" name="petNome" id="petNome">
        <button>🔎</button>
        <button>Novo</button>
      </label>
      <label for="especie">
        <span>Espécie</span>
        <select type="text" name="especie" id="especie">
          <option value="canina">Canina</option>
        </select>
      </label>
      <label for="raca">
        <span>Raça</span>
        <select type="text" name="raca" id="raca">
          <option value="shihtzu">Shihtzu</option>
        </select>
      </label>
      <label for="sexo">
        <span>Sexo</span>
        <select type="text" name="sexo" id="sexo">
          <option value="femea">Fêmea</option>
        </select>
      </label>
      <label for="alergias">
        <span>Alergias</span>
        <select type="text" name="alergias" id="alergias">
          <option value=""></option>
        </select>
      </label>
      <label for="enfeites">
        <span>Enfeites</span>
        <select type="text" name="enfeites" id="enfeites">
          <option value="adesivo">Adesivo</option>
        </select>
      </label>
      <label for="atendidoPor">
        <span>Atendido por</span>
        <select type="text" name="atendidoPor" id="atendidoPor">
          <option value="vitoria">Vitória</option>
        </select>
      </label>
    </form>
  </div>

  <div class="section-container">
    <form action="" method="post" class="servicos-form">
      <div style="display:flex;">
        <label for="acompanha">
          <span>Acompanha
            <small>(Coleira/Guia/Peitoral/Enforcador/Outros)</small>
          </span>
          <textarea name="acompanha" id="acompanha" cols="30" rows="10"></textarea>
        </label>
        <label for="observacoes">
          <span>Observações importantes
            <small>(interno)</small>
          </span>
          <textarea name="observacoes" id="observacoes" cols="30" rows="10"></textarea>
        </label>
      </div>
      <label for="executadoPor">
        <span>Executado por</span>
        <select type="text" name="executadoPor" id="executadoPor">
          <option value="vitoria">Vitória</option>
        </select>
      </label>
      <label for="statusServico">
        <span>Status do serviço</span>
        <select type="text" name="statusServico" id="statusServico">
          <option value="pronto">pronto</option>
        </select>
      </label>
      <label for="buscareentregar">
        <input type="checkbox" value="pronto" name="buscareentregar" id="buscareentregar" />
        <span>Buscar e entregar</span>
      </label>

      <div class="section-container">

        <form action="" method="post" class="servicos-form">
          <p>
            <small>Agendar contato pós venda para</small>
          </p>

          <label for="agendar1">
            <span>Quantidade de vezes: </span>
            <input type="text" name="agendar1" id="agendar1" />
          </label>

          <label for="agendar1">
            <span>A cada: </span>
            <input type="text" name="agendar1" id="agendar1" />
            <span>dias</span>
          </label>
          <button>Agendar</button>
        </form>
      </div>
    </form>
  </div>
</div>