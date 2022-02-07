<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $connessione = new mysqli('localhost', 'root','', '5f_2122');
    if ($connessione -> error){
        die('connessione non riuscita'.$connessione -> connect_error);
    }

    $id = $_POST['id'];
    $nome = $_POST['Nome'];
    $cognome = $_POST['Cognome'];
    $toinsert = "INSERT INTO aluni (id, Nome, Cognome)
                  VALUES ('$id', '$nome', '$cognome')";
    $result = mysqli_query($connessione, $toinsert);
    if($result){
        echo("<br> inserimento avvenuto con successo");
    }
    else{
        echo("<br> inserimento fallito");
    }
    
    ?>
</body>
</html>