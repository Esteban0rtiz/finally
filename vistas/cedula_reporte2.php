<!DOCTYPE html>
<html>
<head>
  <title>Generar Reporte</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      border-radius: 4px;
      margin-top: 100px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #666;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    .button-container {
      text-align: center;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Generar Reporte</h1>
    <form method="post" action="./vistas/repoorte_cedula2.php">
      <label for="cedula">Número de Cédula:</label>
      <input type="text" name="cedula" id="cedula" required>
      <div class="button-container">
        <button type="submit">Generar</button>
      </div>
    </form>
  </div>
</body>
</html>
