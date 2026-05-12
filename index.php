<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Copa do Mundo</title>
<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, #009c3b, #ffdf00);
    margin: 0;
    padding: 20px;
}

form{
    background-color: white;
    max-width: 900px;
    margin: auto;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
}

h1{
    text-align: center;
    color: white;
    font-size: 40px;
    text-shadow: 2px 2px 5px black;
}

.pergunta{
    background-color: #f5f5f5;
    padding: 15px;
    margin-bottom: 15px;
    border-left: 6px solid #009c3b;
    border-radius: 10px;
}

input[type="radio"]{
    margin-right: 8px;
    cursor: pointer;
}

input[type="submit"]{
    width: 100%;
    padding: 15px;
    background-color: #009c3b;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 18px;
    cursor: pointer;
    transition: 0.3s;
}

input[type="submit"]:hover{
    background-color: #007a2f;
}

</style>


    
</head>
<body>
    <h1>⚽ QUIZ COPA DO MUNDO ⚽</h1>
<form action="" method="POST">




<?php
$pergunta[1][0] = "1. Qual país venceu a primeira Copa do Mundo da FIFA, em 1930?<br>";
$pergunta[1][1] = "<input type='radio' name='q1' value='1'>Brasil";
$pergunta[1][2] = "<input type='radio' name='q1' value='2'>Alemanha";
$pergunta[1][3] = "<input type='radio' name='q1' value='3'>Uruguai";
$pergunta[1][4] = "<input type='radio' name='q1' value='4'>Itália<br>";
$pergunta[1][5] = "3";

$pergunta[2][0] = "2. Qual seleção tem mais títulos de Copa do Mundo?<br>";
$pergunta[2][1] = "<input type='radio' name='q2' value='1'>Alemanha";
$pergunta[2][2] = "<input type='radio' name='q2' value='2'>Itália";
$pergunta[2][3] = "<input type='radio' name='q2' value='3'>Argentina";
$pergunta[2][4] = "<input type='radio' name='q2' value='4'>Brasil<br>";
$pergunta[2][5] = "4";

$pergunta[3][0] = "3. Em que país foi realizada a Copa do Mundo de 2014?<br>";
$pergunta[3][1] = "<input type='radio' name='q3' value='1'>África do Sul";
$pergunta[3][2] = "<input type='radio' name='q3' value='2'>Brasil";
$pergunta[3][3] = "<input type='radio' name='q3' value='3'>Rússia";
$pergunta[3][4] = "<input type='radio' name='q3' value='4'>Catar<br>";
$pergunta[3][5] = "2";

$pergunta[4][0] = "4. Quem foi o campeão da Copa do Mundo de 2022?<br>";
$pergunta[4][1] = "<input type='radio' name='q4' value='1'>França";
$pergunta[4][2] = "<input type='radio' name='q4' value='2'>Brasil";
$pergunta[4][3] = "<input type='radio' name='q4' value='3'>Argentina";
$pergunta[4][4] = "<input type='radio' name='q4' value='4'>Croácia<br>";
$pergunta[4][5] = "3";

$pergunta[5][0] = "5. Qual jogador é conhecido como “Rei do Futebol?<br>";
$pergunta[5][1] = "<input type='radio' name='q5' value='1'>Messi";
$pergunta[5][2] = "<input type='radio' name='q5' value='2'>Cristiano Ronaldo";
$pergunta[5][3] = "<input type='radio' name='q5' value='3'>Pelé";
$pergunta[5][4] = "<input type='radio' name='q5' value='4'>Maradona<br>";
$pergunta[5][5] = "3";

$pergunta[6][0] = "6. Qual seleção venceu a Copa do Mundo de 2018?<br>";
$pergunta[6][1] = "<input type='radio' name='q6' value='1'>Alemanha";
$pergunta[6][2] = "<input type='radio' name='q6' value='2'>França";
$pergunta[6][3] = "<input type='radio' name='q6' value='3'>Argentina";
$pergunta[6][4] = "<input type='radio' name='q6' value='4'>Espanha<br>";
$pergunta[6][5] = "2";

$pergunta[7][0] = "7. Quantos títulos mundiais a Itália possui?<br>";
$pergunta[7][1] = "<input type='radio' name='q7' value='1'>2";
$pergunta[7][2] = "<input type='radio' name='q7' value='2'>3";
$pergunta[7][3] = "<input type='radio' name='q7' value='3'>4";
$pergunta[7][4] = "<input type='radio' name='q7' value='4'>5<br>";
$pergunta[7][5] = "3";

$pergunta[8][0] = "8. Qual país sediou a Copa do Mundo de 2010?<br>";
$pergunta[8][1] = "<input type='radio' name='q8' value='1'>Japão";
$pergunta[8][2] = "<input type='radio' name='q8' value='2'>México";
$pergunta[8][3] = "<input type='radio' name='q8' value='3'>Estados Unidos";
$pergunta[8][4] = "<input type='radio' name='q8' value='4'>África do Sul<br>";
$pergunta[8][5] = "4";

$pergunta[9][0] = "9. Quem marcou o gol do título da Alemanha na final da Copa de 2014?<br>";
$pergunta[9][1] = "<input type='radio' name='q9' value='1'>Thomas Müller";
$pergunta[9][2] = "<input type='radio' name='q9' value='2'>Miroslav Klose";
$pergunta[9][3] = "<input type='radio' name='q9' value='3'>Mario Götze  ";
$pergunta[9][4] = "<input type='radio' name='q9' value='4'>Toni Kroos<br>";
$pergunta[9][5] = "3";

$pergunta[10][0] = "10. Qual seleção ficou conhecida como “La Albiceleste?<br>";
$pergunta[10][1] = "<input type='radio' name='q10' value='1'>Espanha";
$pergunta[10][2] = "<input type='radio' name='q10' value='2'>Argentina";
$pergunta[10][3] = "<input type='radio' name='q10' value='3'>Uruguai";
$pergunta[10][4] = "<input type='radio' name='q10' value='4'>Portugal<br>";
$pergunta[10][5] = "2";



for($i=1;$i<=10;$i++){ 
    echo "<div class='pergunta'>"; 
    for($j=0;$j<=4;$j++)
        { echo $pergunta[$i][$j] . '<br>'; 
    }
     echo "</div>"; 
}



for($i=1;$i<=10;$i++){
    $resp[$i] = $_POST['q'.$i] ?? null;


    if($resp[$i] == $pergunta[$i][5]){
        echo "Acertou!<br>";
    }
    else{
        echo "Errou!<br>";

    }
}




?>
<input type="submit" value='Enviar'>
</form>
    
</body>
</html>