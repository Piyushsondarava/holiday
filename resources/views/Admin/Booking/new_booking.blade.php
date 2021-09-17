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
			                        <span id="" class=""><span class="outer-tab"><span class=""><a class="tab-sec" id="" href="#" style="text-decoration:none;"><span class="tabspan"><i class="fas fa-book-reader"></i>&nbsp;Basic Info</span></a></span></span></span>
		                        </div>
		                        <div id="" class="" style="display:block;">
			                        <div id="" class="" style="width: 100%; visibility: visible;">
	                                    <div id="">
                                            <div class="tab_Detail">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4 col-lg-4">
                                                            <label>Lead Passenger Name*</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                                                </div>
                                                                <input name="passenger_name" type="text" maxlength="100" id="passenger_name" class="form-control form-control-sm" style="text-transform: capitalize">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-2 col-lg-2">
                                                            <label>Nationality*</label>
                                                            <select name="nationality" id="nationality" class="form-control form-control-sm">
                                        						<option value="0">Select</option>
                                        						<option value="Afghanistan">Afghanistan</option>
                                        						<option value="Aland Islands">Aland Islands</option>
                                        						<option value="Albania">Albania</option>
						
					                                        </select>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2">
                                                            <label>Total Pax*</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-users"></i></span>
                                                                </div>
                                                                <input name="total_pax" type="text" maxlength="3" id="total_pax" class="form-control form-control-sm" onkeypress="return isNumber(event);">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2">
                                                            <label>Service Start Date*</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input name="service_start_date" type="text" autocomplete="off" id="service_start_date" class="form-control form-control-sm hasDatepicker" onkeypress="return false">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2">
                                                            <label>Service End Date*</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                                                </div>
                                                                <input name="service_end_date" type="text" autocomplete="off" id="service_end_date" class="form-control form-control-sm hasDatepicker" onkeypress="return false">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-2 col-lg-2">
                                                            <label>Sales Person*</label>
                                                            <select name="sales_person" id="sales_person" class="form-control form-control-sm">
                                        						<option value="0">Select</option>
                                        						<option value="29">ceo</option>
                                        						<option value="37">VICKY</option>
                                        						<option value="38">ankush</option>
                                        					</select>
                                                        </div>
                                                        <div class="form-group col-md-2 col-lg-2">
                                                            <label>Operation Person*</label>
                                                            <select name="operation_person" id="operation_person" class="form-control form-control-sm">
                                        						<option value="0">Select</option>
                                        						<option value="29">ceo</option>
                                        						<option value="37">VICKY</option>
                                        					</select>
                                                        </div>
                                                        <div class="form-group col-md-2 col-lg-2">
                                                            <label>Client Type*</label>
                                                            <select name="client_type" onchange="getClientTypeForm(this.value)" id="client_type" class="form-control form-control-sm">
                                        						<option selected="selected" value="1">Agent</option>
                                        						<option value="2">Direct Client</option>
                                        						<option value="3">Corporate Client</option>
                                        					</select>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 agent_corporate_type">
                                                            <div id="" class="card card-success">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Lead Passenger's More Detail</h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-7 col-lg-7">
                                                                            <label>Lead Passenger Email-Id</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                </div>
                                                                                <input name="lead_passenger_email_id" type="text" autocomplete="off" maxlength="100" id="lead_passenger_email_id" class="form-control form-control-sm">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5 col-lg-5">
                                                                            <label>Contact No.</label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                                                </div>
                                                                                <input name="contact_no" type="text" autocomplete="off" maxlength="20" id="contact_no" class="form-control form-control-sm" onkeypress="return isNumber(event);">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-lg-12 col-md-12 agent_type">
                                                            <div class="card card-danger">
                                                                <div class="card-header">
                                                                    <h3 class="card-title"><span id="">Agent Information Form</span></h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div id="" class="row col-lg-12 col-md-12">
                                                                            <div class="form-group col-md-8 col-lg-8">
                                                                                <label>Agency Name*</label>
                                                                                <input name="agency_name" type="text" onchange="javascript:setTimeout('__doPostBack(\'\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="agency_name" class="form-control form-control-sm" autocomplete="off">
                                                                                <div id="divAgencies" class="aceList" style="display: none; visibility: hidden; position: absolute;">
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="form-group col-md-4 col-lg-4">
                                                                                <label>Agent Name*</label>
                                                                                <select name="agent_name" id="agent_name" class="form-control form-control-sm">
                                                                            		<option selected="selected" value="0">Select</option>
                                                                            
                                                                            	</select>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-lg-12 col-md-12 direct_client_type" style="display:none;">
                                                            <div class="card card-danger">
                                                                <div class="card-header">
                                                                    <h3 class="card-title"><span id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_lblDetailInfo">Direct Client Information Form</span></h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_divDirectClient" class="row col-lg-12 col-md-12">
                                                                            <div class="col-md-3 col-lg-3">
                                                                                <label>Mobile No*</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                                                                    </div>
                                                                                    <input name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtLeadPaxContactNo" type="text" maxlength="20" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtLeadPaxContactNo\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;return isNumber(event);" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_txtLeadPaxContactNo" class="form-control form-control-sm">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3 col-lg-3">
                                                                                <label>Email-Id</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                                                    </div>
                                                                                    <input name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtLeadPaxEmailId" type="text" maxlength="100" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_txtLeadPaxEmailId" class="form-control form-control-sm" style="text-transform: lowercase">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-3 col-lg-3">
                                                                                <label>Country*</label>
                                                                                <select name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$ddlLeadPaxCountry" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$ddlLeadPaxCountry\',\'\')', 0)" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_ddlLeadPaxCountry" class="form-control form-control-sm">
                                                                					<option selected="selected" value="0">Select</option>
                                                                					<option value="1">Afghanistan</option>
                                                                					<option value="2">Aland Islands</option>
                                                                					<option value="3">Albania</option>
                                                                					<option value="4">Algeria</option>
                                                                					<option value="5">American Samoa</option>
				                                                                </select>
                                                                            </div>
                                                                            <div class="form-group col-md-3 col-lg-3">
                                                                                <label>City</label>
                                                                                <select name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$ddlLeadPaxCity" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_ddlLeadPaxCity" class="form-control form-control-sm">
					                                                                <option selected="selected" value="0">Select</option>
				                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-9 col-lg-9">
                                                                                <label>Full Address</label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                                                                    </div>
                                                                                    <input name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtLeadPaxAddress" type="text" maxlength="250" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_txtLeadPaxAddress" class="form-control form-control-sm" style="text-transform: capitalize">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-3 col-lg-3">
                                                                                <label>Postcode</label>
                                                                                <input name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtLeadPaxPostcode" type="text" maxlength="10" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_txtLeadPaxPostcode" class="form-control form-control-sm">
                                                                            </div>
                                                                        </div>                                
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-lg-12 col-md-12 corporate_client_type" style="display:none;">
                                                            <div class="card card-danger">
                                                                <div class="card-header">
                                                                    <h3 class="card-title"><span id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_lblDetailInfo">Corporate Client Information Form</span></h3>
                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_divCorporateClient" class="row col-lg-12 col-md-12">
                                                                            <div class="form-group col-md-8 col-lg-8">
                                                                                <label>Company Name*</label>
                                                                                <input name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtCorporateClient" type="text" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$txtCorporateClient\',\'\')', 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_txtCorporateClient" class="form-control form-control-sm" autocomplete="off">
                                                                                <div id="divCorporates" class="aceList" style="display: none; visibility: hidden; position: absolute;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group col-md-4 col-lg-4">
                                                                                <label>Contact Person Name*</label>
                                                                                <select name="ctl00$ContentPlaceHolder1$tcNewBooking$tabBasicInfo$ddlCorporateClient" id="ContentPlaceHolder1_tcNewBooking_tabBasicInfo_ddlCorporateClient" class="form-control form-control-sm">
					                                                                <option selected="selected" value="0">Select</option>
				                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-2 col-lg-2">
                                                            <label>Booking Source</label>
                                                            <select name="booking_resource" onchange="getBookingResource(this.value)" id="booking_resource" class="form-control form-control-sm">
                                                        		<option selected="selected" value="0">Select</option>
                                                        		<option value="1">Lead</option>
                                                        		<option value="2">Quote</option>
                                                        
                                                        	</select>
                                                        </div>
                                                        <div class="form-group col-md-2 col-lg-2 lead_id" style="display:none;">
                                                            <label>Lead Id*</label>
                                                            <input name="lead_id" type="text" id="lead_id" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="form-group col-md-2 col-lg-2 quote_id" style="display:none;">
                                                            <label>Quote Id*</label>
                                                            <input name="quote_id" type="text" id="quote_id" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="form-group col-md-3 col-lg-3">
                                                            <label>Client Booking Refrence No.(If Any)</label>
                                                            <input name="client_booking_ref_no" type="text" maxlength="100" id="client_booking_ref_no" class="form-control form-control-sm">
                                                        </div>
                                                        <div class="form-group col-md-5 col-lg-5">
                                                            <label>Remarks</label>
                                                            <input name="remarks" type="text" id="remarks" class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 text-center">
                                                    <input type="submit" name="next" value="Next" onclick="return validateBasicInfo();" id="next" class="btn btn-success">
                                                    <input type="submit" name="reset" value="Reset" id="reset" class="btn btn-primary">
                                                </div>
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>                
				                        </div>
                                                
			                        </div>
		                        </div>
	                        </div>
                        </div>
                        <div class="card-body">
                                        
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
    function getClientTypeForm(value){
        // alert(value);
        if(value == 1){
            $(".agent_corporate_type").css("display","block");
            $(".agent_type").css("display","block");
            $(".direct_client_type").css("display","none");
            $(".corporate_client_type").css("display","none");
        }else if(value == 2){
            $(".agent_corporate_type").css("display","none");
            $(".agent_type").css("display","none");
            $(".direct_client_type").css("display","block");
            $(".corporate_client_type").css("display","none");
        }else if(value == 3){
            $(".agent_corporate_type").css("display","block");
            $(".agent_type").css("display","none");
            $(".direct_client_type").css("display","none");
            $(".corporate_client_type").css("display","block");
        }
    }
    
    function getBookingResource(value){
        if(value == 0){
            $(".lead_id").css("display","none");
            $(".quote_id").css("display","none");
        }else if(value == 1){
            $(".lead_id").css("display","block");
            $(".quote_id").css("display","none");
        }else if(value == 2){
            $(".lead_id").css("display","none");
            $(".quote_id").css("display","block");
        }
    }


</script>
@endsection


