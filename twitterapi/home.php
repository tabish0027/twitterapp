<?php
/*
 * @author Puneet Mehta
 * @website: http://www.PHPHive.info
 * @facebook: https://www.facebook.com/pages/PHPHive/1548210492057258
 */
require_once './config.php';
if (!isset($_SESSION["user_id"]) && $_SESSION["user_id"] == "") {
  // user already logged in the site
  header("location:" . SITE_URL);
}
//include './header.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

<div class="container col-sm-12">
   <?php if ($_SESSION["e_msg"] <> "") { ?>
    <div class="alert alert-dismissable alert-danger">
      <button data-dismiss="alert" class="close" type="button">x</button>
      <p><?php echo $_SESSION["e_msg"]; ?></p>
    </div>
  <?php } ?>
  <div class="margin10"></div>
  <?php if ($_SESSION["new_user"] == "yes") { ?>
    <h2>Thank you <?php echo $_SESSION["name"] ?>, for registering with us!!!</h2>
  <?php } else { ?>
    <h2>Post Tweet<?php echo $_SESSION["name"] ?>!!!</h2>
  <?php } ?>
  
    <input type="text" id="post" name="post"><br><br>
    <button type="button" id = "clickpost">Tweet</button>


  
  <div class="margin20"></div>
  <div class="col-sm-3">
    <a class="btn btn-block btn-social btn-twitter" href="<?php echo LOGOUT_URL; ?>">
      <i class="fa fa-twitter"></i> Logout
    </a>
  </div>
  <div style="height:10px;clear: both; "></div>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#clickpost').click(function(){
            var post = $("#post").val();
            alert("Post "+post);
            var ajaxurl = 'postcontent.php',
            data =  {'status': post};
            $.post(ajaxurl, data, function (response) {
                // Response div goes here.
                alert("post posted successfully");
            });
        });
    });


  </script>
</div>

<?php
//include './footer.php';
// unset if after it display the error.
$_SESSION["e_msg"] = "";
?>
