@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Main Content Header -->
    <div class="main-content-header">
        <h1>Tables</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <span class="active">Tables</span>
            </li>
        </ol>
    </div>
    <!-- End Main Content Header -->
	
	<!-- Recent Orders & Social Marketing -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-30">
				<div class="card-body">
					<div class="card-header">
						<a href="#" class="btn btn-primary float-right">View all</a>
						<h5 class="card-title">
							Recent Orders
						</h5>
					</div>
					
					<div class="table-responsive">
						<table class="table table-hover text-vertical-middle mb-0">
							<thead class="bort-none borpt-0">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Customer</th>
									<th scope="col">Product</th>
									<th scope="col">Date</th>
									<th scope="col">Price</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>#6791</strong></td>
									<td>
										<img src="{{ asset('assets/images/user/1.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Colin Firth
									</td>
									<td>
										<img src="{{ asset('assets/images/product/product1.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Macbook Pro
									</td>
									<td>1 Jun 2019</td>
									<td>$289.50</td>
									<td><span class="badge badge_warning py-1">Pending</span></td>
								</tr>
								<tr>
									<td><strong>#6792</strong></td>
									<td>
										<img src="{{ asset('assets/images/user/2.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Michael Sheen
									</td>
									<td>
										<img src="{{ asset('assets/images/product/product2.jpg') }}" alt="Image" class="wh-30 mr-1 rounded"> 
										iPhone 11 pro
									</td>
									<td>2 Jun 2019</td>
									<td>$389.50</td>
									<td><span class="badge badge_success py-1">Delivered</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6793</strong></td>
									<td>
										<img src="{{ asset('assets/images/user/3.jpg') }}" alt="Image" class="wh-30 mr-1 rounded"> 
										Tom Hardy
									</td>
									<td>
										<img src="{{ asset('assets/images/product/product3.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										HeadPhone
									</td>
									<td>3 Jun 2019</td>
									<td>$250.50</td>
									<td><span class="badge badge_danger py-1">Declined</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6794</strong></td>
									<td>
										<img src="{{ asset('assets/images/user/4.jpg') }}" alt="Image" class="wh-30 mr-1 rounded"> 
										Daniel Craig
									</td>
									<td>
										<img src="{{ asset('assets/images/product/product4.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Adidas shoes
									</td>
									<td>4 Jun 2019</td>
									<td>$500.50</td>
									<td><span class="badge badge_success py-1">Delivered</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6795</strong></td>
									<td>
										<img src="{{ asset('assets/images/user/5.jpg') }}" alt="Image" class="wh-30 mr-1 rounded"> 
										Jude Law
									</td>
									<td>
										<img src="{{ asset('assets/images/product/product5.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Adidas shirts
									</td>
									<td>4 Jun 2019</td>
									<td>$279.50</td>
									<td><span class="badge badge_success py-1">Declined</span>
									</td>
								</tr>
								<tr>
									<td><strong>#6796</strong></td>
									<td>
										<img src="{{ asset('assets/images/user/6.jpg') }}" alt="Image" class="wh-30 mr-1 rounded"> 
										Idris Elba
									</td>
									<td>
										<img src="{{ asset('assets/images/product/product6.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Nike shirts
									</td>
									<td>5 Jun 2019</td>
									<td>$259.50</td>
									<td><span class="badge badge_danger py-1">Declined</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Products of the Month -->
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-30">
				<div class="card-body">
					<div class="card-header">
						<h5 class="card-title">Products of the Month</h5>
					</div>

					<div class="table-responsive">
						<table class="table table-hover text-vertical-middle mb-0">
							<thead class="bort-none borpt-0">
								<tr>
									<th scope="col">ID</th>
									<th scope="col">Product</th>
									<th scope="col">Customer</th>
									<th scope="col">Status</th>
									<th scope="col">Invoice</th>
									<th scope="col">Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><strong>#6791</strong></td>
									<td>
										<img src="{{ asset('assets/images/product/product1.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Macbook Pro
									</td>
									<td>Colin Firth</td>
									<td><span class="badge badge_success py-1">Active</span></td>
									<td>40</td>
									<td>$289.50</td>
								</tr>
								<tr>
									<td><strong>#6792</strong></td>
									<td>
										<img src="{{ asset('assets/images/product/product2.jpg') }}" alt="Image" class="wh-30 mr-1 rounded"> 
										iPhone 11 pro
									</td>
									<td>Michael Sheen</td>
									<td><span class="badge badge_success py-1">Active</span>
									</td>
									<td>45</td>
									<td>$389.50</td>
								</tr>
								<tr>
									<td><strong>#6793</strong></td>
									<td>
										<img src="{{ asset('assets/images/product/product3.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										HeadPhone
									</td>
									<td>Tom Hardy</td>
									<td><span class="badge badge_success py-1">Active</span>
									</td>
									<td>50</td>
									<td>$250.50</td>
								</tr>
								<tr>
									<td><strong>#6794</strong></td>
									<td>
										<img src="{{ asset('assets/images/product/product4.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Adidas shoes
									</td>
									<td>Daniel Craig</td>
									<td><span class="badge badge_warning py-1">Pending</span>
									</td>
									<td>55</td>
									<td>$500.50</td>
								</tr>
								<tr>
									<td><strong>#6795</strong></td>
									<td>
										<img src="{{ asset('assets/images/product/product5.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Adidas shirts
									</td>
									<td>Jude Law</td>
									<td><span class="badge badge_success py-1">Active</span>
									</td>
									<td>60</td>
									<td>$279.50</td>
								</tr>
								<tr>
									<td><strong>#6796</strong></td>
									<td>
										<img src="{{ asset('assets/images/product/product6.jpg') }}" alt="Image" class="wh-30 mr-1 rounded">
										Nike shirts
									</td><td>Idris Elba</td>
									<td><span class="badge badge_danger py-1">Declined</span>
									</td>
									<td>65</td>
									<td>$259.50</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
    <!-- Basic Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Basic Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th class="text-center">Pages / Visit</th>
                                    <th class="text-center">New user</th>
                                    <th class="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center">5000</td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center">5400</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center">5500</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center">7400</td>
                                    <td class="text-center">4500</td>
                                    <td class="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center">7600</td>
                                    <td class="text-center">2300</td>
                                    <td class="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Table -->

    <!-- Data Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Data Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aaron Rossi</td>
                                    <td>aaron@GrammarList.com</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center"><span class="badge badge-info">Pending</span></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link text-success p-0 mr-2">
                                            <i data-feather="edit-2" class="icon wh-15"></i>
                                        </button>
                                        <button type="button" class="btn btn-link text-danger p-0">
                                            <i data-feather="x" class="icon wh-15"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brad Joe</td>
                                    <td>brad.joe@gmail.com</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center"><span class="badge badge-success">Active</span></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link text-success p-0 mr-2">
                                            <i data-feather="edit-2" class="icon wh-15"></i>
                                        </button>
                                        <button type="button" class="btn btn-link text-danger p-0">
                                            <i data-feather="x" class="icon wh-15"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mitch Petty</td>
                                    <td>mitch.petty@gmail.com</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center"><span class="badge badge-warning">Not Active</span></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link text-success p-0 mr-2">
                                            <i data-feather="edit-2" class="icon wh-15"></i>
                                        </button>
                                        <button type="button" class="btn btn-link text-danger p-0">
                                            <i data-feather="x" class="icon wh-15"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip</td>
                                    <td>philip@gmail.com</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center"><span class="badge badge-success">Active</span></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link text-success p-0 mr-2">
                                            <i data-feather="edit-2" class="icon wh-15"></i>
                                        </button>
                                        <button type="button" class="btn btn-link text-danger p-0">
                                            <i data-feather="x" class="icon wh-15"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nelms</td>
                                    <td>nelms@gmail.com</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center"><span class="badge badge-success">Active</span></td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link text-success p-0 mr-2">
                                            <i data-feather="edit-2" class="icon wh-15"></i>
                                        </button>
                                        <button type="button" class="btn btn-link text-danger p-0">
                                            <i data-feather="x" class="icon wh-15"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Data Table -->

    <!-- Dark Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Dark Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th class="text-center">Pages / Visit</th>
                                    <th class="text-center">New user</th>
                                    <th class="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center">5000</td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center">5400</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center">5500</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center">7400</td>
                                    <td class="text-center">4500</td>
                                    <td class="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center">7600</td>
                                    <td class="text-center">2300</td>
                                    <td class="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Dark Table -->

    <!-- Dark & light Table head options -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Dark & light Table head options</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table m-0">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Dark & light Table head options -->

    <!-- Striped Rows Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Striped Rows Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-striped light table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th class="text-center">Pages / Visit</th>
                                    <th class="text-center">New user</th>
                                    <th class="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center">5000</td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center">5400</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center">5500</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center">7400</td>
                                    <td class="text-center">4500</td>
                                    <td class="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center">7600</td>
                                    <td class="text-center">2300</td>
                                    <td class="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Striped Rows Table -->

    <!-- Striped Dark Rows Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Striped Dark Rows Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th class="text-center">Pages / Visit</th>
                                    <th class="text-center">New user</th>
                                    <th class="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center">5000</td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center">5400</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center">5500</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center">7400</td>
                                    <td class="text-center">4500</td>
                                    <td class="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center">7600</td>
                                    <td class="text-center">2300</td>
                                    <td class="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Striped Dark Rows Table -->

    <!-- Bordered Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Bordered Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 text-center table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th class="text-center">Pages / Visit</th>
                                    <th class="text-center">New user</th>
                                    <th class="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center">5000</td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center">5400</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center">5500</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center">7400</td>
                                    <td class="text-center">4500</td>
                                    <td class="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center">7600</td>
                                    <td class="text-center">2300</td>
                                    <td class="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bordered Table -->

    <!-- Bordered Dark Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Bordered Dark Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 text-center table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th class="text-center">Pages / Visit</th>
                                    <th class="text-center">New user</th>
                                    <th class="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td class="text-center">5000</td>
                                    <td class="text-center">1000</td>
                                    <td class="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td class="text-center">5400</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td class="text-center">5500</td>
                                    <td class="text-center">1400</td>
                                    <td class="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td class="text-center">7400</td>
                                    <td class="text-center">4500</td>
                                    <td class="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td class="text-center">7600</td>
                                    <td class="text-center">2300</td>
                                    <td class="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bordered Dark Table -->

    <!-- Borderless Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Borderless Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Pages / Visit</th>
                                    <th>New user</th>
                                    <th>Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td>5000</td>
                                    <td>1000</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td>5400</td>
                                    <td>1400</td>
                                    <td>4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td>5500</td>
                                    <td>1400</td>
                                    <td>7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td>7400</td>
                                    <td>4500</td>
                                    <td>8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td>7600</td>
                                    <td>2300</td>
                                    <td>5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Borderless Table -->

    <!-- Borderless Dark Table -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-30">
                <div class="card-body">
                    <div class="card-header">
                        <h5 class="card-title">Borderless Dark Table</h5>
                    </div>

                    <div class="table-responsive">
                        <table class="table m-0 table-borderless table-dark">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Pages / Visit</th>
                                    <th>New user</th>
                                    <th>Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td>5000</td>
                                    <td>1000</td>
                                    <td>4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td>5400</td>
                                    <td>1400</td>
                                    <td>4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td>5500</td>
                                    <td>1400</td>
                                    <td>7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td>7400</td>
                                    <td>4500</td>
                                    <td>8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td>7600</td>
                                    <td>2300</td>
                                    <td>5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Borderless Dark Table -->
@endsection
