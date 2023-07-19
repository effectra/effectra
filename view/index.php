<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>Effectra Framework</title>
</head>
<style>
  *,
  *::before,
  *::after {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f2f2f2;
  }

  #root {
    overflow-x: hidden;
    max-width: 1400px;
  }

  a {
    text-decoration: none;
  }

  .app {
    margin: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .app h1 {
    text-align: center;
    margin: 30px;
  }

  .app span {
    color: orangered;
  }
</style>

<body>
  <div id="root">
    <div class="app">
      <img src="effectra.png" height="100px" alt="Effectra">
      <h1>Welcome to <span>Effectra</span> Framework</h1>
    </div>
  </div>
</body>

</html>