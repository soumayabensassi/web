<?php
class notification
{ private  $id= null;
    private $emailclients = null;
    private   $date;
    private   $message= null;
    private   $status= null;

    function __construct(string $date,string $message,string $status ){
			
        $this->date=$date;
        $this->message=$message;
        $this->status=$status;
    }

        function getDate(): string{
            return $this->date;
            }
    function getMessage(): string{
        return $this->message;
    }
    function getStatus(): string{
        return $this->status;
    }
}
     
    

?>