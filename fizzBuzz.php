<!DOCTYPE html>
<html lang="en">
    <body>
        <?php

            $number = 1;

            while ($number <= 100){
                
                if($number % 3 == 0 && $number % 5 == 0){
                    print "<h1>FizzBuzz</h1>";
                }

                else if($number % 3 == 0){
                    print "<p>Fizz</p>";
                }                

                else if($number % 5 == 0){
                    print "<p>Buzz</p>";
                }
                
                else{
                    print '<p>'. $number . '</p>';
                }
                
                $number++;
            }
        ?>
    </body>
</html>