<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">danh sách sản phẩm</h2>
							<?php 
							foreach($arr as $product)
								{
									?>
						<div class="col-sm-3">

							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php  echo $product["c_img"]?>" style="width: 268px; height: 249px;" />
										<h2><?php echo number_format($product["c_price"])?></h2>
										<p><?php echo $product["c_name"]?></p>
										<a href="index.php?controller=cart&act=add&id=<?php echo $product["pk_book_id"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2><?php echo number_format($product["c_price"])?></h2>
											<p></p>
											<a href="index.php?controller=cart&act=add&id=<?php echo $product["pk_book_id"]?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
											<a href="index.php?controller=product_detail&id=<?php echo $product["pk_book_id"]?>" class="btn btn-default add-to-cart">chi tiết</a>
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
							<li><a href="index.php?controller=product&p=<?php echo $i ?>"><?php echo $i?></a></li>
							<?php } ?>
							<li><a href="">&raquo;</a></li>
						</ul>
					<!--features_items-->
				</div>
			</div>
	