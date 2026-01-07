<?php 
	include '../config.php';

	$data = mysqli_query($conn, "SELECT * FROM rating WHERE via = '$_GET[via]' ORDER BY id_nilai DESC");
	while($d=mysqli_fetch_array($data)){
?>
<div class="comment-holder">
	<div class="comment-slot">
		<div class="thumb">
			<a href="#"><img src="../../images/person-male.png" height="50" width="50" alt="image description"></a>
		</div>
		<div class="text">
			<header class="comment-head">
				<div class="left" style="width: 80%">
					<strong class="name">
						<a href="#"><?php echo $d['nama'] ?> - <?php echo $d['email'] ?></a>
					</strong>
					<div class="meta">Ulasan pada <?php echo date("d/m/Y", strtotime($d['tgl'])) ?></div>
				</div>
				<div class="right" style="width: 20%">
					<div class="star-rating">
						<span><span class="icon-star"></span></span>
						<span><span class="icon-star"></span></span>
						<span><span class="icon-star"></span></span>
						<span><span class="icon-star"></span></span>
						<span class="disable"><span class="icon-star"></span></span>
					</div>
					<span class="value"><?php echo $d['nilai'] ?>/5</span>
				</div>
			</header>
			<div class="des">
				<p style="margin: 0;"><?php echo $d['ulasan'] ?></p>
			</div>
		</div>
	</div>
</div>
	

<?php } ?>