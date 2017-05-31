<section>
		<div class="container">
			<div class="row">
				
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
						foreach($arr as $rows)
						{
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php echo($rows["c_img"])?>" alt="" />
										<h2><?php  echo number_format($rows["c_price"])?></h2>
										<p><?php  echo $rows["c_name"]?></p>
										<a href="index.php?controller=product_detail&id=<?php echo $rows["pk_book_id"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php  echo number_format($rows["c_price"])?></h2>
											<p><?php  echo $rows["c_name"]?></p>
											<a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_book_id"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<a href="index.php?controller=product_detail&id=<?php echo $rows["pk_book_id"]?>" class="btn btn-default add-to-cart">Detail</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
						<?php } ?>
						</div>
						<ul class="pagination">
							<li class="active"><a href="">Trang</a></li>
							<?php
						for($i=1;$i<=$num_page;$i++)
						{
						?>
							<li><a href="index.php?controller=category_product&id=<?php echo $rows["fk_category_book_id"]?>&p=<?php echo $i ?>"><?php echo $i?></a></li>
							<?php } ?>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>