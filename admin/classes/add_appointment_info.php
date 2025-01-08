<?php
    include_once('../Database.php');
    class info{
       
        public function __construct(){
            $this->connection = new Database();
            $this->conn = $this->connection->getConnection();
        }

        public function create($data){
            $result = $this->conn->prepare ("Insert into appointment (p_name,p_age,p_address,p_phone,p_gender,p_weight,p_bloodgroup,p_bloodpressure,p_appointment_time,p_reason,p_doctor) Values (:pname,:page,:paddress,:pphone,:pgender,:pweight,:pbloodgroup,:pbloodpressure,:pappointmenttime,:preason,:pdoctor)");
            $result->bindParam(':pname',$data['pname']);
            $result->bindParam(':page',$data['page']);
            $result->bindParam(':paddress',$data['paddress']);
            $result->bindParam(':pphone',$data['pphone']);
            $result->bindParam(':pgender',$data['pgender']);
            $result->bindParam(':pweight',$data['pweight']);
            $result->bindParam(':pbloodgroup',$data['pbloodgroup']);
            $result->bindParam(':pbloodpressure',$data['pbloodpressure']);
            $result->bindParam(':pappointmenttime',$data['pappointmenttime']);
            $result->bindParam(':preason',$data['preason']);
            $result->bindParam(':pdoctor',$data['pdoctor']);
            if($result->execute()){
            return true;
            }else{
            return false;
            }
        }

        public function appointmentlist()
        {
            $result = $this->conn->prepare("select * from appointment where deleted_at is null");
            $result->execute();
            return $result->fetchAll();
        }

        public function getRecordById($id)
        {
            $result = $this->conn->prepare("select * from appointment where id = :id");
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
        }

        public function update($data, $id)
        {
            $result = $this->conn->prepare("update appointment set p_name=:pname,p_age=:page,p_address=:paddress,p_phone=:pphone,p_gender=:pgender,p_weight=:pweight,p_bloodgroup=:pbloodgroup,p_bloodpressure=:pbloodpressure,p_appointment_time=:pappointmenttime,p_reason=:preason,p_doctor=:pdoctor where id = :id");
        
            $result->bindParam(':pname',$data['pname']);
            $result->bindParam(':page',$data['page']);
            $result->bindParam(':paddress',$data['paddress']);
            $result->bindParam(':pphone',$data['pphone']);
            $result->bindParam(':pgender',$data['pgender']);
            $result->bindParam(':pweight',$data['pweight']);
            $result->bindParam(':pbloodgroup',$data['pbloodgroup']);
            $result->bindParam(':pbloodpressure',$data['pbloodpressure']);
            $result->bindParam(':pappointmenttime',$data['pappointmenttime']);
            $result->bindParam(':preason',$data['preason']);
            $result->bindParam(':pdoctor',$data['pdoctor']);
            $result->bindParam(':id', $id);
            if($result->execute()){
                return true;
            }else{
                return false;
            }
        }


        public function delete($id){
            $result = $this->conn->prepare("update appointment set deleted_at = :date where id = :id");
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