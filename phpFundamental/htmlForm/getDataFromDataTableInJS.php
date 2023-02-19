<?php include('./header.php'); ?>

<section class="content">

  <form name="myForm" id="myForm" onsubmit="clickHere(); return false;">
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
          <input type="submit" value="submit">
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
      <td><span id="showName"></span></td>
    </tr>

    <tr>
      <td>Gender</td>
      <td><span id="showGen"></span></td>
    </tr>

    <tr>
      <td>Department</td>
      <td><span id="showDep"></span></td>
    </tr>

    <tr>
      <td>Language</td>
      <td><span id="showLan"></span></td>
    </tr>

  </table>
</div>


<script>
  function clickHere(){
    var getName = document.myForm.userName.value;
    document.getElementById('showName').innerHTML = getName;

    var genderLen = document.myForm.gender.length;
    for(i=0;i<genderLen;i++){
      var checkedGender = document.myForm.gender[i].checked;
      if(checkedGender){
        var genValue = document.myForm.gender[i].value;
      }
    }
    document.getElementById('showGen').innerHTML = genValue;
  

  var depLen = document.myForm.department.length;
    for(i=0;i<depLen;i++){
      var checkedDep = document.myForm.department[i].checked;
      if(checkedDep){
        var depValue = document.myForm.gender[i].value;
      }
    }
    document.getElementById('showDep').innerHTML = depValue;


    var index = document.myForm.languages.selectedIndex;
    var languageValue = document.myForm.languages.options[index].value;

    document.getElementById('showLan').innerHTML = languageValue;
  }
</script>

<?php include('./footer.php'); ?>
