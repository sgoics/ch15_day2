
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ch 15 Examples</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
//        function calculate_future_value(
//               $investment, $interest_rate, $years) {
//            if  ($investment <= 0 || 
//                 $interest_rate <= 0 || 
//                 $years <= 0 ) {
//              throw new Exception("Please check all entries.");
//            }
//
//            $future_value = $investment;
//            for ($i = 1; $i <= $years; $i++) {
//                $future_value = 
//                    ($future_value + 
//                        ($future_value * $interest_rate * .01)); 
//            }
//            return round($futureValue, 2);
//        }
//
////        $futureValue = 
////            calculate_future_value(10000, 0.06, 0);
//        
//        try {
//    $fv =  calculate_future_value(10000, 0.06, 0);
//    echo 'Future value was calculated successfully.';
//} catch (Exception $e) {
//    echo 'Error: ' . $e->getMessage();
//}

        class customException extends Exception {   //re-throw example
              public function errorMessage() {
                //error message
                $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
                return $errorMsg;
              }
            }

            $email = "someone@example.com";

//            try {
              try {          //run as-is then uncomment inner try & braces to compare
//                check for "example" in mail address
                if(strpos($email, "example") == FALSE) {
                  //throw exception if email is not valid
                  throw new Exception($email);
                }
              }
              catch(Exception $e) {
                //re-throw exception
                throw new customException($email);
//              }
            }

            catch (customException $e) {
              //display custom message
              echo $e->errorMessage();
              //exit;                       //skips processing below if used
            }

            echo "</br>";
                    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
                    try {           
                        $db = 
                            new PDO($dsn, 'root', 'Pa$$w0rd');
                        // other statements
                    } catch (PDOException $e) {
                        echo 'PDOException: ' . $e->getMessage();
                    } catch (Exception $e) {
                        echo 'Exception: ' . $e->getMessage();
                    }


?>


    </body>
</html>
