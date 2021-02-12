<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_ads LEFT JOIN tbl_sup on tbl_ads.author = tbl_sup.user_id WHERE tbl_ads.status = 'active' AND tbl_ads.featured = 'yes' ORDER BY enc_id DESC");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];
      $approved = $row['verified'];

    	?>

    	<div class="item">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="<?php echo $firstFile; ?>" alt="">
<div class="overlay">
<div>
<a class="btn btn-common" href="ad/<?php echo $row['ad_id']; ?>">View Details</a>
</div>
</div>
<div class="btn-product bg-sale">
<a ><?php echo number_format($row['price']); ?> <?php echo $currency; ?></a>
</div>

</div>
<div class="product-content">
<h3 class="product-title list-limit-featured"><a href="ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h3>
<span><?php echo $row['category']; ?></span>
<div class="icon">
		<?php
	if ($approved == "YES") {
	print '<i class="lni-check-mark-circle"></i>';

	}
	?>

<span><i class="lni-star"></i></span>
</div>
<div class="card-text">
<div class="float-left">
<span class="icon-wrap">
<a class="address"><i class="lni-user"></i> <?php echo $row['username']; ?>
	<?php
	if ($approved == "YES") {
	print '<i class="lni-check-mark-circle"></i>';

	}
	?>
</a>

</div>
<div class="float-right">
<a class="address"><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</div>
</div>
</div>
</div>
</div>


<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>