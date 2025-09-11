<?php 

try{
    $pdo = new PDO("mysql:host=10.91.47.131; dbname=modelophp_db","root", "202720");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão realizada com sucesso! <br>";

    //Inerindo usuário
    $stmt = $pdo-> prepare("Insert into usuarios (nome, email, datacad)
    values (:nome, :email, default)");
    
    $stmt->execute([
        ":nome"=>"Maria das Couves",
        ":email"=> "mariacouves@gmail.com"
    ]);
    
    

} catch(PDOException $e){
    if(strpos($e->getmessage(), "Duplicate") !== false){
        echo "Email já cadastrado no banco!";
}else{
    echo "Erro: ". $e->getMessage();
}
echo "Erro: ". $e->getMessage();
}

?>

