
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
					<h2 class="title text-center">sản phẩm</h2>
						<?php
						foreach($product_hot as $rows_hot)
						{ 
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
				<img src="<?php echo $rows_hot["c_img"]?>" />
											<h2><?php echo number_format($rows_hot["c_price"])?></h2>
											<p><?php
											echo $rows_hot["c_name"]?></p>
											<a href="index.php?controller=cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
										</div>
										<div class="product-overlay">
				<div class="overlay-content">
							<h2><?php $rows_hot["c_price"]?></h2>
							<p><?php echo $rows_hot["c_name"]?></p>
						<a href="index.php?controller=cart&act=add&id=<?php echo $rows_hot["pk_book_id"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
							<a href="index.php?controller=product_detail&id=<?php echo $rows_hot["pk_book_id"]?>" class="btn btn-default add-to-cart">chi tiết</a>
											</div>
										</div>

								</div>
							</div>
							</div>

							<?php } ?>
						</div>
						<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">sản phẩm hot</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<?php
							foreach($product_new as $rows)
								{
									?>
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $rows["c_img"]?>" alt="" />
													<h2><?php echo number_format($rows["c_price"])?></h2>
													<p><?php echo $rows["c_name"]?></p>
									<a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
										<a href="index.php?controller=product_detail&id=<?php echo $rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart">chi tiết</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo $rows["c_img"]?>" alt="" />
													<h2>$56</h2>
													<p><?php echo $rows["c_name"]?></p>
													<a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<a href="index.php?controller=product_detail&id=<?php echo $$rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart">Detail</a>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<?php  } ?>
							</div>

							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
						</div>
			
	