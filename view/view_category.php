<div class="panel-group category-products" id="accordian"><!--category-productsr-->

							<div class="panel panel-default">
							<?php
									foreach($arr as $rows)
									{
									?>
								<div class="panel-heading">
									<h3 class="panel-title">
									
							<a  href="index.php?controller=category_product&id=<?php echo $rows["pk_category_book_id"]?>">
											<span class="badge pull-right"></span>
											<?php  echo $rows["c_name"]?>
										</a>
									</h3>
								</div>
								<?php  } ?>
							</div>
							
						</div><!--/