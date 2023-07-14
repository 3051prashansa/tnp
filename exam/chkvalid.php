<?php
session_start();
if($_SESSION['examid']==-1)
{?>

<script> window.location="startexam.php"; </script>
<?php
}

?>