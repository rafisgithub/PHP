<?php include('./header.php'); ?>
<?php

global $name;
global $gender;
global $department;
global $languages;

if(isset($_POST['submit'])){
      $name = $_POST['userName'];
      $gender = $_POST['gender'];
      $department = $_POST['department'];
      $languages = $_POST['languages'];



}
 ?>
<section class="content">

  <form method="post" name="myForm" id="myForm">
    <table>
      <tr>
        <td>Name :</td>
        <td><input type="text" name="userName" required></td>
      </tr>

      <tr>
        <td>Gender :</td>
        <td>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
        </td>
      </tr>

      <tr>
        <td>Department :</td>
        <td>
            <input type="checkbox" name="department" value="CSE">CSE
            <input type="checkbox" name="department" value="EEE">EEE
            <input type="checkbox" name="department" value="Mathematics">Mathematics
        </td>
      </tr>


      
      <tr>
        <td>Languages :</td>
        <td>
            <select name="languages" id="">
                <option value="">select one</option>
                <option value="PHP">PHP</option>
                <option value="C#">C#</option>
                <option value="Python">Python</option>
            </select>
        </td>
      </tr>

      <tr>
        <td>
          <input type="submit" value="submit" name="submit">
          <input type="reset" value="clear">
        </td>
      </tr>
    </table>
  </form>
</section>



<div class="tablePosition">
<table class="tblone">
    <tr>
      <td colspan="2" align="center">OUtput</td>
    </tr>
  
    <tr>
      <td>Name</td>
      <td><?php echo $name ?></td>
    </tr>

    <tr>
      <td>Gender</td>
  
        <?php 
        if($gender == "Male"){ ?>
        <td><?php echo "Male" ?></td> 
        <?php } elseif($gender == "Female"){ ?>
             <td><?php echo "Female" ?></td> 
        <?php }
        ?>
   
    </tr>

    <tr>
      <td>Department</td>
     
      <?php 
        if($department == "CSE"){ ?>
        <td><?php echo "CSE" ?></td> 
        <?php } elseif($department == "EEE"){ ?>
             <td><?php echo "EEE" ?></td> 
        <?php } else { ?>
            <td><?php echo "Mathematics" ?></td>
        <?php }
        ?>

    </tr>

    <tr>
      <td>Language</td>
      <td><?php echo $languages ?></td>
    </tr>

  </table>

</div>




<?php include('./footer.php'); ?>
