<?php
echo "Hello PHP !!" ;


//phpinfo();

$no = 10;
$name = 'NEW'
?>

<TAble BORDER="1">
    <THead>
        <Tr>
            <Th>#</Th>
            <th>name</th>
        </Tr>
    </THead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Dang</td>
        </tr>
        <?php
        for($i = 2; $i < 5; $i++) {
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?= $name ?></td>
            </tr>
            <?php

        }
        ?>
    </tbody>
</TAble>
