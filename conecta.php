<?php 

try {
    $pdo = new PDO("mysql:host=10.91.47.129;dbname=modelophp_db","root", "202720");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso!<br>";

    // inserindo usuário
    $stmt = $pdo->prepare("insert into usuarios (nome, email, datacad)
    values (:nome, :email, default)");
    $stmt->execute([
        ":nome" => "Maria das Couves Silva",
        ":email" => "mariacouves@gmail.com.br" 
    ]); 


} catch (PDOException $e) {
    if(strpos($e->getmessage(),"Duplicate") !== false){
        echo "email já cadastrado no banco!";
    }else{
        echo "Erro: ". $e->getMessage();
    }
   
}

?>