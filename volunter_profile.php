<?php 
session_start();
include('database/dbconfig.php');
include('include/navbar.php');

    $name = $_SESSION['reg_first'];
    $email = $_SESSION['reg_email'];
    $mobile = $_SESSION['reg_mobile'];
    $address = $_SESSION['reg_address'];
 
    $query="SELECT * FROM volunter where name='$name' and email='$email' and mobile='$mobile' and address='$address' ";
    $query_run=mysqli_query($con,$query);
?>
<script src="js/html2canvas.js"></script>
<script>
        function getScreen() {
            var caption = $('#caption-input').val();
            $("#caption-text").html(caption);
            $("#nav-bar").hide();
            $("#btn-hide").hide();
            $("footer").hide();
            html2canvas(document.body, {
                dpi: 192,
                onrendered: function(canvas) {
                    $("#blank").attr('href', canvas.toDataURL("image/png"));
                    $("#blank").attr('download', caption + '.png');
                    $("#blank")[0].click();
                }
            });
        }
</script>

<link rel="stylesheet" href="css/register_profile.css">
    <div class="id-card-tag"></div>
        <div class="id-card-tag-strip"></div>
        <div class="id-card-hook"></div>
        <div class="id-card-holder">
		<div class="id-card">
        <?php
              if(mysqli_num_rows($query_run)>0)
              {
                while($row= mysqli_fetch_assoc($query_run))
                {
                    ?>
                    <div class="header">
                    <a href="index.php"><img src="img/logo.jpeg"/><br/><b>Helping <span>Hands</span></b></a>
                    
                    </div>
                    <div class="photo">
                    <?php echo '<img src="uploads/'.$row['image'].'" width="100px;" height="100px;">' ?>
                        <!-- <img src="img/15.jpg"> -->
                    </div>
                    <h2><i class="fas fa-user"></i>&nbsp <?php echo $row['name']; ?></h2>
                    <h2><i class="fas fa-mobile"></i>&nbsp +91- <?php echo $row['mobile']; ?></h2>
                    <h2><i class="fas fa-map-marker-alt"></i> <?php echo $row['address']; ?></h2>
            <?php
                }
              }
            ?>
			<!-- <div class="qr-code">
				<img src="https://www.shopify.com/growth-tools-assets/qr-code/shopify-faae7065b7b351d28495b345ed76096c03de28bac346deb1e85db632862fd0e4.png">
			</div> -->
			<h3>Volunter Card</h3>
			<hr>
			
			<p style="font-size:10px;">Mangalore,India <strong>575001</strong></p>
			<p style="font-size:8px;">Ph: 8861920664 | sayhellotohelpinghands@gmail.com</p>

		</div>
    </div>
    <input type="hidden" name="caption-input" id="caption-input" value="<?php echo $name ?>">
                
<div id="btn-hide" style="float:right">

        <a href="javascript:getScreen();" class="btn btn-danger">Take Screenshot</a>
        <a href="" id="blank"></a>
</div>
    

<?php
include('include/script.php');
include('include/footer.php');
?>
