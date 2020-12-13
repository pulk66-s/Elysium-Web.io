<?php
    $servername = 'eu-cdbr-west-02.cleardb.net';
    $username = 'bac1b7d2441b26';
    $password = '76fe7eae';
    $db_name = "heroku_9b6fd0f2559f9f2";
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error) die('Erreur : ' .$conn->connect_error);
    mysqli_select_db($conn, $db_name);
    
    $search = $conn->query("SELECT * FROM card_list");
    $nb = 0;
    while ($row = mysqli_fetch_assoc($search)) {
        if ($nb % 3 == 0)
            echo("<div>");
        echo("<table>");
        if ($row["Url"] != NULL) {
            echo("<img style=\"width:100px; height:100px\" src=\"".$row["Url"]."\">");
        }

        echo("<thead>");
        echo("<th colspan=\"4\">ID : ".$row["Id"]." </th>");
        echo("</thead>");

        echo("<tr>");
        echo("<th>Mana : </th>");
        echo("<td>".$row["Mana"]."</td>");
        echo("<th>ATK : </th>");
        echo("<td>".$row["Attack"]."</td>");
        echo("</tr>");

        echo("<tr>");
        echo("<th>PV : </th>");
        echo("<td>".$row["Health"]."</td>");
        echo("<th>Price : </th>");
        echo("<td>".$row["Price"]."</td>");
        echo("</tr>");
        
        echo("<tr>");
        echo("<th>Rarity : </th>");
        echo("<td>".$row["Rarity"]."</td>");
        echo("<th>Dropable : </th>");
        echo("<td>".$row["Dropable"]."</td>");
        echo("</tr>");
                
        echo("<tfoot><th colspan=\"4\">Desc : ".$row["Description"]."</th></tfoot>");
        echo("</table>");

        if ($nb % 3 == 2)
            echo("</div>");

    }
    mysqli_close($conn);
?>