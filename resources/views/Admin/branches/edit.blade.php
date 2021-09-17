@extends('Admin.include.app')
@section('content')


<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div id="" class="" style="width: 100%; visibility: visible;">
							<div id="" class="">
								<span id="" class="">
									<span class="outer-tab">
										<span class="">
											<a class="tab-sec" id="" href="#" style="text-decoration:none;">
												<span class="tabspan"><i class="fas fa-book-reader"></i>&nbsp;Fill & Update Your Information</span>
											</a>
										</span>
									</span>
								</span>
							</div>
							<div id="" class="" style="display:block;">
								<div id="" class="" style="width: 100%; visibility: visible;">
									<div id="">
										<div class="tab_Detail">
											<div class="card-body">
												<form name="addForm" id="addForm" method="POST" action="{{ route('branch.update',$data->id) }}">
                            					@csrf
                                                @method("PATCH")
													<div class="row">
														<div class="form-group col-md-3">
															<label>Country Name</label>
															<select id='country_id' class="country_id form-control @error('country_id') is-invalid @enderror" value="{{ $data->country_id }}" required autocomplete="country_id" autofocus name="country_id" style='width:100%;' onchange="get_State(this.value)">
																<option value="" selected hidden disabled>-- Choose Country --</option>
															</select>
															@error('country_id')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-md-3">
															<label>State Name</label>
															<select id='state_id' class="state_id form-control @error('state_id') is-invalid @enderror" value="{{ $data->state_id }}" required autocomplete="state_id" autofocus name="state_id" style='width:100%;' onchange="get_City(this.value)">
																<option value="" selected hidden disabled>-- Choose State --</option>
															</select>
															@error('state_id')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-md-3">
															<label>City Name</label>
															<select id='city_id' class="city_id form-control @error('city_id') is-invalid @enderror" value="{{ $data->city_id }}" required autocomplete="city_id" autofocus name="city_id" style='width:100%;'>
																<option value="" selected hidden disabled>-- Choose City --</option>
															</select>
															@error('city_id')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-md-2">
															<label>Currency Name</label>
															<select name="currency_id" id="currency_id" class="form-control form-control-sm @error('currency_id') is-invalid @enderror" value="{{ $data->currency_id }}" required autocomplete="currency_id" autofocus>
																<option value="0" disabled hidden selected>Select</option>
																@if(count($currencies) > 0)
																	@foreach($currencies as $k=>$v)
																		<option value="{{$v->id}}" {{ ($data->currency_id == $v->id)?'selected':'' }}>{{$v->name}}</option>
																	@endforeach
																@endif
																
															</select>
															@error('currency_id')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-md-4">
															<label>Branch Name</label>
															<input name="name" type="text" maxlength="100" id="name" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ $data->name }}" required autocomplete="name" autofocus>
															@error('name')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-md-3">
															<label>Branch Manager</label>
															<select id='branch_manager_id' class="branch_manager_id form-control @error('branch_manager_id') is-invalid @enderror" value="{{ $data->branch_manager_id }}" autocomplete="branch_manager_id" autofocus name="branch_manager_id" style='width:100%;'>
																<option value="" selected hidden disabled>-- Choose Branch Manager --</option>
															</select>
															@error('branch_manager_id')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-md-3">
															<label>Support No.</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<span class="input-group-text"><i class="fas fa-phone"></i></span>
																</div>
																<input name="support_no" type="text" maxlength="20" id="support_no" class="form-control form-control-sm @error('support_no') is-invalid @enderror" value="{{ $data->support_no }}" required autocomplete="support_no" autofocus oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');">
																@error('support_no')
																<span class="invalid-feedback" role="alert">
																	<strong>{{ $message }}</strong>
																</span>
																@enderror
															</div>
														</div>
														<div class="form-group col-md-1 text-center">
															<label>Active</label><br>
															<input id="status" type="checkbox" name="status" value="1"  {{ ($data->status == 1)?'checked':'' }} class="form-control form-control-sm @error('status') is-invalid @enderror" value="{{ $data->status }}" autocomplete="status" autofocus>
															@error('status')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror
														</div>
														<div class="form-group col-lg-2">
															<label>&nbsp;</label><br>
															<input type="submit" value="Update" class="btn btn-success btn-sm">
														</div>
													</div>
												</form>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
@section('script')
<script>
    var country_edit = "";
    var state_edit = "";
    var city_edit = "";
    var branch_manager_id_edit = "";
</script>
    @if(!empty($data->countryName->country_id))
        @if($data->countryName->country_id != "" && $data->countryName->country_name != "")
            <script>country_edit = '<option value="{{$data->countryName->country_id}}" selected="selected">{{$data->countryName->country_name}}</option>';</script>
        @endif
        @if($data->stateName->state_id != "" && $data->stateName->state_name != "")
            <script>state_edit = '<option value="{{$data->stateName->state_id}}" selected="selected">{{$data->stateName->state_name}}</option>';</script>
        @endif
        @if($data->cityName->city_id != "" && $data->cityName->city_name != "")
            <script>city_edit = '<option value="{{$data->cityName->city_id}}" selected="selected">{{$data->cityName->city_name}}</option>';</script>
        @endif
    @endif

<script>
	//Select 2 country, state, city
	var $country_id = $('#country_id');
	var $state = $('#state_id');
    var $city = $('#city_id');

	$country_id.select2({
		tokenSeparators: [","],
		minimumInputLength: 0,
		ajax: {
			type: 'POST',
			url: "{{ route('country') }}",
			dataType: 'json',
			data: function(term) {
				var query = {
					term: term,
					search: term.term,
					page: term.page || 1
				}
				return query;

			},
			processResults: function(data) {
				console.log(data);
				return {
					results: $.map(data.items, function(item) {
						//console.log(item);
						return {
							text: item.name,
							id: item.id
						}

					})
				};
			}
		}
	});

	$country_id.append(country_edit);
	$country_id.trigger('change');

	
	function state_select2() {
		$state.select2({
			tokenSeparators: [","],
			minimumInputLength: 0,
			ajax: {
				type: 'POST',
				url: "{{ route('state') }}",
				dataType: 'json',
				data: function(term) {
					var query = {
						term: term,
						search: term.term,
						country_id: $('#country_id').val(),
						page: term.page || 1
					}
					return query;

				},
				processResults: function(data) {
					return {
						results: $.map(data.items, function(item) {
							//console.log(item);
							return {
								text: item.name,
								id: item.id
							}

						})
					};
				}
			}
		});
	}

	state_select2();
	$state.append(state_edit);
	$state.trigger('change');

	function city_select2() {
		$city.select2({
			tokenSeparators: [","],
			minimumInputLength: 0,
			ajax: {
				type: 'POST',
				url: "{{ route('city') }}",
				dataType: 'json',
				data: function(term) {
					var query = {
						term: term,
						search: term.term,
						state_id: $('#state_id').val(),
						page: term.page || 1
					}
					return query;

				},
				processResults: function(data) {
					return {
						results: $.map(data.items, function(item) {
							//console.log(item);
							return {
								text: item.name,
								id: item.id
							}

						})
					};
				}
			}
		});
	}

	city_select2();
	$city.append(city_edit);
	$city.trigger('change');

	function get_State(value){
		$("body").find("#select2-state_id-container").html("-- Choose State --");
		$("body").find("#state_id").val("");
		state_select2();
		$state.trigger('change');
	}
	function get_City(value){
		$("body").find("#select2-city_id-container").html("-- Choose City --");
		$("body").find("#city_id").val("");
		city_select2();
		$city.trigger('change');
	}

</script>

<script>
	var $branch_manager_id = $('#branch_manager_id');
	$branch_manager_id.select2({
		tokenSeparators: [","],
		minimumInputLength: 0,
		ajax: {
			type: 'POST',
			url: "{{ route('branch-manager') }}",
			dataType: 'json',
			data: function(term) {
				var query = {
					term: term,
					search: term.term,
					page: term.page || 1
				}
				return query;

			},
			processResults: function(data) {
				return {
					results: $.map(data.items, function(item) {
						return {
							text: item.name,
							id: item.id
						}

					})
				};
			}
		}
	});

	$branch_manager_id.append(branch_manager_id_edit);
	$branch_manager_id.trigger('change');

</script>

<script>
	$(function() {
        $(document).ready(function() {
            $.validator.methods.isJSON = function(value, element) {
                if (typeof(value) !== 'string') {
                    return false;
                }
                try {
                    JSON.parse(value);
                    return true;
                } catch (e) {
                    return false;
                }
            }
            $("#addForm").validate({
                rules: {
                    country_id: {
                        required: true
                    },
                    state_id: {
                        required: true,
                    },
                    city_id: {
                        required: true,
                    },
                    
                    currency_id: {
                        required: true,
                    },
                    
                    name: {
                        required: true,
                    },
                    
                    support_no: {
                        required: true,
                    },
                    
                    
                },
                messages: {
                    name: {
                        required: "Please provide a name"
                    },
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
                }
            });
        });
    });
</script>
@endsection