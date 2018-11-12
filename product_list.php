<!DOCTYPE html>
<html>

    <?php require 'header.php'; ?>

<body>
    
    <?php require 'navbar_admin.php'; ?>

        <h2>Productos</h2>
            <ul>
                <?php foreach($productos as $producto): ?>
                    <li>
                        <a href="perfil_product.php?id=<?= $producto['id']?>"><?= $producto['title']?></a>
                    </li>
                <?php endforeach;?>
            </ul>

    <?php require 'footer.php'; ?>
    <?php require 'script.php'; ?>

</body>
</html>