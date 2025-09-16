<?php 
include_once "db.php";

// PDO com PHP (Classes PHP)
class Usuario{
    // atributos
    private $id;
    private $nome;
    private $email;
    private $datacad;
    private $pdo;

    public function __construct(){
        $this-> pdo = getConnection(); // Realiza a conexão durante a criação da instância (objeto)
    }
    
    // Getters e Setters - Propriedades (C#) ou métodos de acesso das linguagens de prog.
    public function getId(){
        return $this->id; // não vamos criar setId??? porque o banco é quem atribui (autoincrements)
    }

    public function getNome(){
        return $this->nome;
    }    
    public function setNome(string $nome){
        $this->nome = $nome;
    }

     public function getEmail(){
       return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getDataCad(){ // não vamos criar setDataCad? porque o banco é quem atribui (Default)
        return $this->datacad;
    }

    // inserindo um usuario
    public function inserir(){
        $sql = "insert into usuarios (nome, email, datacad) values (:nome, :email, default)";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":nome", $this->nome); // (C#) cmd.Paramentrs.AddWithValue("spnome", Nome);
        $cmd ->bindValue(":email", $this->email);
        $cmd->execute();
        if($cmd->execute()){
            $this->id = $this->pdo->lastInsertId();
            return true;
        }
        return false;
    }

    //Atualizar usuario
    public function atualizar(int $idUpdate){
        if(!$this->id) return false;

        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":nome", $this->nome);
        $cmd->bindValue(":email", $this->email);
        $cmd->bindValue(":id", $this-> id, PDO::PARAM_INT);

        return $cmd->execute();
    }

    // Remover usuario
    public function exluir(){
        if(!$this->id) return false;

        $sql = "DELETE FROM usuarios WHERE id = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":id", $this->id, PDO::PARAM_INT);

        return $cmd->execute();
    }

    // listando usuarios
    public function listrar(): array{
        $cmd = $this -> pdo -> query("select * from usuarios order by id desc");
        return $cmd->fetchAll(PDO::FETCH_ASSOC);
    }

    // buscar usuarios por id
    public function buscarPorId(int $id){
        $sql = "select * from usuarios where id = :id";
        $cmd = $this-> pdo->prepare($sql);
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        if($cmd->rowCount() > 0){
            $dados = $cmd ->fetch(PDO::FETCH_ASSOC);
            $this-> id = $dados['id'];
            $this->nome = $dados['nome'];
            $this->email = $dados['email'];
            $this->datacad = $dados['datacad'];
            return true;
        }
        return false;
    }
}

?>

