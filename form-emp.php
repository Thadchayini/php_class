<html>
    <head>
    <link rel="stylesheet" href="form-emp.css">

    </head>
    <body>
        <form>
            <fieldset style ="width:400px;">
            <br/> 
            <legend> Employee Details </legend>

            <?php
            $year = $_POST["year"];
            $month = $_POST["month"];
            $fname = $_POST["fname"];
            $basicsal = $_POST["basicsal"];
            $dob = $_POST["dob"];
            $address = $_POST["address"];
            // $bonus;
            // $totalsal;
            $age;
            
            ?>

            <!-- year -->
            <label for="year">Year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                <select name = "year">
                    <option  id = "year" value="2015" <?php if($year=="2015"){echo 'selected';} ?>>2015</option>
                    <option  id = "year" value="2016" <?php if($year=="2016"){echo 'selected';} ?>>2016</option>
                    <option  id = "year" value="2017" <?php if($year=="2017"){echo 'selected';} ?>>2017</option>
                    <option  id = "year" value="2018" <?php if($year=="2018"){echo 'selected';} ?>>2018</option>
                    <option  id = "year" value="2019" <?php if($year=="2019"){echo 'selected';} ?>>2019</option>
                    <option  id = "year" value="2020" <?php if($year=="2020"){echo 'selected';} ?>>2020</option>
                    <option  id = "year" value="2021" <?php if($year=="2021"){echo 'selected';} ?>>2021</option>
                    <option  id = "year" value="2022" <?php if($year=="2022"){echo 'selected';} ?>>2022</option>
                    <option  id = "year" value="2023" <?php if($year=="2023"){echo 'selected';} ?>>2023</option>
                    <option  id = "year" value="2024" <?php if($year=="2024"){echo 'selected';} ?>>2024</option>
                </select>
            </label>
            <br/>
            <br/>

            <!-- month of salary -->
            <label for="month">Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                <select name = "month">
                    <option  id = "month" value="January" <?php if($month=="January"){echo 'selected';} ?>>January</option>
                    <option  id = "month" value="February" <?php if($month=="February"){echo 'selected';} ?>>February</option>
                    <option  id = "month" value="March" <?php if($month=="March"){echo 'selected';} ?>>March</option>
                    <option  id = "month" value="April" <?php if($month=="April"){echo 'selected';} ?>>April</option>
                    <option  id = "month" value="May" <?php if($month=="May"){echo 'selected';} ?>>May</option>
                    <option  id = "month" value="June" <?php if($month=="June"){echo 'selected';} ?>>June</option>
                    <option  id = "month" value="July" <?php if($month=="July"){echo 'selected';} ?>>July</option>
                    <option  id = "month" value="August" <?php if($month=="August"){echo 'selected';} ?>>August</option>
                    <option  id = "month" value="September" <?php if($month=="September"){echo 'selected';} ?>>September</option>
                    <option  id = "month" value="October" <?php if($month=="October"){echo 'selected';} ?>>October</option>
                    <option  id = "month" value="November" <?php if($month=="November"){echo 'selected';} ?>>November</option>
                    <option  id = "month" value="December" <?php if($month=="December"){echo 'selected';} ?>>December</option>
                </select>
            </label>
            <br/>
            <br/>

            <!-- first name -->
            <label for="fname">First Name &nbsp;&nbsp;: 
                <input type = "text" name = "fname" id = "fname" placeholder="Enter your first name" value = "<?php echo $fname;?>"/>
            </label>
            <br/>
            <br/>

            <!-- basic salary -->
            <label for="basicsal">Basic Salary &nbsp;: 
                <input type = "text" name = "basicsal" id = "basicsal" value = "<?php echo $basicsal?>"/>
            </label>
            <br/>
            <br/>

            <!-- bonus -->
            <label for="bonus">Bonus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
            <?php
            function calBonus($basicsal){
                global $bonus;
                $bonus = $basicsal*5/100;
                echo $bonus;
            }
            calBonus($basicsal);
            
            ?>
                <!-- <input type = "text" name = "bonus" id = "bonus"/> -->
            </label>
            <br/>
            <br/>

            <!-- total salary -->
            <label for="totalsal">Total Salary &nbsp;&nbsp;: 
            <?php
            function calTotSal($bonus){
                global $totalsal;
                $totalsal = $basicsal + $bonus;
                echo $totalsal;
            }
            calTotSal($bonus)
            
            ?>
                <input type = "text" name = "totalsal" id = "totalsal"/>
            </label>
            <br/>
            <br/>

            <!-- data of birth -->
            <label for="dob">Date of Birth &nbsp;&nbsp;: 
                <input type = "date" name = "dob" id = "dob" value = "<?php echo $dob?>"/>
            </label>
            <br/>
            <br/>

            <!-- age -->
            <label for="age">Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                <?php
                $userdob = new DateTime($dob);
                $now = new DateTime();
                $difference = $now->diff($userdob);
                $age = $difference->y;
                echo $age;
                ?>
                <!-- <input type = "number" name = "age" id = "age" <?php echo $age;?> /> -->
            </label>
            <br/>
            <br/>

            <!-- address -->
            <label for="address">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                <textarea type = "text" name= "address" id = "address"><?php echo $address?></textarea></label>
            <br/>
            <br/>

        </fieldset>
        </form>
    </body>
</html>