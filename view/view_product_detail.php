	
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo $arr["c_img"]?>" />
								
							</div>

							<div id="similar-product" class="carousel slide" data-ride="carousel">
								  <!-- Wrapper for slides -->
							 
									
							<div class="carousel-inner">
								   	<?php
								foreach($product_hot as $rows_hot) 
								{
								?>

									<div class="item active">
									<div class="col-sm-3">
										
										  <a href="index.php?controller=product_detail&id=<?php echo $rows_hot["pk_book_id"]?>"><img src="<?php echo $rows_hot["c_img"]?>" style="width: 85px; height: 84px;" ></a>
									</div>	 
									</div>
									
									<div class="item">
									<div class="col-sm-3">
									

										  <a href="index.php?controller=product_detail&id=<?php echo $rows_hot["pk_book_id"]?>"><img src="<?php echo $rows_hot["c_img"]?> " style="width: 85px; height: 84px;"  ></a>
										 </div>
										</div>
								
								<?php } ?>	
							</div>
								  <!-- Controls -->
								  <a class="lft item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="public/images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $arr["c_name"]?></h2>
								
								<img src="public/images/product-details/rating.png" alt="" />
								<span>
									<span><?php echo number_format($arr["c_price"])?></span>
									<label>Quantity:</label>
									
									<a href="index.php?controller=cart&act=add&id=<?php echo $arr["pk_book_id"]?>"
									 type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										thêm vào giỏ hàng
									</a>
								</span>
								
								<p><b>tình trạng:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<div class="fb-like" data-href="" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
								<g:plusone></g:plusone>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">sản phẩm khác</a></li>
							<li><a href="#companyprofile" data-toggle="tab">bình luận </a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">giới thiệu sản phẩm</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
							<?php
							foreach($product as $rows)
							{
							?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $rows["c_img"]?>"  />
												<h2><?php echo number_format($rows["c_price"])?></h2>
												<p><?php echo ( $rows["c_name"])?></p>
												<a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>thêm vào giỏ hàng</a>
												<a href="index.php?controller=product_detail&id=<?php echo $rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart">chi tiết</a>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<div class="fb-comments" data-href="" data-numposts="5"></div>
						
							</div>
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p><?php echo $arr["c_description"]?></p>
									<p><?php echo $arr["c_content"]?></p>
									
									
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">sản phẩm hot</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							<?php
							foreach($product_news as $rows)
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
										<a href="index.php?controller=product_detail&id=<?php echo $rows["pk_book_id"]?>" type="button" class="btn btn-default add-to-cart">Detail</a>
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
			</div>
		</div>
	</section>