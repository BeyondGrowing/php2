<!DOCTYPE html>
<html>
    <head>
        <title>Pagina caricamento Dati</title>
    </head>
    <body>
        <table border="0">
            <tr>
                <td align="center"> Inserisci i dati richiesti</td>
            </tr>
            <tr>
                <td>
                    <table>
                        <form method="post" action="input.php">
                            <tr>
                                <td>ID_univoco</td>
                                <td><input type="int" name="id" size="4"></td>
                            </tr>
                            <tr>
                                <td>Nome</td>
                                <td><input type="text" name="Nome" size="20"></td>
                            </tr>
                            <tr>
                                <td>Cognome</td>
                                <td><input type="text" name="Cognome" size="20"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><input type="submit" name="submit" value="Invio"></td>
                            </tr>
                    </table>
                </td>
            </tr>
        </table>
        <?php
        
        echo $_POST["nome"];

        ?>
    </body>
</html>
