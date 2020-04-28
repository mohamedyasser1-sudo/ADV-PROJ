<?php 
            include 'connect/connect.php';
            $advertise_id =  $_GET['id'];
  
            
            $notcountquery=mysqli_query($conn,"SELECT * FROM advertise WHERE id = '$advertise_id'" );
            while($stopcount = mysqli_fetch_array($notcountquery)){
            
            $pagename = $stopcount['pagename'];
            $image1 = $stopcount['image1'];
            $desc1  = $stopcount['description1'];
            $pagedescription = $stopcount['pagedescription'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="<?= $pagename ?>" />
    <meta property="og:description"        content="<?= $desc1 ?> " />
    <meta property="og:image"              content="http://topad.net/preview/uploads/images/<?=$image1; ?>" />

</head>
<body>

</body>
</html>
