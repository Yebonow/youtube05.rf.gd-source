<?php 
class SQL {
    private static function connect() {
		$servername = "sql305.infinityfree.com";
		$username = "if0_35301374";
		$db = "if0_35301374_youtube05";
		$password = "gx4vVOP4e9d";
        $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    public static function Query($SQL, $Params, $ReturnData = FALSE) {
        $stmt = self::connect()->prepare($SQL);
        $stmt->execute($Params);
        if($ReturnData == TRUE){
        $fData = $stmt->fetchAll();
        return $fData;
        }
    }
}
?>