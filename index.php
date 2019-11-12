<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Liste des étudiants de la classe DSI21 ISET BIZERTE 2019</h1>
        </div>
        <a class="btn btn-primary" href="create.php">Nouvel étudiant</a>

        <table class="table table-hover">
            <tr>
                <td>Id</td>
                <td>Fistname</td>
                <td>Lastname</td>
                <td>E-mail</td>
                <td>Phone</td>
                <td>Operations</td>
            </tr>
            <?php 
                include 'dbconnexion.php';
                $rep = $db_cnx->prepare('SELECT * FROM students'); 
                $rep->execute();
                while ($data = $rep->fetch()) 
                {
                    echo '<tr>';
                    echo '<td>'.$data['id'].'</td>';
                    echo '<td>'.$data['firstname'].'</td>';
                    echo '<td>'.$data['lastname'].'</td>';
                    echo '<td>'.$data['email'].'</td>';
                    echo '<td>'.$data['phone'].'</td>';
                    $id_pass=$data['id'];
                    echo '<td><a href="edit.php?id='.$data['id'].'">Editer</a>        ';  
                    echo '<a href="delete.php?id='.$data['id'].'">Supprimer</a></td>';  
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>