@extends("admin.base")
@section('content')
<div class="card card-outline card-primary rounded-0 shadow">
	<div class="card-header">
		<h3 class="card-title">List of Insurances</h3>
				<div class="card-tools">
			<a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-sm btn-primary"><span class="fas fa-plus"></span>  Add New Insurance</a>
		</div>
			</div>
	<div class="card-body">
		<div class="container-fluid">
        <div class="container-fluid">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover table-striped dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
				<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="15%">
					<col width="15%">
					<col width="30%">
					<col width="10%">
					<col width="10%">
				</colgroup>
				<thead>
					<tr class="bg-gradient-primary text-light" role="row"><th class="py-1 px-2 align-middle sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 67.3167px;" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th><th class="py-1 px-2 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 236.967px;" aria-label="Date Registered: activate to sort column ascending">Date Registered</th><th class="py-1 px-2 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 236.983px;" aria-label="Ref. Code: activate to sort column ascending">Ref. Code</th><th class="py-1 px-2 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 236.967px;" aria-label="Client: activate to sort column ascending">Client</th><th class="py-1 px-2 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 491.467px;" aria-label="Vehicle Reg. #: activate to sort column ascending">Vehicle Reg. #</th><th class="py-1 px-2 align-middle sorting_disabled" rowspan="1" colspan="1" style="width: 152.167px;" aria-label="Status">Status</th><th class="py-1 px-2 align-middle sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 152.133px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
				</thead>
				<tbody>
											
											
											
											
									<tr class="odd">
							<td class="text-center py-1 px-2 align-middle sorting_1">1</td>
							<td class="py-1 px-2 align-middle">2015-02-18 00:00</td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00004</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00002 - Blake, Claire C</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">8798754564</p></td>
							<td class="text-center py-1 px-2 align-middle">
								<span class="rounded-pill badge badge-danger bg-gradient-danger px-3">Expired</span>							</td>
							<td class="py-1 px-2 align-middle" align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
								  	<a class="dropdown-item" href="./?page=insurances/view_insurance&amp;id=5" data-id="5"><span class="fa fa-eye text-dark"></span> View</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item edit_data" href="javascript:void(0)" data-id="5"><span class="fa fa-edit text-primary"></span> Edit</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="5"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
						</tr><tr class="even">
							<td class="text-center py-1 px-2 align-middle sorting_1">2</td>
							<td class="py-1 px-2 align-middle">2022-01-29 00:00</td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00003</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00002 - Blake, Claire C</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">8798754564</p></td>
							<td class="text-center py-1 px-2 align-middle">
								<span class="rounded-pill badge badge-success bg-gradient-teal px-3">Active</span>							</td>
							<td class="py-1 px-2 align-middle" align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
								  	<a class="dropdown-item" href="./?page=insurances/view_insurance&amp;id=4" data-id="4"><span class="fa fa-eye text-dark"></span> View</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item edit_data" href="javascript:void(0)" data-id="4"><span class="fa fa-edit text-primary"></span> Edit</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="4"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
						</tr><tr class="odd">
							<td class="text-center py-1 px-2 align-middle sorting_1">3</td>
							<td class="py-1 px-2 align-middle">2022-02-03 00:00</td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00001</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00001 - Cooper, Mark D</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">GBN-23141507</p></td>
							<td class="text-center py-1 px-2 align-middle">
								<span class="rounded-pill badge badge-success bg-gradient-teal px-3">Active</span>							</td>
							<td class="py-1 px-2 align-middle" align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
								  	<a class="dropdown-item" href="./?page=insurances/view_insurance&amp;id=1" data-id="1"><span class="fa fa-eye text-dark"></span> View</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item edit_data" href="javascript:void(0)" data-id="1"><span class="fa fa-edit text-primary"></span> Edit</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="1"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
						</tr><tr class="even">
							<td class="text-center py-1 px-2 align-middle sorting_1">4</td>
							<td class="py-1 px-2 align-middle">2022-02-08 00:00</td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00002</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">202202-00001 - Cooper, Mark D</p></td>
							<td class="py-1 px-2 align-middle"><p class="m-0 truncate-1">654985158</p></td>
							<td class="text-center py-1 px-2 align-middle">
								<span class="rounded-pill badge badge-success bg-gradient-teal px-3">Active</span>							</td>
							<td class="py-1 px-2 align-middle" align="center">
								 <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
				                  		Action
				                    <span class="sr-only">Toggle Dropdown</span>
				                  </button>
				                  <div class="dropdown-menu" role="menu">
								  	<a class="dropdown-item" href="./?page=insurances/view_insurance&amp;id=3" data-id="3"><span class="fa fa-eye text-dark"></span> View</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item edit_data" href="javascript:void(0)" data-id="3"><span class="fa fa-edit text-primary"></span> Edit</a>
				                    <div class="dropdown-divider"></div>
				                    <a class="dropdown-item delete_data" href="javascript:void(0)" data-id="3"><span class="fa fa-trash text-danger"></span> Delete</a>
				                  </div>
							</td>
						</tr></tbody>
			</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
		</div>
		</div>
	</div>
</div>
@endsection
