<html>
    <head>

    </head>
    <body>
        <form>
            <fieldset style ="width:400px;">
            <br/> 
            <legend> Student Details </legend>

            <!-- check box value test -->
            <!-- <?php
            echo in_array("Maths",$_POST["subject"]);
            ?> -->
            
            <!-- first name -->
            <label for="fname">First Name : 
                <input type = "text" name = "fname" id = "fname" value = "<?php echo $_POST["fname"];?>" placeholder="Enter your first name"/>
            </label>
            <br/>
            <br/>

            <!-- last name -->
            <label for="fname">Last Name : 
                <input type = "text" name = "lname" id = "lname" value = "<?php echo $_POST["lname"];?>" placeholder="Enter your last name"/>
            </label>
            <br/>
            <br/>

            <!-- gender -->
            <!-- <label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <label><input type = "radio" name= "gender" id = "gender" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="Male") echo "checked";?> value = "Male"/>Male</label>
            <label><input type = "radio" name= "gender" id = "gender" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="Female") echo "checked";?> value = "Female"/>Female</label>
            <label><input type = "radio" name= "gender" id = "gender" <?php if (isset($_POST["gender"]) && $_POST["gender"]=="Other") echo "checked";?> value = "Other"/>Other</label>
            <br/>
            <br/> -->

            <!-- <label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <?php 
            if($_POST["gender"] == "Male"){
            ?>
            <label><input type = "radio" name= "gender" id = "gender" value = "Male" checked/>Male</label>
            <?php
            }else{
            ?>
            <label><input type = "radio" name= "gender" id = "gender" value = "Female" checked/>Female</label>
            <?php
            }
            ?> -->

            <!-- <label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Male" <?php if($_POST["gender"]=="Male"){echo 'checked';} ?> />Male</label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Female" <?php if($_POST["gender"]=="Female"){echo 'checked';} ?>/>Female</label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Other" <?php if($_POST["gender"]=="Other"){echo 'checked';} ?>/>Other</label>
            <br/>
            <br/> -->

            <label>Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Male" <?php echo ($_POST["gender"]=="Male")? "checked" : " "?> />Male</label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Female" <?php echo ($_POST["gender"]=="Female")? "checked" : " " ?> />Female</label>
            <label><input type = "radio" name= "gender" id = "gender" value = "Other" <?php echo ($_POST["gender"]=="Other")? "checked" : " " ?> />Other</label>
            <br/>

            <!-- class -->
            <!-- <label for="class">Class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <select name = "class">
                <option  id = "class1" <?php if (isset($_POST["class"]) && $_POST["class"]=="10A") echo "selected";?> value="10A">10A</option>
                <option  id = "class2" <?php if (isset($_POST["class"]) && $_POST["class"]=="10B") echo "selected";?> value="10B">10B</option>
                <option  id = "class3" <?php if (isset($_POST["class"]) && $_POST["class"]=="10C") echo "selected";?> value="10C">10C</option>
                </select>
            </label>
            <br/>
            <br/> -->

            <label for="class">Class &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                <select name = "class">
                <option  id = "class1" value="10A" <?php if($_POST["class"]=="10A"){echo 'selected';} ?>>10A</option>
                <option  id = "class2" value="10B" <?php if($_POST["class"]=="10B"){echo 'selected';} ?>>10B</option>
                <option  id = "class3" value="10C" <?php if($_POST["class"]=="10C"){echo 'selected';} ?>>10C</option>
                </select>
            </label>
            <br/>
            <br/>

            <!-- subject -->
            <label>Subject &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
            <label><input type = "checkbox" name = "subject[]" id = "subject" <?php echo (in_array("Maths",$_POST["subject"]))?"checked" : " "?> value = "Maths"/>Maths</label>
            <label><input type = "checkbox" name = "subject[]" id = "subject" <?php echo (in_array("Maths",$_POST["subject"]))?"checked" : " "?> value = "English"/>English</label>
            <label><input type = "checkbox" name = "subject[]" id = "subject" <?php echo (in_array("Maths",$_POST["subject"]))?"checked" : " "?> value = "Tamil"/>Tamil</label>
            
            <br/>
            <br/>

            <!-- address -->
            <label for="address">Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
                <textarea type = "text" name= "address" id = "address"><?php echo $_POST["address"];?></textarea></label>

        </fieldset>
        </form>
    </body>
</html>
