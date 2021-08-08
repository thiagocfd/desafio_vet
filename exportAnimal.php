<?php
    if(isset($_POST['exportAnimal']))
    {
        $connect = mysqli_connect("localhost", "root", "admin123", "complicadovet");
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=animal.csv');
        $output = fopen ("php://output", "w");
        fputcsv($output, array('Id', 'IdCliente', 'Nome', 'Raca', 'Especie', 'HistoricoClinico', 'Nascimento'));
        $query = "SELECT * from Animal ORDER BY id DESC";
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            fputcsv($output, $row);
        }
        fclose($output);
    }
?>