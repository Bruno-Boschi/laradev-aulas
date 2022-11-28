<h1>Listagem de produtos</h1>

<p><a href="/imoveis/novo">Cadastrar novo imóvel</a></p>

<?php if (!empty($properties)) {
    echo '<table>';

    echo '<tr>
                <td>Titulo</td>
                <td>Valor de locação</td>
                <td>Valor de compra</td>
            </tr>';

    foreach ($properties as $property) {
        echo "<tr>
                <td>{$property->title}</td>
                <td>" .
            number_format($property->rental_price, 2, ',', '.') .
            "</td>
                 <td>" .
            number_format($property->sale_price, 2, ',', '.') .
            "</td>
            </tr>";
    }

    echo '</table>';
}
