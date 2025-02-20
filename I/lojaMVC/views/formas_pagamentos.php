<?php
	require_once "header.php";
?>
  <style>
    .hidden {
      display: none;
    }
    .card-icons img {
      width: 60px;
     
	}
	 .form-container {
      min-height: 50vh;
      display: flex;
      justify-content: center;
      align-items: center;
	  border:2px solid black;
    }
	 .form-check-input {
    transform: scale(1.0); /* Aumenta o tamanho */
    margin-right: 10px; /* Ajusta o espaçamento */
  }
  </style>

  <div class="container">
  
    <h1 class="text-center mb-4">Escolha sua Forma de Pagamento</h1>

    <div class="form-container">
    <form action="/lojamvc/finalizar_venda" method="post">
      <div class="mb-3" style="font-weight:bold">
        
        <div class="form-check">
          <input class="form-check-input" type="radio" name="forma_pagamento" id="pix" value="Pix">
          <label class="form-check-label fs-5" for="pix">PIX</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao" value="Cartão de Crédito">
          <label class="form-check-label fs-5" for="cartao">Cartão de Crédito</label>
		  
        </div>
		<div style="color:red;font-size:11px;"><?php echo $msg; ?></div>
      </div>

      <!-- Detalhes do PIX -->
      <div id="dadosPix" class="hidden">
        <h5>Pagamento via PIX</h5>
        <p>Escaneie o QR Code abaixo para realizar o pagamento:</p>
        <img  src="imagens/qrcode.png" alt="QR Code PIX" class="img-fluid">
      </div>

      <!-- Detalhes do Cartão de Crédito -->
      <div id="dadosCartao" class="hidden">
        <h5>Pagamento via Cartão de Crédito</h5>
        <div class="mb-3">
          <label for="numero" class="form-label">Número do Cartão</label>
          <input type="text" class="form-control" id="numero" placeholder="0000 0000 0000 0000">
        </div>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome no Cartão</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome como está no cartão">
        </div>
        <div class="mb-3">
          <label for="data_validade" class="form-label">Validade</label>
          <input type="text" class="form-control" id="data_validade" placeholder="MM/AA">
        </div>
        <div class="mb-3">
          <label for="cvv" class="form-label">CVV</label>
          <input type="text" class="form-control" id="cvv" placeholder="123">
        </div>
        <div class="mb-3">
          <label for="parcelas" class="form-label">Parcelamento</label>
          <select class="form-select" id="parcelas" name="parcelas">
            <option selected>Escolha o número de parcelas</option>
            <option value="1">1x sem juros</option>
            <option value="2">2x sem juros</option>
            <option value="3">3x sem juros</option>
            <option value="6">6x sem juros</option>
            <option value="12">12x sem juros</option>
          </select>
        </div>
      </div>

      <!-- Botão de Submissão -->
      <input type="submit" class="btn btn-primary mt-3" value="Confirmar Pagamento">

      <!-- Bandeiras de Cartão -->
      <div class="card-icons mt-4">
        <img src="imagens/visa.png" alt="Visa" title="Visa">
        <img src="imagens/master.jpg" alt="MasterCard" title="MasterCard">
        <img src="imagens/elo.png" alt="American Express" title="American Express">
      </div>
    </form>
  </div>
  </div>
   <script>
    document.addEventListener('DOMContentLoaded', () => {
      const pix = document.getElementById('pix');
      const cartao = document.getElementById('cartao');
      const dadosPix = document.getElementById('dadosPix');
      const dadosCartao = document.getElementById('dadosCartao');
      

      pix.addEventListener('change', () => {
        if (pix.checked) {
          dadosPix.classList.remove('hidden');
          dadosCartao.classList.add('hidden');
          
        }
      });

      cartao.addEventListener('change', () => {
        if (cartao.checked) {
          dadosCartao.classList.remove('hidden');
          dadosPix.classList.add('hidden');
        }
      });
    });
  </script>
</body>
</html>

