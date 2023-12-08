<?php
    require_once 'C:\xampp\htdocs\oi\Trabalho-pw2\model\Conexao.php';
    
    class AdmDao{
        public static function insert($adm){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbadm (nomeAdm, sobrenomeAdm, cpfAdm, nascAdm, emailAdm, passwordAdm, imagemAdm, tokenAdm) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $adm->getNome());
            $stmt->bindValue(2, $adm->getSobrenome());
            $stmt->bindValue(3, $adm->getCpf());
            $stmt->bindValue(4, $adm->getNasc());
            $stmt->bindValue(5, $adm->getEmail());
            $stmt->bindValue(6, $adm->getPassword());
            $stmt->bindValue(7, $adm->getImagem());
            $stmt->bindValue(8, $adm->getToken());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdm";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($idAdm){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdm WHERE idAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idAdm);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($idAdm){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbAdm WHERE idAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $idAdm);
            return  $stmt->execute();
        }
        public static function update($idAdm, $adm){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbAdm SET 
            nomeAdm = ?, 
            sobrenomeAdm = ?, 
            cpAdm = ?,
            nascAdm = ?, 
            emailAdm = ?, 
            passwordAdm = ?, 
            imagemAdm = ?, 
            tokenAdm = ? 
            WHERE idAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $adm->getNome());
            $stmt->bindValue(2, $adm->getSobrenome());
            $stmt->bindValue(3, $adm->getCPF());
            $stmt->bindValue(4, $adm->getNasc());
            $stmt->bindValue(5, $adm->getEmail());
            $stmt->bindValue(6, $adm->getPassword());
            $stmt->bindValue(7, $adm->getImagem());
            $stmt->bindValue(8, $adm->getToken());
            $stmt->bindValue(9, $idAdm); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbadm WHERE emailAdm = ? and passwordAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>