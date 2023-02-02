<?php
/**
 * https://es.stackoverflow.com/questions/168598
 *
 * Cambiar el color de las filas de una tabla según un valor
 *
 */

    $rows = [
        [
            'name'   => 'Foo',
            'status' => 'Pendiente',
        ],
        [
            'name'   => 'Baz',
            'status' => 'Resuelto',
        ],
        [
            'name'   => 'Bart',
            'status' => 'Pendiente',
        ],
        [
            'name'   => 'John Doe',
            'status' => 'Resuelto',
        ],
        [
            'name'   => 'Fake',
            'status' => 'Pendiente',
        ],
    ];

?>

<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid grey;
    }
    th {
        background: lightgrey;
        font-weight: bold;
    }
    th, td {
        min-width: 200px;
        padding  : 9px;
        text-align: center;
    }
    .resuelto {
        background: #1fe039; /* green for solved status */
    }
</style>

<table class="my-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>

<?php

    $row_position = 0;
    $rows_number  = count($rows);

    // each iteration prints a file
    while ($row_position < $rows_number) {

        echo '<tr class="' . $rows[$row_position]['status'] . '">';

        echo '<td>' . $rows[$row_position]['name']   . '</td>';
        echo '<td>' . $rows[$row_position]['status'] . '</td>';

        echo '</tr>';

        $row_position++;
    }

?>

    </tbody>
</table>