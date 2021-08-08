<?php
    if(isset($_POST['exportCliente']))
    {
        $connect = mysqli_connect("localhost", "root", "admin123", "complicadovet");
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=cliente.csv');
        $output = fopen ("php://output", "w");
        fputcsv($output, array('Id', 'Nome', 'Telefone1', 'Telefone2', 'Email'));
        $query = "SELECT * from cliente ORDER BY id DESC";
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_assoc($result))
        {
            fputcsv($output, $row);
        }
        fclose($output);
    }
?>