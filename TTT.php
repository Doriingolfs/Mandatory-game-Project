<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tick Tack Toe</title>
</head>
<body>

    <form method="POST" action="index2.php">
        <?php
            $error = false; $x_wins = false; $o_wins = false; $count = 0;
            for ($id = 1; $id <= 9; $id++) 
            {   
            
                if ($id == 4 or $id == 7) print "<br>";                
                print "<input name =$id type=text size=8";                            
                
                if (isset($_POST['submit']) and !empty($_POST[$id]))
                {
                     if($_POST[$id] == "x" or $_POST[$id] == "o")
                     {
                        $count +=1;
                        print " value = ".$_POST[$id]." readonly>";
                        
                        
                        for ($a = 1, $b = 2, $c = 3; $a<= 7, $b <= 8, $c <=9; $a+=3, $b+=3, $c+=3)
                        {      /*                      
                            if ($_POST["$a"] == $_POST["$b"] and $_POST["$b"] == $_POST["$c"]) 
                            {
                                if ($_POST["$a"] == "x") 
                                {
                                    $x_wins = true;
                                }
                                else if ($_POST["$a"] == "o")
                                {
                                    $o_wins = true;
                                }
                            }
                            */
                            
                        }
                        

                        for ($a = 1, $b = 4, $c = 7; $a<= 3, $b <= 6, $c <=9; $a+=1, $b+=1, $c+=1)
                        {/*
                            if ($_POST["$a"] == $_POST["$b"] and $_POST["$b"] == $_POST["$c"]) 
                            {
                                if ($_POST["$a"] == "x") 
                                {
                                    $x_wins = true;
                                }
                                else if ($_POST["$a"] == "o")
                                {
                                    $o_wins = true;
                                }
                            }
                            */
                        }

                        for ($a = 1, $b = 5, $c = 9; $a<= 3, $b <= 5, $c <=7; $a+=2, $b+=0, $c-=2)
                        {/*
                            if ($_POST["$a"] == $_POST["$b"] and $_POST["$b"] == $_POST["$c"]) 
                            {
                                if ($_POST["$a"] == "x") 
                                {
                                    $x_wins = true;
                                }
                                else if($_POST["$a"] == "o")
                                {
                                    $o_wins = true;
                                }                       
                            }   
                            */                     
                        }
                        
                        
                    }
                }                
                else
                {
                    $error = true;
                }              
                
            }                        
        
            
            ?>

        <p><input name="submit" type="submit"></p>

    </form>

    <?php
        if ($o_wins)
        {
            print "Player o Wins";
        }
        elseif ($x_wins)
        {
            print "Player x Wins";
        }
        elseif($count == 9 and !$o_wins and !x_wins) 
        {
            print "Draw";
        }
        else
        {
            print "Please enter x or o values";
        }
    
    
    ?>
</body>
</html>