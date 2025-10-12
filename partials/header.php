<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="imagens/profile-pic.png" type="image/png">
    <title><?php echo $pageTitle; ?></title>
</head>

<body id="home">
    <div class="background-blur"></div>
    <nav>
        <div class="nav-logo">
            <a href="index.php">
                <img src="imagens/profile-pic.png" alt="Logo do portfolio">
            </a>
        </div>

        <?php if (isset($isSimpleHeader) && $isSimpleHeader): ?>
            <ul class="nav-links">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link"><a href="#about">Mais</a></li>
            </ul>
        <?php else: ?>
            <ul class="nav-links">
                <li class="link"><a href="#home">Home</a></li>
                <li class="link"><a href="#features">Recursos</a></li>
                <li class="link"><a href="#experience">Experiências</a></li>
                <li class="link"><a href="#about">Mais</a></li>
            </ul>
            <div class="buttons">
                <a href="https://drive.google.com/file/d/1njEyLjUHcyRWe37ZsqAgtpF21RKtkDY4/view?usp=sharing" target="_blank" rel="noopener noreferrer">
                    <button class="btn">Baixar meu currículo</button>
                </a>
                <a href="https://wa.me/5512992238972" target="_blank" rel="noopener noreferrer">
                    <button class="btn">Cel. (12) 99223-8972</button>
                </a>
            </div>
        <?php endif; ?>
    </nav>