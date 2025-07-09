<!-- header.php -->
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kispesti Evangélikus Gyülekezet</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  />
</head>
<body>
  <div class="hero">
    <h1>Kispesti Evangélikus Gyülekezet</h1>
    <p>Az Ige Gyülekezete</p>
  </div>

  <nav class="nav" id="myNav">
    <div class="nav-links">
      <a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Nyitólap</a>
      <a href="alkalmak.php" class="<?= basename($_SERVER['PHP_SELF']) == 'alkalmak.php' ? 'active' : '' ?>">Alkalmak</a>
      <a href="galeria.php" class="<?= basename($_SERVER['PHP_SELF']) == 'galeria.php' ? 'active' : '' ?>">Galéria</a>
      <a href="videok.php" class="<?= basename($_SERVER['PHP_SELF']) == 'videok.php' ? 'active' : '' ?>">Videók</a>
      <a href="igehirdetesek.php" class="<?= basename($_SERVER['PHP_SELF']) == 'igehirdetesek.php' ? 'active' : '' ?>">Igehirdetések</a>
      <a href="hitvallas.php" class="<?= basename($_SERVER['PHP_SELF']) == 'hitvallas.php' ? 'active' : '' ?>">Hitvallás</a>
      <a href="napiige.php" class="<?= basename($_SERVER['PHP_SELF']) == 'napiige.php' ? 'active' : '' ?>">Napi ige</a>
      <a href="elerhetoseg.php" class="<?= basename($_SERVER['PHP_SELF']) == 'elerhetoseg.php' ? 'active' : '' ?>">Elérhetőség</a>
      <a href="esperesihivatal.php" class="<?= basename($_SERVER['PHP_SELF']) == 'esperesihivatal.php' ? 'active' : '' ?>">Esperesi hivatal</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <script src="nav.js" defer></script>
  </nav>