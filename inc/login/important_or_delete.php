<?php
#enables editing events and important boolean
?>

<div class="container-fluid">
    <h5>Mark important or delete:</h5>
    <?php display_events();?>
    <br>
</div>

//UPDATE
if($_GET['increase']){

    $increase_query = 'UPDATE `pisici` SET `fluffiness` = `fluffiness`+1 WHERE id = ?';
    $stmt = $pdo->prepare($increase_query);
    $stmt->execute([$_GET['increase']]);
    
}

$stmt = $pdo->query('SELECT * FROM pisici');

//FORM for INSERT
echo '<form method="POST">';
echo '<input type="text" name="name" placeholder="name"/> ';
echo '<input type="text" name="race" placeholder="race"/> ';
echo '<input type="number" name="fluffiness" placeholder="flufiness"/> ';
echo '<input type="submit" name="submit"/> ';
echo '</form>';

echo '<table>';
echo '<thead>';
echo '<th>Name</th><th>Race</th><th>Fluffiness</th><th>Fluffier</th><th>Delete</th>';
echo '</thead>';
echo '<tbody>';

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $increase = '<a href="?increase='.$row['id'].'">+</a>';
    $delete = '<a href="?delete='.$row['id'].'">x</a>';

    echo '<tr>';
    // echo $row['name'] .' who is a ' . $row['race'] . ' is ' . $row['fluffiness'] . ' % fluffy.'; 
    echo '<td>' . $row['name'] .'</td>';
    echo '<td>' . $row['race'] . '</td>';
    echo '<td>' . $row['fluffiness'] . '%</td>';
    echo '<td>' . $increase . '</td>';
    echo '<td>' . $delete . '</td>'; 
    echo '</tr>';

} 

echo '</tbody>';
echo '</table>';
