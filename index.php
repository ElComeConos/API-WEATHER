<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clima agora!</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css" />
    <script src="js/scripts.js" defer></script>
  </head>
  <body>
    <div class="container">
      <div class="form">
        <h3>Confira o clima de uma cidade:</h3>
        <div class="form-input-container">
          <input
            type="text"
            placeholder="Digite o nome da cidade"
            id="city-input"
          />
          <button id="search">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </div>
      <div id="weather-data" class="hide">
        <h2>
          <i class="fa-solid fa-location-dot"></i>
          <span id="city"></span>
          <img id="country" src="" alt="Bandeira do País" />
        </h2>
        <p id="temperature"><span></span>&deg;C</p>
        <div id="description-container">
          <p id="description"></p>
          <img id="weather-icon" src="" alt="Condições atuais">
        </div>
        <div id="details-container">
          <p id="umidity">
            <i class="fa-solid fa-droplet"></i>
            <span></span>
          </p>
          <p id="wind">
            <i class="fa-solid fa-wind"></i>
            <span></span>
          </p>
        </div>
      </div>
      <div id="error-message" class="hide">
        <p>Não foi possível encontrar o clima de uma cidade com este nome.</p>
      </div>
      <div id="loader" class="hide">
        <i class="fa-solid fa-spinner"></i>
      </div>
      <div id="suggestions">
        <button id="viena">Viena</button>
        <button id="copenhague">Copenhague</button>
        <button id="zurique">Zurique</button>
        <button id="vancouver">Vancouver</button>
        <button id="genebra">Genebra</button>
        <button id="frankfurt">Frankfurt</button>
        <button id="osaka">Osaka</button>
        <button id="maceio">Maceió</button>
      </div>
    </div>

</body>
</html>