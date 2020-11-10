<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
?>

<!-- Main Content Header -->
<div class="main-content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Sales</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->

<!-- Stats Card -->
<div class="row">
	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-one mb-30">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<p class="mb-10 line-height-1">Sales</p>
					<h3 class="mb-0 fs-25">$5000k</h3>
				</div>

				<span class="badge badge-cyan fs-12">
					<i class="icofont-swoosh-up"></i>
					<span class="fw-600 m-l-5">8.70%</span>
				</span>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">70%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-primary" style="width: 70%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-one mb-30">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<p class="mb-10 line-height-1">Revenue</p>
					<h3 class="mb-0 fs-25">$800k</h3>
				</div>

				<span class="badge badge-cyan font-size-12">
					<i class="icofont-swoosh-up"></i>
					<span class="fw-600 m-l-5">8.80%</span>
				</span>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">75%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-success" style="width: 75%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-one mb-30">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<p class="mb-10 line-height-1">Product Sold</p>
					<h3 class="mb-0 fs-25">2000k</h3>
				</div>

				<span class="badge badge-red font-size-12">
					<i class="icofont-swoosh-down"></i>
					<span class="fw-600 m-l-5">6.10%</span>
				</span>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">60%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-warning" style="width: 60%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-3 col-sm-6">
		<div class="stats-card-one mb-30">
			<div class="d-flex justify-content-between align-items-center">
				<div>
					<p class="mb-10 line-height-1">New Customers</p>
					<h3 class="mb-0 fs-25">950</h3>
				</div>

				<span class="badge badge-red font-size-12">
					<i class="icofont-swoosh-down"></i>
					<span class="fw-600 m-l-5">5.70%</span>
				</span>
			</div>

			<div class="mt-15">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Monthly Goal</span>
					</div>
					<span class="fw-600">50%</span>
				</div>

				<div class="progress progress-sm mt-1">
					<div class="progress-bar bg-purple" style="width: 50%"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Stats Card -->

<!-- Month Sales Statistics -->
<div class="row">
	<div class="col-lg-8">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Monthly Revenue</h5>
				</div>

				<!-- File path: assets/js/apex-charts/month-sales-statistics.js -->
				<div id="month-sales-statistics" class="mh-100"></div>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Overview</h5>
				</div>
				
				<div class="media pt-2 pb-3 border-bottom">
					<div class="media-body">
						<h4 class="mt-0 mb-1 font-size-22 font-weight-normal">150,000</h4>
						<span class="text-muted">Total Visitors</span>
					</div>
					<i data-feather="users" class="icon align-self-center theme-color"></i>
				</div>

				<div class="media py-3 border-bottom">
					<div class="media-body">
						<h4 class="mt-0 mb-1 font-size-22 font-weight-normal">$ 25,000</h4>
						<span class="text-muted">Monthly Profit</span>
					</div>
					<i data-feather="dollar-sign" class="icon align-self-center theme-color"></i>
				</div>

				<div class="media py-3 border-bottom">
					<div class="media-body">
						<h4 class="mt-0 mb-1 font-size-22 font-weight-normal">29,000</h4>
						<span class="text-muted">Monthly Orders</span>
					</div>
					<i data-feather="check-circle" class="icon align-self-center theme-color"></i>
				</div>

				<div class="media pt-3">
					<div class="media-body">
						<h4 class="mt-0 mb-1 font-size-22 font-weight-normal">15,55</h4>
						<span class="text-muted">New Visitors</span>
					</div>
					<i data-feather="bar-chart" class="icon align-self-center theme-color"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Sales by Countries & Recent Order -->
<div class="row">
	<div class="col-lg-12 col-xl-5">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Sales by Countries</h5>
				</div>

				<!-- File path: assets/js/apex-charts/sales-by-countries.js -->
				<div id="sales-by-countries"></div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-7">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">Export</a>
					<h5 class="card-title">Recent Orders</h5>
				</div>
				
				<div class="height-365">
					<div class="table-responsive">
						<table class="table table-hover mb-0">
							<thead class="bort-none borpt-0">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Product</th>
									<th scope="col">Customer</th>
									<th scope="col">Price</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>#6791</strong></td>
									<td>Macbook Pro</td>
									<td>Colin Firth</td>
									<td>$289.50</td>
									<td><span class="badge badge_warning py-1">Pending</span></td>
								</tr>
								<tr>
									<td><strong>#6792</strong></td>
									<td>iPhone 11 pro</td>
									<td>Michael Sheen</td>
									<td>$389.50</td>
									<td><span class="badge badge_success py-1">Delivered</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6793</strong></td>
									<td>HeadPhone</td>
									<td>Tom Hardy</td>
									<td>$250.50</td>
									<td><span class="badge badge_danger py-1">Declined</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6794</strong></td>
									<td>Adidas shoes</td>
									<td>Daniel Craig</td>
									<td>$500.50</td>
									<td><span class="badge badge_success py-1">Delivered</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6795</strong></td>
									<td>Adidas shirts</td>
									<td>Jude Law</td>
									<td>$279.50</td>
									<td><span class="badge badge_success py-1">Declined</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6796</strong></td>
									<td>Nike shirts</td>
									<td>Idris Elba</td>
									<td>$259.50</td>
									<td><span class="badge badge_danger py-1">Declined</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6797</strong></td>
									<td>Nike caps</td>
									<td>Henry Cavill</td>
									<td>$249.50</td>
									<td><span class="badge badge_success py-1">Declined</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Today Sales</span>
					</div>
					<span class="fw-600">55.5k</span>
				</div>

				<div class="progress progress-sm mt-2">
					<div class="progress-bar bg-primary" style="width: 70%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Today Orders</span>
					</div>
					<span class="fw-600">50.2k</span>
				</div>

				<div class="progress progress-sm mt-2">
					<div class="progress-bar bg-success" style="width: 50%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="card mb-30">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<div class="d-flex align-items-center">
						<span>Today new Customers</span>
					</div>
					<span class="fw-600">45.5k</span>
				</div>

				<div class="progress progress-sm mt-2">
					<div class="progress-bar bg-danger" style="width: 45%"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Top Rated Products & Best Sellers -->
<div class="row">
	<div class="col-lg-12 col-xl-6">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Top Rated Products</h5>
				</div>
					
				<ul class="top-rated-products height-408">
					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product1.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">Macbook Pro</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">$1999</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>

					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product2.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">iPhone 11 pro</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">$999</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>

					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product3.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">HeadPhone</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">
							$499
						</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>

					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product4.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">Superstar shoes</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">
							<del>$90</del>
							$80
						</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>

					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product5.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">Badge of sport tee</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">
							$99
						</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>

					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product6.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">Nike shirts</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">$99</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>

					<li class="single-product">
						<a href="#">
							<?= Html::img('@web/images/product/product7.jpg', ['alt' => 'Image']); ?>
						</a>
						<a class="product-title" href="#">Nike caps</a>
						<p>There are many variations of passages...</p>
						<div class="price mr-2">
							$50
						</div>
						<div class="rating">
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
							<span class="lni lni-star-filled"></span>
						</div>
						<a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
							<span class="lni-angle-double-right"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-6">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Best Sellers Products</h5>
				</div>

				<div class="height-408">
					<div class="table-responsive">
						<table class="table m-0">
							<thead class="bort-none borpt-0">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Sales</th>
									<th>Price</th>
									<th>Category</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>#6760</strong></td>
									<td>Macbook Pro</td>
									<td>50,000</td>
									<td>$1999</td>
									<td>Laptop</td>
								</tr>
								<tr>
									<td><strong>#6761</strong></td>
									<td>iPhone 11 pro</td>
									<td>45,000</td>
									<td>$999</td>
									<td>Phone</td>
								</tr>
								<tr>
									<td><strong>#6762</strong></td>
									<td>HeadPhone</td>
									<td>40,000</td>
									<td>$679</td>
									<td>Electonics</td>
								</tr>
								<tr>
									<td><strong>#6763</strong></td>
									<td>Superstar shoes</td>
									<td>35,000</td>
									<td>$90</td>
									<td>Shoes</td>
								</tr>
								<tr>
									<td><strong>#6764</strong></td>
									<td>Badge of sport tee</td>
									<td>30,000</td>
									<td>$100</td>
									<td>Books</td>
								</tr>
								<tr>
									<td><strong>#6765</strong></td>
									<td>Nike shirts</td>
									<td>25,000</td>
									<td>$99</td>
									<td>Shirts</td>
								</tr>
								<tr>
									<td><strong>#6766</strong></td>
									<td>Nike Heritage86</td>
									<td>20,000</td>
									<td>$50</td>
									<td>Caps</td>
								</tr>
								<tr>
									<td><strong>#6767</strong></td>
									<td>Pacer Next Trail Sneakers</td>
									<td>15,000</td>
									<td>$70</td>
									<td>Shoes</td>
								</tr>
								<tr>
									<td><strong>#6768</strong></td>
									<td>Luxe Men's Graphic Tee</td>
									<td>15,000</td>
									<td>$45</td>
									<td>Shirts</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- User Activities & New Users -->
<div class="row">
	<div class="col-lg-12 col-xl-6">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<div class="btn btn-warning float-right">
						Daily Updates
					</div>

					<h5 class="card-title">User Activities</h5>
				</div>

				<div class="height-310">
					<div class="table-responsive">
						<table class="table m-0 text-center">
							<thead class="bort-none borpt-0">
								<tr>
									<th class="text-left">Date</th>
									<th>Pages / Visit</th>
									<th>New user</th>
									<th>Last week</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-left">01 Jun 2019</td>
									<td>50,000</td>
									<td>10,000</td>
									<td>80,000</td>
								</tr>
								<tr>
									<td class="text-left">02 Jun 2019</td>
									<td>45,000</td>
									<td>8,000</td>
									<td>70,000</td>
								</tr>
								<tr>
									<td class="text-left">03 Jun 2019</td>
									<td>42,000</td>
									<td>7,000</td>
									<td>65,000</td>
								</tr>
								<tr>
									<td class="text-left">04 Jun 2019</td>
									<td>40,000</td>
									<td>7,000</td>
									<td>70,000</td>
								</tr>
								<tr>
									<td class="text-left">05 Jun 2019</td>
									<td>56,000</td>
									<td>12,000</td>
									<td>90,000</td>
								</tr>
								<tr>
									<td class="text-left">06 Jun 2019</td>
									<td>55,000</td>
									<td>11,000</td>
									<td>95,000</td>
								</tr>
								<tr>
									<td class="text-left">07 Jun 2019</td>
									<td>44,000</td>
									<td>7,000</td>
									<td>60,000</td>
								</tr>
								<tr>
									<td class="text-left">08 Jun 2019</td>
									<td>34,000</td>
									<td>9,000</td>
									<td>56,000</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-xl-6">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header d-flex">
					<h5 class="card-title w-50 float-left">New Users</h5>

					<div class="dropdown card-dropdown text-right w-50 float-right dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i data-feather="settings" class="icon"></i>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Add new user</a>
							<a class="dropdown-item" href="&">View all users</a>
						</div>
					</div>
				</div>

				<div class="height-310">
					<div class="table-responsive">
						<table class="table m-0 text-vertical-middle">
							<thead class="bort-none borpt-0">
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<?= Html::img('@web/images/user/1.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
										Aaron Rossi
									</td>
									<td>aron@GrammarList.com</td>
									<td class="text-center">
										<span class="badge badge_warning">Pending</span>
									</td>
									<td class="text-center">
										<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
											<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
										</a>
										<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
											<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<?= Html::img('@web/images/user/2.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?> 
										Brad Joe
									</td>
									<td>brad.joe@gmail.com</td>
									<td class="text-center">
										<span class="badge badge_success">Active</span>
									</td>
									<td class="text-center">
										<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
											<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
										</a>
										<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
											<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<?= Html::img('@web/images/user/3.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?>
										Mitch Petty
									</td>
									<td>mitch.petty@gmail.com</td>
									<td class="text-center">
										<span class="badge badge_warning">Not Active</span>
									</td>
									<td class="text-center">
										<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
											<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
										</a>
										<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
											<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<?= Html::img('@web/images/user/4.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?>
										Petty Rossi
									</td>
									<td>petty.rossi@gmail.com</td>
									<td class="text-center"><span class="badge badge_warning">Pending</span></td>
									<td class="text-center">
										<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
											<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
										</a>
										<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
											<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<?= Html::img('@web/images/user/5.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?>
										Philip
									</td>
									<td>phili@gmail.com</td>
									<td class="text-center">
										<span class="badge badge_success">Active</span>
									</td>
									<td class="text-center">
										<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
											<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
										</a>
										<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
											<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<?= Html::img('@web/images/user/6.jpg', ['alt' => 'Image', 'class' => 'wh-30 mr-1 rounded']); ?>
										Nelms
									</td>
									<td>nelms@gmail.com</td>
									<td class="text-center">
										<span class="badge badge_success">Active</span>
									</td>
									<td class="text-center">
										<a class="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
											<i data-feather="edit-2" class="icon wh-15 mt-minus-3"></i>
										</a>
										<a class="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
											<i data-feather="x" class="icon wh-15 mt-minus-3"></i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Top Users Conversion Rate & Product Categories -->
<div class="row">
	<div class="col-lg-6">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<h5 class="card-title">Top Users Conversion Rate</h5>
				</div>

				<div class="height-365">
					<div class="table-responsive">
						<table class="table m-0 text-vertical-middle">
							<tbody>
								<tr>
									<td>
										<?= Html::img('@web/images/user/1.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Colin Firth</h6>
										<span class="fs-13">Sales Manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">85%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>

								<tr>
									<td>
										<?= Html::img('@web/images/user/2.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Michael Sheen</h6>
										<span class="fs-13">Marketing manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">80%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>

								<tr>
									<td>
										<?= Html::img('@web/images/user/3.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Tom Hardy</h6>
										<span class="fs-13">Shop manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">75%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>

								<tr>
									<td>
										<?= Html::img('@web/images/user/4.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Daniel Craigy</h6>
										<span class="fs-13">Sales Manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">70%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>

								<tr>
									<td>
										<?= Html::img('@web/images/user/5.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Ralph Fiennes</h6>
										<span class="fs-13">Marketing manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">65%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>

								<tr>
									<td>
										<?= Html::img('@web/images/user/6.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Jude Law</h6>
										<span class="fs-13">Shop manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">50%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>

								<tr>
									<td>
										<?= Html::img('@web/images/user/7.jpg', ['alt' => 'Image', 'class' => 'wh-40 mr-1 rounded']); ?>
									</td>
									<td>
										<h6 class="mb-0 fs-15">Henry Cavill</h6>
										<span class="fs-13">Sales Manager</small>
									</td>
									<td>
										<h6 class="mb-0 fs-15">50%</h6>
										<small class="fs-13">Conversion Rate</small> 
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card mb-30">
			<div class="card-body">
				<div class="card-header">
					<a href="#" class="btn btn-primary float-right">View all</a>
					<h5 class="card-title">Product Categories</h5>
				</div>

				<div class="d-flex flex-row product-cat-content height-365">
					<div class="w-50">
						<ul class="product-categories">
							<li><a href="#">Arts &amp; Crafts</a></li>
							<li><a href="#">Automotive</a></li>
							<li><a href="#">Baby</a></li>
							<li><a href="#">Beauty &amp; Personal Care</a></li>
							<li><a href="#">Books</a></li>
							<li><a href="#">Computers</a></li>
							<li><a href="#">Digital Music</a></li>
							<li><a href="#">Electronics</a></li>
							<li><a href="#">Kindle Store</a></li>
							<li><a href="#">Prime Video</a></li>
							<li><a href="#">Women's Fashion</a></li>
							<li><a href="#">Men's Fashion</a></li>
							<li><a href="#">Girls' Fashion</a></li>
							<li><a href="#">Deals</a></li>
							<li><a href="#">Health &amp; Household</a></li>
							<li><a href="#">Home &amp; Kitchen</a></li>
							<li><a href="#">Industrial &amp; Scientific</a></li>
							<li><a href="#">Boys' Fashion</a></li>
							<li><a href="#">Luggage</a></li>
							<li><a href="#">Movies &amp; TV</a></li>
							<li><a href="#">Music, CDs &amp; Vinyl</a></li>
							<li><a href="#">Pet Supplies</a></li>
							<li><a href="#">Software</a></li>
							<li><a href="#">Sports &amp; Outdoors</a></li>
							<li><a href="#">Tools &amp; Home Improvements</a></li>
							<li><a href="#">Toys &amp; Games</a></li>
							<li><a href="#">Video Games</a></li>
						</ul>
					</div>
					<div class="w-50">
						<ul class="product-categories">
							<li><a href="#">Arts &amp; Crafts</a></li>
							<li><a href="#">Automotive</a></li>
							<li><a href="#">Baby</a></li>
							<li><a href="#">Beauty &amp; Personal Care</a></li>
							<li><a href="#">Books</a></li>
							<li><a href="#">Computers</a></li>
							<li><a href="#">Digital Music</a></li>
							<li><a href="#">Electronics</a></li>
							<li><a href="#">Kindle Store</a></li>
							<li><a href="#">Prime Video</a></li>
							<li><a href="#">Women's Fashion</a></li>
							<li><a href="#">Men's Fashion</a></li>
							<li><a href="#">Girls' Fashion</a></li>
							<li><a href="#">Deals</a></li>
							<li><a href="#">Health &amp; Household</a></li>
							<li><a href="#">Home &amp; Kitchen</a></li>
							<li><a href="#">Industrial &amp; Scientific</a></li>
							<li><a href="#">Boys' Fashion</a></li>
							<li><a href="#">Luggage</a></li>
							<li><a href="#">Movies &amp; TV</a></li>
							<li><a href="#">Music, CDs &amp; Vinyl</a></li>
							<li><a href="#">Pet Supplies</a></li>
							<li><a href="#">Software</a></li>
							<li><a href="#">Sports &amp; Outdoors</a></li>
							<li><a href="#">Tools &amp; Home Improvements</a></li>
							<li><a href="#">Toys &amp; Games</a></li>
							<li><a href="#">Video Games</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>