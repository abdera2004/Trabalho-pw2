<?php
    require_once '../../model/Conexao.php';
    
    class TelAdmDao{
        public static function insert($teladm){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO teladm (numTelAdm) VALUES (?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $teladm->getNum());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM teladm";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($codTelAdm){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM teladm WHERE codTelAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codTelAdm);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($codTelAdm){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM teladm WHERE codTelAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codTelAdm);
            return  $stmt->execute();
        }
        public static function update($codTelAdm, $teladm){
            $conexao = Conexao::conectar();
            $query = "UPDATE teladm SET 
            numTelAdm = ?
            WHERE codTelAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $teladm->getNum());
            $stmt->bindValue(2, $codTelAdm); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbuser WHERE emailUser = ? and passwordUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>