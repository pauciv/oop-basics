<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Pill</title>
</head>
<body>

    <h1>OOP Pill</h1>

    <?php

        require_once "./class-backend-web-dev.php";

        ?><h2>WebDev (super)</h2><?php //______________________________________________________________

        $objWebDev1 = new WebDev("Juan Carlos", "Madrid", false);
        echo $objWebDev1->getAbstPersonalData();

        $objWebDev2 = new WebDev("Pepe", "Alicante", true);
        echo $objWebDev2->getAbstPersonalData();

        echo "<h3>- getAbstTechStack</h3>";
        $objWebDev2->setAbstTechStack("Python, MySQL, Django");
        echo $objWebDev2->getAbstTechStack();

        echo "<h3>- getWebDevInfo</h3>";
        $objWebDev2->setWebDevInfo("Linux", "QWERTY");
        echo $objWebDev2->getWebDevInfo();


        ?><h2>BackendWebDev (sub)</h2><?php //_________________________________________________________

        $objBackendWebDev1 = new BackendWebDev("Pau", "Barcelona", true);

        echo "<h3>- getAbstTechStack (overrided)</h3>";
        $objBackendWebDev1->setAbstTechStack("PHP, MySQL, Laravel"); // overrided here.
        echo $objBackendWebDev1->getAbstTechStack();

        echo "<h3>- getWebDevInfo</h3>";
        $objWebDev2->setWebDevInfo("Windows", "Dvorak");
        echo $objWebDev2->getWebDevInfo();

        echo $objBackendWebDev1->getAbstPersonalData(); 

        echo "<h3>- interface methods</h3>";
        echo "Level: ". $objBackendWebDev1->level(2), "<br>";
        echo "Work model: ". $objBackendWebDev1->workModel(2, 3);

    ?>
    
</body>
</html>