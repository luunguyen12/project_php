<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Tin tức</h2>
						<?php
						foreach($arr as $news)
						{
						?>
						<div class="single-blog-post">
							<h3><?php echo $news["c_name"]?></h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="index.php?controller=news_detail&id=<?php echo $news["pk_news_id"]?>">
								<img src="<?php echo $news["c_img"]?>" alt="">
							</a>
						<p><?php echo $news["c_description"]?></p></p>
							<a  class="btn btn-primary" href="index.php?controller=news_detail&id=<?php echo $news["pk_news_id"]?>">chi tiết</a>
						</div>
						<?php } ?>
						
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="" class="active">trang</a></li>
								<?php 
								for($i=1;$i<=$num_page;$i++)
									{
										?>
								<li><a href="index.php?controller=news&p=<?php echo $i?>"><?php echo $i?></a></li>
								<?php } ?>
								<li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>