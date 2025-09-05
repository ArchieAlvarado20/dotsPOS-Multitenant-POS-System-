  @extends("partials.main")
  @section("main-content")
	<div class="alert alert-info bg-info mt-5 text-dark">
		<span><strong>Note:</strong> This page provides complete details of cancelled transactions.</span><br />
		<span>Please note that this feature is currently in the testing and development phase.</span>
	</div>

<div class="row mt-5 justify-content-center">
					<div class="col-xl-5">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Transaction Details</h5>
							</div>
							<div class="card-body p-4">
								<form method="" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Transaction No.</label>
										<input name="" type="text" class="form-control" id="bsValidation1" placeholder="" value="{{ $cancel->transno }}" readonly>
									</div>

									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Product Code</label>
										<input name="" type="text" class="form-control" id="bsValidation2" placeholder="" value="{{$cancel->pcode}}" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Description</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" readonly value="{{$cancel->description}}">
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Price</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->price}}" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Quantity</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->qty}}" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Total</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->total}}" readonly>
									</div>
									
									<div class="col-md-12 mb-3">
										<label for="bsValidation3" class="form-label">Date Purchased</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->sdate}}" readonly>
									</div>
								</form>
							</div>
						</div>
					</div>
						<div class="col-xl-5">
						<div class="card mb-5">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Cancelation Details</h5>
							</div>
							<div class="card-body p-4">
						
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Void by Admin</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->void_by}}" readonly>
									</div>

									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Cancel Request By</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->cancel_request}}" readonly>
									</div>

									<div class="col-md-12 mb-3">
										<label for="bsValidation3" class="form-label">Reason</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->reason}}" readonly>
									</div>
									<div class="col-md-12 mb-3">
										<label for="bsValidation3" class="form-label">Date Cancelled</label>
										<input name="" type="text" class="form-control" id="bsValidation3" placeholder="" value="{{$cancel->date}}" readonly>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button class="btn btn-light px-4"><a href="{{BASE_URL}}/sales/cancelled-items">Back</a></button>
										</div>
									</div>
									
						
							</div>
						</div>
					</div>
				</div>
				
                @endsection