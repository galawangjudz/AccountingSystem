$(document).ready(function() {


	let dt = new Date().toISOString().slice(0, 10);
	$('#date_of_sale').val(dt);

	// Invoice Type
	$('#invoice_type').change(function() {
		var invoiceType = $("#invoice_type option:selected").text();
		$(".invoice_type").text(invoiceType);
	});

	
	
	// Load dataTables
	$("#data-table").dataTable();

	$("#data-table-lot").dataTable();

	
	$("#action_add_lot").click(function(e) {
		e.preventDefault();
	    actionAddLot();
	});

	// password strength
	var options = {
        onLoad: function () {
            $('#messages').text('Start typing password');
        },
        onKeyUp: function (evt) {
            $(evt.target).pwstrength("outputErrorList");
        }
    };
    $('#password').pwstrength(options);

	// add project
	$("#action_add_project").click(function(e) {
		e.preventDefault();
		actionAddProject();
	});

	// add house
	$("#action_add_house").click(function(e) {
		e.preventDefault();
		actionAddHouse();
	});

	// password strength
	var options = {
		onLoad: function () {
			$('#messages').text('Start typing password');
		},
		onKeyUp: function (evt) {
			$(evt.target).pwstrength("outputErrorList");
		}
	};
	$('#password').pwstrength(options);


	// add user
	$("#action_add_user").click(function(e) {
		e.preventDefault();
	    actionAddUser();
	});

	// update customer
	$(document).on('click', "#action_update_user", function(e) {
		e.preventDefault();
		updateUser();
	});

	// delete user
	$(document).on('click', ".delete-user", function(e) {
        e.preventDefault();

        var userId = 'action=delete_user&delete='+ $(this).attr('data-user-id'); //build a post data structure
        var user = $(this);

	    $('#delete_user').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteUser(userId);
			$(user).closest('tr').remove();
        });
   	});

   	// delete customer
	$(document).on('click', ".delete-customer", function(e) {
        e.preventDefault();

        var userId = 'action=delete_customer&delete='+ $(this).attr('data-customer-id'); //build a post data structure
        var user = $(this);

	    $('#delete_customer').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteCustomer(userId);
			$(user).closest('tr').remove();
        });
   	});

	// update customer
	$(document).on('click', "#action_update_customer", function(e) {
		e.preventDefault();
		updateCustomer();
	});

	// update lot
	$(document).on('click', "#action_update_lot", function(e) {
		e.preventDefault();
		updateLot();
	});

	// update project
	$(document).on('click', "#action_update_project", function(e) {
		e.preventDefault();
		updateProject();
	});

	// update house
	$(document).on('click', "#action_update_house", function(e) {
		e.preventDefault();
		updateHouse();
	});

	// login form
	$(document).bind('keypress', function(e) {
		e.preventDefault;
		
        if(e.keyCode==13){
            $('#btn-login').trigger('click');
        }
    });

	$(document).on('click','#btn-login', function(e){
		e.preventDefault;
		actionLogin();
	});

	// delete csr
	$(document).on('click', ".delete-csr", function(e) {
        e.preventDefault();

        var csrId = 'action=delete_csr&delete='+ $(this).attr('data-csr-id'); //build a post data structure
        var csr = $(this);

	    $('#delete_csr').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteCSR(csrId);
			$(csr).closest('tr').remove();
        });
   	});

	// delete lot
	$(document).on('click', ".delete-lot", function(e) {
        e.preventDefault();

        var lotId = 'action=delete_lot&delete='+ $(this).attr('data-lot-id'); //build a post data structure
        var lot = $(this);

	    $('#confirm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteLot(lotId);
			$(lot).closest('tr').remove();
        });
   	});

	// delete project
	$(document).on('click', ".delete-project", function(e) {
		e.preventDefault();

		var projectId = 'action=delete_project&delete='+ $(this).attr('data-project-id'); //build a post data structure
		var project = $(this);

		$('#confirm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteProject(projectId);
			$(project).closest('tr').remove();
		});
	});
	// delete ra
	$(document).on('click', ".delete-ra", function(e) {
		e.preventDefault();

		var raId = 'action=delete_ra&delete='+ $(this).attr('data-ra-id'); //build a post data structure
		var ra = $(this);
		
		$('#delete_ra').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteRA(raId);
			$(ra).closest('tr').remove();
		});
		
		});

	// delete house model
	$(document).on('click', ".delete-house", function(e) {
		e.preventDefault();

		var houseId = 'action=delete_house&delete='+ $(this).attr('data-house-id'); //build a post data structure
		var house = $(this);

		$('#confirm').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteHouse(houseId);
			$(house).closest('tr').remove();
		});
	});
	//agent
	$(document).on('click', ".item-select", function(e) {

		e.preventDefault;

		var agent = $(this);

		$('#insert').modal({ backdrop: 'static', keyboard: false }).one('click', '#selected', function(e) {


		 var itemText = $('#insert').find("option:selected").text();
		 var itemValue = $('#insert').find("option:selected").val();
		
		 //alert(itemValue);
		 
		var data = itemValue.split("-");
		 
		var code = data[0];
		var pos = data[1];


		 $(agent).closest('tr').find('.agent-name').val(itemText);
		 $(agent).closest('tr').find('.agent-code').val(code);
		 $(agent).closest('tr').find('.agent-pos').val(pos);



		 //updateTotals('.calculate');
		 //calculateTotal();

		});

		return false;

	});

	//ra stat
	$(document).on('change', "#ra_stat", function(e) {
		e.preventDefault();  

		var stat = $("#ra_stat").val();
		//alert(stat);
		//var raId = 'action=ra_stat&stat="'+ stat + '"&id='+ $(this).attr('csr-id')+'&lot_lid=' + $(this).attr('csr-lot-lid'); //build a post data structure
		var raId = 'action=ra_stat&stat="'+ stat + '"&id='+ $(this).attr('ra-id')
		//alert(csrId);
	
		$(".modal-body #upstat").val(stat);
		$('#update_stat').modal({ backdrop: 'static', keyboard: false }).one('click', '#confirm', function() {
			RaStat(raId);
			//$(csr).closest('tr').remove();
		
		});
	
	});


	//change approval
	$(document).on('change', ".status-list", function(e) {
		e.preventDefault();

		var stat = $("#status_list").val();
		//alert(stat);
        var csrId = 'action=update_stat&stat="'+ stat + '"&id='+ $(this).attr('csr-id')+'&lot_lid=' + $(this).attr('csr-lot-lid'); //build a post data structure
		//var csrId = 'action=update_stat&stat="'+ stat + '"&id='+ $(this).attr('csr-id')
		//alert(csrId);
	
		$(".modal-body #upstat").val(stat);
	    $('#update_stat').modal({ backdrop: 'static', keyboard: false }).one('click', '#confirm', function() {
			UpdateStat(csrId);
			//$(csr).closest('tr').remove();
		
		});
   	});


	
	// create customer
	$("#action_create_customer").click(function(e) {
		e.preventDefault();
	    actionCreateCustomer();
	});

   	
   	$(document).on('click', ".select-customer", function(e) {

		e.preventDefault;

		var customer = $(this);

		$('#insert_customer').modal({ backdrop: 'static', keyboard: false });

		return false;

   	});

	$(document).on('click', ".customer-select", function(e) {

		var customer_last_name = $(this).attr('data-customer-lname');
		var customer_first_name = $(this).attr('data-customer-fname');
		var customer_middle_name = $(this).attr('data-customer-mname');
		var customer_email = $(this).attr('data-customer-email');
		var customer_phone = $(this).attr('data-customer-phone');

		var customer_address_1 = $(this).attr('data-customer-address-1');
		var customer_city_prov = $(this).attr('data-customer-city-prov');
		var customer_zip_code = $(this).attr('data-customer-zip-code');

	   

		$('#customer_last_name_1').val(customer_last_name);
		$('#customer_first_name_1').val(customer_first_name);
		$('#customer_middle_name_1').val(customer_middle_name);
		$('#customer_email').val(customer_email);
		$('#customer_phone').val(customer_phone);

		$('#customer_address_1').val(customer_address_1);
		$('#customer_city_prov').val(customer_city_prov);
		$('#customer_zip_code').val(customer_zip_code);


		$('#insert_customer').modal('hide');

	});
   	

		
	//select lot

	$(document).on('click', ".select-lot", function(e) {

		e.preventDefault;

		var lot = $(this);
		

		$('#insert_lot').modal({ backdrop: 'static', keyboard: false });
	

		return false;

	});

	//select lot

	$(document).on('click', ".select-house", function(e) {

		e.preventDefault;

		var house = $(this);
		

		$('#insert_house').modal({ backdrop: 'static', keyboard: false });
	

		return false;

	});

	$(document).on('click', ".lot-select", function(e) {

		let prod_lid = $(this).attr('data-lot-lid');
		var prod_site =  $(this).attr('data-lot-site');
		var prod_block = $(this).attr('data-lot-block');
		var prod_lot = $(this).attr('data-lot-lot');

		var prod_lot_area = $(this).attr('data-lot-lot-area');
		var prod_price_sqm = $(this).attr('data-lot-per-sqm');

		var lot_status = $(this).attr('data-lot-status');

		//alert(lot_status);
	
		$('#l_lid').val(prod_lid);
		$('#l_site').val(prod_site);
		
		//$('#prod_code').val(prod_site);
		$('#l_block').val(prod_block);
		$('#l_lot').val(prod_lot);

		$('#lot_area').val(prod_lot_area);
		$('#price_per_sqm').val(prod_price_sqm);
		subtotal = parseInt(prod_lot_area) * parseFloat(prod_price_sqm);
		$('#amount').val(subtotal.toFixed(2))
		var lot_discount = 0
		var lot_disc_amount = 0
		$('#lot_disc').val(lot_discount.toFixed(2));
		$('#lot_disc_amt').val(lot_disc_amount.toFixed(2));
		$('#lcp').val(subtotal.toFixed(2));

		if(lot_status == "Packaged"){
			$('#insert_lot').modal('hide');
			$('#insert_house').modal({ backdrop: 'static', keyboard: false });
			return false;
		}


		$('#insert_lot').modal('hide');

		compute_lot();
		compute_net_tcp();

	});

	$(document).on('click', ".house-select", function(e) {

		/* let house_lid = $(this).attr('data-house-lid');
		var house_site =  $(this).attr('data-house-site');
		var house_block = $(this).attr('data-house-block');
		var house_lot = $(this).attr('data-house-lot');
 */
		var house_model = $(this).attr('data-house-model');
		var house_floor_area = $(this).attr('data-house-floor-area');
		var house_price_sqm = $(this).attr('data-house-per-sqm');

		//var house_status = $(this).attr('data-house-status');

		//alert(lot_status);
	
	/* 	$('#_lid').val(house_lid);
		$('#l_site').val(house_site);
		$('#l_block').val(house_block);
		$('#l_lot').val(house_lot); */
		
		$('#house_model').val(house_model);
		$('#floor_area').val(house_floor_area);
		$('#h_price_per_sqm').val(house_price_sqm);
		subtotal = parseInt(house_floor_area) * parseFloat(house_price_sqm);
		var house_disc = 0
		var house_disc_amt = 0
		$('#house_disc').val(house_disc.toFixed(2));
		$('#house_disc_amt').val(house_disc_amt.toFixed(2));
		$('#hcp').val(subtotal.toFixed(2));

		

		$('#insert_house').modal('hide');

		compute_house();
		compute_net_tcp();

	});



	//select ra

	$(document).on('click', ".select-ra", function(e) {

		e.preventDefault;

	 	var ra = $(this); 

		$('#insert_ra').modal({ backdrop: 'static', keyboard: false });

		return false;

	});

	$(document).on('click', ".ra-select", function(e) {

		var ra_no =  $(this).attr('data-ra-no');
		var lot_lid =  $(this).attr('data-ra-lot-lid');
		var csr_no =  $(this).attr('data-csr-no');
		var ra_site = $(this).attr('data-ra-site');
		var ra_block = $(this).attr('data-ra-block');
		var ra_lot = $(this).attr('data-ra-lot');


		$('#reserve_no').val(ra_no);
		$('#lot_lid').val(lot_lid);
		$('#csr_no').val(csr_no);
		$('#reserve_site').val(ra_site);
		$('#reserve_block').val(ra_block);
		$('#reserve_lot').val(ra_lot);

		


		$('#insert_ra').modal('hide');

	});
// remove commission row
$('#comm_table').on('click', ".delete-row", function(e) {
	e.preventDefault();
		$(this).closest('tr').remove();
	//calculateTotal();
});

// add new product row on invoice
var cloned = $('#comm_table tr:last').clone();
$(".add-row").click(function(e) {
	e.preventDefault();
	cloned.clone().appendTo('#comm_table'); 
});

 
/* $(document).on('keyup', ".agent-rate", function(e) {
	alert("121212");


});
*/
$('#comm_table').on('input', '.calculate', function () {
	//alert(this);
	updateTotals(this);  
});

function updateTotals(elem) {
	net_tcp = $('.total-tcp').val()
	var tr = $(elem).closest('tr'),
		name = $('[name="agent_name[]"]', tr).val(),
		pos = $('[name="agent_position[]"]', tr).val(),
		code = $('[name="agent_code[]"]', tr).val(),
		rate= $('[name="agent_rate[]"]', tr).val(),
		subtotal = (parseFloat(rate) / 100) * parseFloat(net_tcp);

	$('.comm-amt', tr).val(subtotal.toFixed(2));
	
}



	// create csr
	$("#action_create_csr").click(function(e) {
		e.preventDefault();
	    actionCreateCSR();


	});


	// save reservation
	$("#action_save_reservation").click(function(e) {
		e.preventDefault();
	    actionSaveRes();
	});

	// update csr
	//$("#action_update_csr").click(function(e) {
	$(document).on('click', "#action_edit_csr", function(e) {
		e.preventDefault();
		updateCSR();
	});

	

	var dateFormat = $(this).attr('data-vat-rate');
	$('#down_start_date, #down_end_date, #mo_start_date').datetimepicker({
		showClose: false,
		format: dateFormat
	});


	$('#birth_date').datetimepicker({
		showClose: false,
		format : "YYYY-MM-DD"
	});


	
	$('#dos').datetimepicker({
		showClose: false,
		format: "YYYY-MM-DD"
	});
	
	
	$(document).on('blur', ".date-of-sale", function(e) {
		e.preventDefault();
  		var dos = $('.date-of-sale').val();
		
		dos = new Date(dos);

		dos.setMonth(dos.getMonth()+1);
	
		var dos =  dos.toISOString().slice(0, 10);


		$('#first_dp_date').val(dos);
		$('#full_down_date').val(dos);
		//$('#start_date').val(dos);

		compute_no_payment();

		
	});

	
	$(document).on('blur', ".first-dp-date", function(e) {
		e.preventDefault();
		auto_terms();

	});	

	$(document).on('blur', ".full-down-date", function(e) {
		e.preventDefault();
		auto_terms();

	});	


	/* $(document).on('blur', ".date_of_sale", function(e) {
		var today = new Date();
		$('#date_of_sale').val(today);

	
	}); */

	$(document).on('blur', ".birth_day", function(e) {
		e.preventDefault();
  		var dob = $(this).val();
		//var dob = document.getElementById('birth_day').value;
		dob = new Date(dob);
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		$('#customer_age').val(age);
	});

	$(document).on('keyup', ".lot-disc", function(e) {
		e.preventDefault();
		compute_lot();
		//compute_house();
		
	});

	$(document).on('keyup', ".tcp-disc", function(e) {
		e.preventDefault();
		compute_net_tcp();
		//compute_house();
		
	});


	$(document).on('keyup', ".house-disc", function(e) {
		e.preventDefault();
		//compute_lot();
		compute_house();
		
	});

	$(document).on('keyup', ".vat-percent", function(e) {
		e.preventDefault();
		compute_net_tcp();
		//compute_house();
		
	});

	$(document).on('keyup', ".down-percent", function(e) {
		e.preventDefault();
		compute_net_dp();
		compute_no_payment();
		compute_rate();
		compute_monthly_payments();
		
		
	});

	$(document).on('keyup', ".reservation-fee", function(e) {
		e.preventDefault();
		compute_net_dp();
		compute_no_payment();
		compute_monthly_payments();
		
		//compute_house();
		
	});

	$(document).on('keyup', ".no-payment", function(e) {
		e.preventDefault();
		compute_no_payment();
		//compute_house();
		
	});


	$(document).on('keyup', ".terms-count", function(e) {
		e.preventDefault();
		compute_rate();
		compute_monthly_payments();
		

	});

	$(document).on('change', ".payment-type1", function(e) {
		e.preventDefault();
		payment_type1_changed();



	});

	


	$(document).on('change', ".payment-type2", function(e) {
		e.preventDefault();
		payment_type2_changed();


	});
	$(document).on('keyup', ".prod-lot-price", function(e) {
		e.preventDefault();
		compute_lcp();


	});

	function payment_type1_changed(){
			var l_payment_type1 = $('.payment-type1').val();
			$('#payment_type2').removeAttr('disabled');
			$('#loan_text').text("Amount to be financed :");
			$('#down_frm').show();
			$('#monthly_frm').show();
			$('#no_pay_text').show();
			$('#no_payment').show();
			$('#mo_down_text').show();
			$('#monthly_down').show();
			$('#down_text').show();
			$('#start_text').text("Start Date :");	
			$('#ma_text').text("Monthly Amortization ");
			//alert(l_payment_type1);
			if (l_payment_type1 == "Spot Cash"){
				$('#payment_type2').attr('disabled','disable');
				$('#down_frm').hide();
				$('#monthly_frm').hide();
				$('#down_text').hide();
				$('#p1').hide();
				document.getElementById('p2').style.width='100%';
				document.getElementById('p2').style.marginLeft='0%';

				$('#loan_text').text("Amount :");
				$('#start_text').text("Pay Date :");	
				$('#ma_text').text("Spot Cash Payment ");
			} else if(l_payment_type1 == "Full DownPayment"){
				
				$('#no_pay_text').hide();
				$('#no_payment').val(0);
				$('#no_payment').hide();
				$('#mo_down_text').hide();
				$('#monthly_down').val(0);
				$('#monthly_down').hide();
				$('#p1').show();
				document.getElementById('p2').style.width='49%';
				document.getElementById('p2').style.marginLeft='2%';
				compute_net_dp();
				compute_no_payment();
				compute_rate();
				compute_monthly_payments();
				
				
			} else if(l_payment_type1 == "No DownPayment"){
				$('#down_text').hide();
				l_a = $('.net-tcp').val();
				l_b = $('.reservation-fee').val();
				$('#down_frm').hide();
				/* $('#no_payment').val('1'); */
				$('#mo_down_text').hide();
				l_sdate = $('.first-dp-date').val();
				$('#p1').hide();
				document.getElementById('p2').style.width='100%';
				document.getElementById('p2').style.marginLeft='0%';
				
				$('#start_date').val(l_sdate);

				var l_c = parseFloat(l_a) - parseFloat(l_b);
				$('#amt_to_be_financed').val(l_c.toFixed(2))
				$("#down_percent").val(0);
				$("#net_dp").val(0);
				$("#no_payment").val(0);
				$("#monthly_down").val(0);
				compute_net_dp();
				compute_no_payment();
				compute_rate();
				compute_monthly_payments();
				
			}else{
				$('#p1').show();
				document.getElementById('p2').style.width='49%';
				document.getElementById('p2').style.marginLeft='2%';
				compute_net_dp();
				compute_no_payment();
				compute_rate();
				compute_monthly_payments();
				
			}

	}

	function payment_type2_changed(){
		var l_payment_type2 = $('.payment-type2').val();
		$('#loan_text').text("Amount to be financed :");
		$('#interest_rate').show();
		$('#fixed_factor').show();
		$('#monthly_frm').show();
		$('#rate_text').show()
		$('#factor_text').show()
		$('#ma_text').text("Monthly Amortization ");
		if (l_payment_type2 == "Deferred Cash Payment"){
			$('#ma_text').text("Deferred Cash Payment ");
			$('#loan_text').text("Deferred Amount:");
			$("#interest_rate").val(0);
			$("#fixed_facotr").val(0);
			$('#rate_text').hide()
			$('#factor_text').hide()
			$('#interest_rate').hide();
			$('#fixed_factor').hide();
		}

		compute_monthly_payments();

	}
	function compute_lcp(){
		
		var l_sqm = $('.prod-lot-area').val();
		var l_area = $('.prod-lot-price').val();
		var l_total = parseFloat(l_sqm) * parseFloat(l_area);
		$('#prod_lcp').val(l_total.toFixed(2));

	}


	function compute_lot(){

		var l_sqm = $('.price-sqm').val();
		var l_area = $('.lot-area').val();

		var l_discount_percentage = $('.lot-disc').val();
		var l_total_amt = l_sqm*l_area;
		$('#amount').val(l_total_amt.toFixed(2));
	 
		var l_discount_amt = l_total_amt*(l_discount_percentage*0.01);      
		var l_lcp = l_total_amt-l_discount_amt;

		$('#lot_disc_amt').val(l_discount_amt.toFixed(2));
		$('#lcp').val(l_lcp.toFixed(2));
		
		compute_net_tcp();

	}

	function compute_house(){

		var l_h_sqm = $('.h-price-sqm').val();
		var l_f_area = $('.floor-area').val();

		var l_h_disc_percent = $('.house-disc').val();
		var l_h_total_amt = l_h_sqm*l_f_area;
		
		let l_h_discount_amt = l_h_total_amt*(l_h_disc_percent*0.01);      
		let l_hcp = parseFloat(l_h_total_amt)-parseFloat(l_h_discount_amt);

		$('#house_disc_amt').val(l_h_discount_amt.toFixed(2));
		$('#hcp').val(l_hcp.toFixed(2));
		
		compute_lot()

	}
	
	function compute_net_tcp(){
		//var vat_percentage = document.getElementById('vat_amt').value;
		var vat_percentage = $('#vat_percent').val();
		//alert(vat_percentage);
		var tcp_l_lcp = $('.l-lcp').val();		
		var tcp_h_hcp = $('.house-hcp').val();
		var tcp_discount = $('.tcp-disc').val();
		var tcp_sum = parseFloat(tcp_l_lcp) + parseFloat(tcp_h_hcp);
	
		var tcp_disc_amt = parseFloat(tcp_sum) * (parseFloat(tcp_discount) * 0.01) ;
		$('#tcp_disc_amt').val(tcp_disc_amt.toFixed(2));
	
		var tcp_total = tcp_sum - tcp_disc_amt;

		$('#total_tcp').val(tcp_total.toFixed(2));
		var vat_tcp = $('#total_tcp').val();
	
		l_vat_amt = $('.vat-percent').val();
		var vat_net_tcp = ( 1 + (0.01*vat_percentage))*vat_tcp;
		var vat_total = vat_net_tcp - vat_tcp;

		//document.getElementById('vat_amt_computed').value = vat_total.toFixed(2);
		$('#vat_amt_computed').val(vat_total.toFixed(2));
		//$('#vat_amt').val(l_vat_amt.toFixed(2));
		l_total_ntcp = parseFloat(vat_net_tcp);
		
		//l_total_ntcp = parseFloat(tcp_total) + parseFloat(l_vat_amt);
		$('#net_tcp').val(l_total_ntcp.toFixed(2));
		$('#net_tcp1').val(l_total_ntcp.toFixed(2));
		$('#amt_to_be_financed').val(l_total_ntcp.toFixed(2));

		compute_net_dp();
	
	}
	function compute_net_dp(){
		var l_net_tcp = $('.net-tcp-1').val();
		var l_down_per = $('.down-percent').val();
		var l_reservation = $('.reservation-fee').val();
		//alert(l_down_per);		
		if (l_down_per == 0){
			
		/* 	let l_net_dp = 0.00;
			let no_payment = 0.00
			$('#net_dp').val(l_net_dp.toFixed(2));
			$('#no_payment').val(l_no_payment); */
			var l_amt_2b_finance = parseFloat(l_net_tcp) - parseFloat(l_reservation);
			$('#amt_to_be_financed').val(l_amt_2b_finance.toFixed(2));

		}else{
			//alert(l_down_per);
			var l_down = parseFloat(l_down_per) * .01;
			
			var l_net_dp = (parseFloat(l_net_tcp) * parseFloat(l_down)) - parseFloat(l_reservation);
			$('#net_dp').val(l_net_dp.toFixed(2));
			//alert(l_net_dp);
			if (l_net_dp < 0)
				{
				l_net_dp = 0;
				$('#net_dp').val(l_net_dp.toFixed(2));
				var l_net_dp = $('.net-dp').val();
				}
			var l_amt_2b_finance = parseFloat(l_net_tcp) - parseFloat(l_net_dp) - parseFloat(l_reservation);
			$('#amt_to_be_financed').val(l_amt_2b_finance.toFixed(2));

		}
		
	}

	function compute_no_payment(){
		var l_no_pay = $('.no-payment').val();
		var l_net_dp = $('.net-dp').val();

		var l_mo_down = parseFloat(l_net_dp) / parseFloat(l_no_pay);
		l_mo_down = isFinite(l_mo_down) ? l_mo_down : 0.0;
		//alert(l_mo_down);
		$("#monthly_down").val(l_mo_down.toFixed(2));		
		auto_terms();
	}

	function auto_terms(){
		var l_no_pay = $('.no-payment').val();
		var l_start_date = $('.first-dp-date').val();
		
		
		fd_dte = new Date(l_start_date);

		fd_dte.setMonth(fd_dte.getMonth()+ parseFloat(l_no_pay));
		
		var fd_dte = fd_dte.toISOString().slice(0, 10);
 
		$('#full_down_date').val(fd_dte);


		var l_fd_dte = $('.full-down-date').val();

		start_dte = new Date(l_fd_dte);

		start_dte.setMonth(start_dte.getMonth()+ 1);
		
		var start_dte = start_dte.toISOString().slice(0, 10);

		$('#start_date').val(start_dte);
		//alert(end_dte);
		

	}

	function compute_rate(){
		var l_down = $('.down-percent').val();
		var l_terms = $('.terms-count').val();
		if (l_down == 20){
			if(l_terms>"0" && l_terms<="60"){
				l_rate = 15.0
				$('#interest_rate').val(l_rate);

			}else if(l_terms >60 && l_terms <= 120 ){
				l_rate = 17.0
				$('#interest_rate').val(l_rate);
			}
			else if(l_terms > 120 ){
				l_rate = 19.0
				$('#interest_rate').val(l_rate);
			}
		}else if(l_down == 30){
			if(l_terms>"0" && l_terms<="60"){
				l_rate = 14.0
				$('#interest_rate').val(l_rate);

			}else if(l_terms >60 && l_terms <= 120 ){
				l_rate = 16.0
				$('#interest_rate').val(l_rate);
			}
			else if(l_terms > 120 ){
				l_rate = 18.0
				$('#interest_rate').val(l_rate);
			}

		}else{
			$('#interest_rate').val(0.0);
		}

	}




	function compute_monthly_payments(){

		
		var l_rate = $('.interest-rate').val();
		l_x = '1200';
		if (l_rate == 0){
			l_rate_value = 0;
		}else{
			var l_rate_value = parseFloat(l_rate)/ parseFloat(l_x);
		
		}

		var l_payment_type1 = $('.payment-type1').val();
		var l_payment_type2 = $('.payment-type2').val();
		if (l_payment_type1 =="Spot Cash"){
			var l_net_tcp = $('.net-tcp').val();
			var l_rsv_fee = $('.reservation-fee').val();
			l_amt_2b_finance = parseFloat(l_net_tcp) - parseFloat(l_rsv_fee);
			$('#amt_to_be_financed').val(l_amt_2b_finance.toFixed(2));		
		}else if(l_payment_type2 == "Deferred Cash Payment"){
			/* if (l_terms == 0){
				return
			} */
			var l_loan_amt = $('.amt-to-be-financed').val();
			var l_terms = $('.terms-count').val();
			//alert(l_terms);
			var l_amt_2b_finance = parseFloat(l_loan_amt)/parseFloat(l_terms);
			//$('#amt_to_be_financed').val(l_amt_2b_finance.toFixed(2));	
			$("#monthly_amortization").val(l_amt_2b_finance.toFixed(2));
		}else if (l_payment_type2 == "Monthly Amortization"){
			var l_terms = $('.terms-count').val();
			var l_factor = parseFloat(l_rate_value)/(1-(1+parseFloat(l_rate_value))**(-parseFloat(l_terms)));
			//alert(l_factor);
			//alert(l_rate_value);
			//alert(l_terms);
			if (l_factor == 0){
				return
			}
			//var rate_factor = parseFloat(l_rate_value)/parseFloat(l_factor);
			var l_loan_amt = $('.amt-to-be-financed').val();
			var monthly_ma = parseFloat(l_loan_amt)*parseFloat(l_factor);
			$("#fixed_factor").val(l_factor.toFixed(8));
			$("#monthly_amortization").val(monthly_ma.toFixed(2));

		}
	

	}




	function vat_calculation(){

		var tcp_total = $('.total-tcp').val();
		l_vat_amt = parseFloat(tcp_total) * 0.12;
		$('#vat_amt').val(l_vat_amt.toFixed(2));
		l_total_ntcp = parseFloat(tcp_total) + parseFloat(l_vat_amt);
		$('#net_tcp').val(l_total_ntcp.toFixed(2));

	}

	function actionAddUser() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			$(".required").parent().removeClass("has-error");

			var $btn = $("#action_add_user").button("loading");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#add_user").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				}

			});
		}

	}

	function actionAddLot() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			$(".required").parent().removeClass("has-error");

			var $btn = $("#action_add_lot").button("loading");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#add_lot").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 4000);
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				}

			});
		}

	}

	function actionAddHouse() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			
		} else {

			$(".required").parent().removeClass("has-error");

			var $btn = $("#action_add_house").button("loading");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#add_house").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 4000);
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				}

			});
		}

	}

	function actionAddProject() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			$(".required").parent().removeClass("has-error");

			var $btn = $("#action_add_project").button("loading");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#add_project").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 4000);
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				}
			});
		}
	}

	function actionCreateCustomer(){

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			var $btn = $("#action_create_customer").button("loading");

			$(".required").parent().removeClass("has-error");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#create_customer").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$("#create_customer").before().html("<a href='./customer-add.php' class='btn btn-primary'>Add New Customer</a>");
					//$("#create_customer").remove();
					$btn.button("reset");
					
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				} 

			});
		}

	}

	function actionSaveRes(){

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			var $btn = $("#action_save_reservation").button("loading");

			$(".required").parent().removeClass("has-error");
			$("#save_reservation").find(':input:disabled').removeAttr('disabled');

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#save_reservation").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 4000);
					
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				} 

			});
		}


	}



	function actionCreateCSR(){

		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);

		} else {

			var $btn = $("#action_create_csr").button("loading");

			$(".required").parent().removeClass("has-error");
			//$("#create_csr").find(':input:disabled').removeAttr('disabled');

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#create_csr").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$("#create_csr").before().html("<a href='./csr-create.php' class='btn btn-primary'>Add New CSR</a>");
					//$("#create_csr").remove();
					$btn.button("reset");

				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
				} 

			});
		}


	}

	
	function deleteHouse(houseId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: houseId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

   	function deleteLot(lotId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: lotId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

	   function deleteProject(projectId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: projectId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

   	function deleteUser(userId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: userId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

	function deleteCustomer(userId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: userId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			} 
    	});

   	}


   	function deleteCSR(csrId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: csrId,
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

   	function updateLot() {

   		var $btn = $("#action_update_lot").button("loading");

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: $("#update_lot").serialize(),
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
				setInterval('location.reload()', 4000);
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

	function updateProject() {

		var $btn = $("#action_update_project").button("loading");

		jQuery.ajax({

		url: 'response.php',
		type: 'POST', 
		data: $("#update_project").serialize(),
		dataType: 'json', 
		success: function(data){
			$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
			$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
			$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			$btn.button("reset");
			setInterval('location.reload()', 4000);
		},
		error: function(data){
			$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
			$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
			$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			$btn.button("reset");
		} 
	});

	}

	function updateHouse() {

	var $btn = $("#action_update_house").button("loading");

	jQuery.ajax({

		url: 'response.php',
		type: 'POST', 
		data: $("#update_house").serialize(),
		dataType: 'json', 
		success: function(data){
			$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
			$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
			$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			$btn.button("reset");
			setInterval('location.reload()', 4000);
		},
		error: function(data){
			$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
			$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
			$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			$btn.button("reset");
		} 
	});

}

   	function updateUser() {

   		var $btn = $("#action_update_user").button("loading");

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: $("#update_user").serialize(),
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

   	function updateCustomer() {

   		var $btn = $("#action_update_customer").button("loading");

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: $("#update_customer").serialize(),
            dataType: 'json', 
            success: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});

   	}

   	function updateCSR() {

   		var $btn = $("#action_update_csr").button("loading");
   		$("#update_csr").find(':input:disabled').removeAttr('disabled');
		//setTimeout(function() {
        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: $("#update_csr").serialize(),
            dataType: 'json', 
            success: function(data){
				//setInterval(function() {
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 4000);
					//},500);
			},
			error: function(data){
				$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
				$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				$btn.button("reset");
			} 
    	});
		//}, 1000); //interval

   	}

   

   	// login function
	function actionLogin() {

		var errorCounter = validateForm();

		if (errorCounter > 0) {

		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: Missing something are we? check and try again!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);

		} else {

			var $btn = $("#btn-login").button("loading");

			jQuery.ajax({
				url: 'response.php',
				type: "POST",
				data: $("#login_form").serialize(), // serializes the form's elements.
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");

					window.location = "dashboard.php";
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 2000);
					$btn.button("reset");
				}

			});

		}
		
	}

   	function validateForm() {
	    // error handling
	    var errorCounter = 0;

	    $(".required").each(function(i, obj) {

	        if($(this).val() === ''){
	            $(this).parent().addClass("has-error");
	            errorCounter++;
	        } else{ 
	            $(this).parent().removeClass("has-error"); 
	        }


	    });

	    return errorCounter;
	}


	function UpdateStat(csrId) {


	 jQuery.ajax({

		 url: 'response.php',
		 type: 'POST', 
		 data: csrId,
		 dataType: 'json', 
		 success: function(data){
				 $("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
				 $("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
				 $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
				 setInterval('location.reload()', 4000);
			
		 },
		 error: function(data){
			 $("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
			 $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
			 $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
			  setInterval('location.reload()', 4000);
		 } 
	 });

	}


	//tab
	$(document).on('change', ".prod-code", function(e) {
		e.preventDefault();
		
		var site = $(this).val();
		$('#l_site').val(site);
	});



});
