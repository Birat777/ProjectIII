<?php
    include_once('../Database.php');
    class info{
       
        public function __construct(){
            $this->connection = new Database();
            $this->conn = $this->connection->getConnection();
        }

        public function create($data){
            $result = $this->conn->prepare ("Insert into medicine (m_name,m_desc,m_mfd,m_exp,m_perprice,m_quantity) Values (:mname,:mdesc,:mmfd,:mexp,:mperprice,:mquantity)");
            $result->bindParam(':mname',$data['mname']);
            $result->bindParam(':mdesc',$data['mdesc']);
            $result->bindParam(':mmfd',$data['mmfd']);
            $result->bindParam(':mexp',$data['mexp']);
            $result->bindParam(':mperprice',$data['mperprice']);
            $result->bindParam(':mquantity',$data['mquantity']);
            if($result->execute()){
            return true;
            }else{
            return false;
            }
        }

        public function appointmentlist()
        {
            $result = $this->conn->prepare("select * from medicine where deleted_at is null");
            $result->execute();
            return $result->fetchAll();
        }

        public function getRecordById($id)
        {
            $result = $this->conn->prepare("select * from medicine where id = :id");
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
        }

        public function update($data, $id)
        {
            $result = $this->conn->prepare("update medicine set m_name=:mname,m_desc=:mdesc,m_mfd=:mmfd,m_exp=:mexp,m_perprice=:mperprice,m_quantity=:mquantity where id = :id");
        
            $result->bindParam(':mname',$data['mname']);
            $result->bindParam(':mdesc',$data['mdesc']);
            $result->bindParam(':mmfd',$data['mmfd']);
            $result->bindParam(':mexp',$data['mexp']);
            $result->bindParam(':mperprice',$data['mperprice']);
            $result->bindParam(':mquantity',$data['mquantity']);
            $result->bindParam(':id', $id);
            if($result->execute()){
                return true;
            }else{
                return false;
            }
        }


        public function delete($id){
            $result = $this->conn->prepare("update medicine set deleted_at = :date where id = :id");
            $result->bindParam(':date', date('Y-m-d H:i:s'));
            $result->bindParam(':id', $id);
            if($result->execute()){
                return true;
            }else{
                return false;
            }
        }



    }
?>