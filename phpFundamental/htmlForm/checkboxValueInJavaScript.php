<?php include('./header.php') ?>


<section class="content">
<div id="state"></div>
    <form  name="myForm" id="myForm" onsubmit="multiCheck(); return false; ">
        <table>
            <tr>
                <td>Language:</td>
                <td>
                    <input type="checkbox" name="Language" value="PHP">PHP
                    <input type="checkbox" name="Language" value="CPP">CPP
                    <input type="checkbox" name="Language" value="C">C
                </td>
            </tr>
            <tr>

                <td>
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" value="claer">
                </td>

            </tr>

        </table>
    </form>

   

</section>

<script>
    function multiCheck(){
        var len = document.myForm.language.length;
        var result = "";
        
        for(i=0;i<len;i++){

            var checkedValue = document.myForm.language[i].checked;
            if(checkedValue){
                result += document.myForm.language[i].value + ", ";
            }
        }

        var showData = "You selected :" + result;
        document.getElementById('state').innerHTML = showData;
    }
</script>

<?php include('./footer.php') ?>