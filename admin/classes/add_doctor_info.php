<?php
    include_once('../Database.php');
    class info{
       
        public function __construct(){
            $this->connection = new Database();
            $this->conn = $this->connection->getConnection();
        }

        public function create($data){

            $result = $this->conn->prepare ("Insert into doctor (d_name,d_age,d_address,d_email,d_phone,d_gender,d_speciality,d_department) Values (:dname,:dage,:daddress,:demail,:dphone,:dgender,:dspeciality,:ddepartment)");
       
            $result->bindParam(':dname',$data['dname']);
            $result->bindParam(':dage',$data['dage']);
            $result->bindParam(':daddress',$data['daddress']);
            $result->bindParam(':demail',$data['demail']);
            $result->bindParam(':dphone',$data['dphone']);
            $result->bindParam(':dgender',$data['dgender']);
            $result->bindParam(':dspeciality',$data['dspeciality']);
            $result->bindParam(':ddepartment',$data['ddepartment']);
           
            if($result->execute()){
            return true;
            }else{
            return false;
            }
        }

        public function doctorlist()
        {
            $result = $this->conn->prepare("select * from doctor where deleted_at is null");
            $result->execute();
            return $result->fetchAll();
        }

        public function getRecordById($id)
        {
            $result = $this->conn->prepare("select * from doctor where id = :id");
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
        }

        public function update($data, $id)
        {
            $result = $this->conn->prepare("update doctor set d_name=:dname,d_age=:dage,d_address=:daddress,d_email=:demail,d_phone=:dphone,d_gender=:dgender,d_speciality=:dspeciality,d_department=:ddepartment where id = :id");
        
            $result->bindParam(':dname',$data['dname']);
            $result->bindParam(':dage',$data['dage']);
            $result->bindParam(':daddress',$data['daddress']);
            $result->bindParam(':demail',$data['demail']);
            $result->bindParam(':dphone',$data['dphone']);
            $result->bindParam(':dgender',$data['dgender']);
            $result->bindParam(':dspeciality',$data['dspeciality']);
            $result->bindParam(':ddepartment',$data['ddepartment']);
            $result->bindParam(':id', $id);
            if($result->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function delete($id){
            $result = $this->conn->prepare("update doctor set deleted_at = :date where id = :id");
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