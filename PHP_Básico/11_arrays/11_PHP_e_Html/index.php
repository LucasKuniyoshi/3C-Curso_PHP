<?php
    $pessoas = [
        'Lucas' => 22,
        'alexia' => 24,
        'Pedro' => 32,
        'Arthur' => 17
    ];    
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td> <!-- php shorthand-->
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Ex2 -->
<?php
    $ranking = [
        "Matheus" => 200,
        "João" => 54,
        "Pedro" => 444,
        "Maria" => 239,
        "Joana" => 123,
        "Henrique" => 12
    ];

    arsort($ranking);
?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>
</ol>