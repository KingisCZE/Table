<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="StyleSheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        require 'table.php';
        $table = new Table();
        $table->setHeader(array( 1 => 'Name', 'Surname', 'Number of posts'));
        $table->addRow(array( 1 => 'Andrew', 'Grey', 367));
        $table->addRow(array( 1 => 'Jack', 'Trafford', 29));
        $table->addRow(array( 1 => 'Peter', 'Howard', 842));
        $table->addRow(array( 1 => 'Oscar', 'Newton', 112));
        $table->addRow(array( 1 => 'Ben', 'Jervis', 1307));
        $table->addRow(array( 1 => 'Mat', 'Rolland', 85), 3);
        $table->addColumn('Premium', array( 1 => 'Yes', 'No', 'Yes', 'Yes', 'No', 'Yes'), 3);
        $table->Replace(5, 3, 'Yes');
        echo $table;
        ?>
    </body>
</html>