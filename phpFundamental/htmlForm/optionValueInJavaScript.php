<?php include('./header.php'); ?>

<section class="content">
  <div style="text-align: center;" id="output"></div>
  <form name="myForm" onsubmit="selectedOption(); return false;">
    <table>
      <tr>
        <td>Languages</td>
        <td>
          <select name="lanuages" id=""> 
            <option>Select one</option>
            <option value="JAVA">JAVA</option>
            <option value="PYTHON">PYTHON</option>
            <option value="C#">C#</option>
            <option value="PHP">PHP</option>
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

<script>
  function selectedOption() {
    var index = document.myForm.lanuages.selectedIndex;
    var value = document.myForm.lanuages.options[index].value;

    var showData = "You are a " + value + " developer.";

    document.getElementById('output').innerHTML = showData;
  }
</script>

<?php include('./footer.php'); ?>
