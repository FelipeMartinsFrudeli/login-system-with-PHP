<!doctype html>
<meta charset="utf-8"/>
<head>
<link href="stylesheet" type="text/style.css"/>

</head>
<body>

        <form method="GET" action="login.php" >  
            
<br/>  
<br/> <h3>Nome:</h3>
<br/>           
            <input type='text' name="nome" id="nome" min="4" max="10" required/>
<br/> 
<br/> <h3>Senha:</h3>
<br/>           
            <input type='password' name="senha" id="senha" min="4" max="10" required/>

<br/>
<br/>

<input type="submit" value="Verificar">

</body>
</html>

<?php

$nome = $_GET['nome'];
$senha = $_GET['senha'];


if($nome == 'nome' && $senha == 'senha'){
        header("Location: http://localhost/site/index.html");
}

?>