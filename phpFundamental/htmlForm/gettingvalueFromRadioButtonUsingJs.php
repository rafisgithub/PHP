<?php include('./header.php') ?>



<section class="content">
<div id="show"></div>
    <form  name="myForm" onsubmit="clickHere(); return false;">
        <table>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="others">Others
                </td>
            </tr>
            <tr>

                <td>
                    <input type="submit" value="submit">
                    <input type="reset" value="claer">
                </td>

            </tr>

        </table>
    </form>

</section>


<script>
    function clickHere(){
        var genderLen = document.myForm.gender.length;
        for(i=0;i<genderLen;i++){
            var checkValue = document.myForm.gender[i].checked;
            if(checkValue){
                var checkResult = document.myForm.gender.value;
            }
        }
        var showData = "Gender : " +checkResult;
        document.getElementById('show').innerHTML = showData;
    }
</script>

<?php include('./footer.php') ?>