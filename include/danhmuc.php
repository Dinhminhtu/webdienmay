<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_cate = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id ASC");
	$sql_category = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");

	$row_title = mysqli_fetch_array($sql_category);
	$title = $row_title['category_name'];
?>
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title ?></h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sanpham = mysqli_fetch_array($sql_cate)) {
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img style="width: 50%;" src="images/<?php echo $row_sanpham['sanpham_image']?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id']?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id']?>"><?php echo $row_sanpham['sanpham_name']?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo $row_sanpham['sanpham_giakhuyenmai']?> <sup>vnđ</sup></span>
												<del><?php echo $row_sanpham['sanpham_gia']?> <sup>vnđ</sup></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
														<input type="hidden" name="amount" value="200.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
						<!-- //first section -->
						
						
						
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<div class="left-side border-bottom py-2">
								
								<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
								<ul>
									
									<?php
									$sql_category_slidebar = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
									while($row_category_slidebar = mysqli_fetch_array($sql_category_slidebar)){
									 ?>
									
									<li>
										<span class="span"><a href="?quanly=danhmuc&id=<?php echo $row_category_slidebar['category_id']?>"><?php echo $row_category_slidebar['category_name'] ?></a></span>
									</li>
									<?php
									}
									?>
								</ul>
							</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->