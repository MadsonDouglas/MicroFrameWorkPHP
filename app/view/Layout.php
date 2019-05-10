<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Vitoria">
    <meta name="Decription" content="<?php echo $this->getDescription(); ?>">
    <meta name="Keywords" content="<?php echo $this->getKeywords(); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $this->addHead(); ?>
    <title><?php echo $this->getTitle(); ?></title>

</head>
<body>
    <div class="header">
        <?php echo $this->addHeader() ?>
    </div>
    <div class="main">
        <?php echo $this->addMain() ?>
    </div>
    <div class="footer">
        <?php echo $this->addFooter() ?>
    </div>

    <?php echo $this->addJS() ?>
</body>
</html>