<!DOCTYPE html>
<html lang="en">
    <body>
        <?php

            $number = 1;

            while ($number <= 100){
                
                #Checks for numbers divisible by 3 AND 5
                
                if($number % 3 == 0 && $number % 5 == 0){
                    print "<h1>FizzBuzz</h1>";
                }
                
                #Checks for numbers divisible by 3

                else if($number % 3 == 0){
                    print "<p>Fizz</p>";
                }
                
                #checks for numbers divisible by 5

                else if($number % 5 == 0){
                    print "<p>Buzz</p>";
                }
                
                #prints number if no divisor detected

                else{
                    print '<p>'. $number . '</p>';
                }

                #Increments number
                $number++;
            }
        ?>
    </body>
</html>