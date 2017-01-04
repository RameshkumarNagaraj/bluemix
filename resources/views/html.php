 <?php
    if(isset($_POST['btn'])){
        //do some task
    ?>
    <script type="text/javascript">
        var e = document.getElementById('testForm'); e.action='test.php'; e.submit();</script>
    <?php
    }
    ?>
<form name="testForm" id="testForm"  method="POST"  >
    <input type="submit" name="btn" value="submit" autofocus  onclick="return true;"/>
 </form>