<?php echo view('_partial/header'); ?>
<?php echo view('_partial/navbar'); ?>
<?php echo view('_partial/sidebar'); ?>




<div class="d-flex flex-column-fluid">
	<!--begin::Container-->

	<!--begin::Container-->
	<div class="content">

		<div class="card card-custom">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Custom Demo
						<span class="d-block text-muted pt-2 font-size-sm">light head and row separator</span>
					</h3>
				</div>
				<div class="card-toolbar">
					<!--begin::Dropdown-->
					<div class="dropdown dropdown-inline mr-2">
						<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="la la-download"></i>Export</button>
						<!--begin::Dropdown Menu-->
						<div class="dropdown-menu dropdown-menu-sm dropdown-menu-left">
							<ul class="nav flex-column nav-hover">
								<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon la la-print"></i>
										<span class="nav-text">Print</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon la la-copy"></i>
										<span class="nav-text">Copy</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon la la-file-excel-o"></i>
										<span class="nav-text">Excel</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon la la-file-text-o"></i>
										<span class="nav-text">CSV</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon la la-file-pdf-o"></i>
										<span class="nav-text">PDF</span>
									</a>
								</li>
							</ul>
						</div>
						<!--end::Dropdown Menu-->
					</div>
					<!--end::Dropdown-->
					<!--begin::Button-->
					<a href="#" class="btn btn-primary font-weight-bolder">
						<i class="la la-plus"></i>New Record</a>
					<!--end::Button-->
				</div>
			</div>
			<div class="card-body">
				<!--begin: Datatable-->
				<div class="table-responsive">
					<table class="table table-separate table-head-custom table-checkable " id="kt_datatable">
						<thead>
							<tr>
								<th>Record ID</th>
								<th>Order ID</th>
								<th>Country</th>
								<th>Ship City</th>
								<th>Ship Address</th>
								<th>Company Agent</th>
								<th>Company Name</th>
								<th>Ship Date</th>
								<th>Status</th>
								<th>Type</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>64616-103</td>
								<td>Brazil</td>
								<td>São Félix do Xingu</td>
								<td>698 Oriole Pass</td>
								<td>Hayes Boule</td>
								<td>Casper-Kerluke</td>
								<td>10/15/2017</td>
								<td>5</td>
								<td>4</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>2</td>
								<td>54868-3377</td>
								<td>Vietnam</td>
								<td>Bình Minh</td>
								<td>8998 Delaware Court</td>
								<td>Humbert Bresnen</td>
								<td>Hodkiewicz and Sons</td>
								<td>4/24/2016</td>
								<td>2</td>
								<td>2</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>3</td>
								<td>0998-0355</td>
								<td>Philippines</td>
								<td>Palagao Norte</td>
								<td>91796 Sutteridge Road</td>
								<td>Jareb Labro</td>
								<td>Kuhlman Inc</td>
								<td>7/11/2017</td>
								<td>6</td>
								<td>2</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>4</td>
								<td>55154-6876</td>
								<td>China</td>
								<td>Jiannan</td>
								<td>8 Muir Drive</td>
								<td>Krishnah Tosspell</td>
								<td>Prosacco-Kessler</td>
								<td>2/5/2016</td>
								<td>1</td>
								<td>1</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>5</td>
								<td>49349-069</td>
								<td>United States</td>
								<td>Shawnee Mission</td>
								<td>782 Mallory Lane</td>
								<td>Dale Kernan</td>
								<td>Bernier and Sons</td>
								<td>7/23/2017</td>
								<td>5</td>
								<td>2</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>6</td>
								<td>53499-0393</td>
								<td>Ukraine</td>
								<td>Kozel’shchyna</td>
								<td>02 Briar Crest Parkway</td>
								<td>Halley Bentham</td>
								<td>Schoen-Metz</td>
								<td>2/21/2016</td>
								<td>1</td>
								<td>3</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>7</td>
								<td>43074-105</td>
								<td>Philippines</td>
								<td>De la Paz</td>
								<td>643 Mayer Road</td>
								<td>Burgess Penddreth</td>
								<td>DuBuque, Stanton and Stanton</td>
								<td>10/25/2016</td>
								<td>5</td>
								<td>2</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>8</td>
								<td>76328-333</td>
								<td>Portugal</td>
								<td>Sobreira</td>
								<td>6715 Dakota Parkway</td>
								<td>Cob Sedwick</td>
								<td>Homenick-Nolan</td>
								<td>2/18/2016</td>
								<td>3</td>
								<td>4</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>9</td>
								<td>21130-054</td>
								<td>France</td>
								<td>Roissy Charles-de-Gaulle</td>
								<td>4942 Darwin Hill</td>
								<td>Tabby Callaghan</td>
								<td>Daugherty-Considine</td>
								<td>3/26/2016</td>
								<td>2</td>
								<td>2</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>10</td>
								<td>68788-9890</td>
								<td>Dominican Republic</td>
								<td>Cristóbal</td>
								<td>854 Dapin Terrace</td>
								<td>Broddy Jarry</td>
								<td>Walter Group</td>
								<td>8/10/2016</td>
								<td>1</td>
								<td>2</td>
								<td nowrap="nowrap"></td>
							</tr>
							<tr>
								<td>11</td>
								<td>68428-740</td>
								<td>Morocco</td>
								<td>Tidili Mesfioua</td>
								<td>67 Talisman Drive</td>
								<td>Marjorie McGougan</td>
								<td>Littel and Sons</td>
								<td>2/8/2016</td>
								<td>6</td>
								<td>1</td>
								<td nowrap="nowrap"></td>
							</tr>

						</tbody>
					</table>
				</div>
				<!--end: Datatable-->
			</div>
		</div>
		<!--end::Card-->

	</div>
</div>



<?php echo view('_partial/footer'); ?>