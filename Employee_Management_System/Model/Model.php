<?Php

class Model
{

    function __construct(protected $connection = null)
    {
        $this->connection = new mysqli("localhost", "root", "", "employeeassessment");
        // if($this->connection){
        //     echo "connection Success";
        // }else {
        //     echo "connection Fail";
        // }
    }
    //Insert Quary START
    function Insert($tbl, $data)
    {
        $clm = implode(",", array_keys($data));
        $val = implode("','", $data);

        $SQL = " INSERT INTO $tbl ($clm) VALUE ('$val') ";

        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $ResponceData['Data'] = "1";
            $ResponceData['Msg'] = "Success";
            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Again";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }
    function Select($tbl, $where = null)
    {
        $SQL = " SELECT * FROM $tbl";
        if ($where != "") {
            $SQL .= " WHERE";
            foreach ($where as $key => $value) {
                $SQL .= " $key = '$value' AND";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($data = $SQLEx->fetch_object()) {
               $FetchRes[] = $data;
            }
            $ResponceData['Data'] = $FetchRes;
            $ResponceData['Msg'] = "Success";
            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Again";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }
    function Update($tbl,$data,$where){
        $SQL = "UPDATE $tbl SET";

        foreach ($data as $key => $value) {
           $SQL .= " $key = '$value' ,";
        }
        $SQL = rtrim($SQL,",");
        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL,"AND");

        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
           
            $ResponceData['Data'] = "1";
            $ResponceData['Msg'] = "Success";
            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Again";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }
    function Delete($tbl,$where){
       $SQL = "DELETE FROM $tbl";
        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL,"AND");

        // echo $SQL;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            
            $ResponceData['Data'] = "1";
            $ResponceData['Msg'] = "Success";
            $ResponceData['Code'] = "1";
        } else {
            $ResponceData['Data'] = "0";
            $ResponceData['Msg'] = "Try Again";
            $ResponceData['Code'] = "0";
        }
        return $ResponceData;
    }

}
