 <?php include "header.php" ;
       require "random.php";
       
       ?>
       
        <h1>Division</h1>
        
        <h1>
            <?php
            while (is_float($num1 / $num2)) {
              $num1 = rand(1, 10);
              $num2 = rand(1, 10);
            }
            
            echo $num1 . " / " . $num2;  
            
            ?>
            
            
        </h1>
        <br /><br/><br/>
        
        <?php 
        if (!$_POST["answer"]) {} else {
            $correct_answer = $_POST["num1"] / $_POST["num2"];
            
            if ($correct_answer == $_POST["answer"]) {
         echo "Correct!" . $_POST["num1"] . " / " . $_POST["num2"] . " = " . $_POST["answer"];}
         else {
         echo "Wrong!" . $_POST["num1"] . " / " . $_POST["num2"] . " = " . $correct_answer . ", not " . $_POST["answer"];
         }
        }
        ?>
        
        <br /><br/></br>
        
        <form method="POST" action="division.php">
            <input name="num1" type="hidden" value="<?php echo $num1 ?>">
            <input name="num2" type="hidden" value="<?php echo $num2 ?>">
            Answer: <input name="answer"><button>Submit</button> <button>New Card</button>
            
        </form>
        <?php include "footer.php"; ?>
       </center> 
    </body>
</html>