
$(document).ready(function() {


	let dt = new Date().toISOString().slice(0, 10);
	

/* 	$(document).on('blur', ".date_of_sale", function(e) {
		var today = new Date();
		$('#date_of_sale').val(dt);
	});
	 */


	// Invoice Type
	$('#invoice_type').change(function() {
		var invoiceType = $("#invoice_type option:selected").text();
		$(".invoice_type").text(invoiceType);
	});

	
	$('table.display').DataTable();
	
	$("#data-table").dataTable();
	// Load dataTables

	$("#data-table-lot").dataTable();

	
	$("#action_add_lot").click(function(e) {
		e.preventDefault();
	    actionAddLot();
	});


	$("#action_add_comment").click(function(e) {
		e.preventDefault();
	    actionAddComment();
	});

	$("#action_add_reply").click(function(e) {
		e.preventDefault();
	    actionAddReply();
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

	// verify csr
	$(document).on('click', "#verify_btn", function(e) {
        e.preventDefault();
		var btn_val = $("#verify_btn").val();
        var csrId = 'action=verify_csr&id='+ $(this).attr('csr-id')+ '&value=' + btn_val; //build a post data structure
		$('#verify_stat').modal({ backdrop: 'static', keyboard: false }).one('click', '#verify', function() {
			verify_btn(csrId);
			

		});
   	});

	// cancel csr
	$(document).on('click', "#cancel_btn", function(e) {
        e.preventDefault();
		var btn_val = $("#cancel_btn").val();
        var csrId = 'action=verify_csr&id='+ $(this).attr('csr-id')+ '&value=' + btn_val; //build a post data structure
		$('#verify_stat').modal({ backdrop: 'static', keyboard: false }).one('click', '#verify', function() {
			verify_btn(csrId);

		});
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


	// delete reservation
	$(document).on('click', ".delete-reservation", function(e) {
		e.preventDefault();
		var raId = 'action=delete_reservation&delete='+ $(this).attr('data-ra-id')+'&csr_no=' + $(this).attr('data-csr-no');
		var ra = $(this);
		
		$('#delete_ra').modal({ backdrop: 'static', keyboard: false }).one('click', '#delete', function() {
			deleteReservation(raId);
			$(ra).closest('tr').remove();
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

	$(document).on('click', ".model-select", function(e) {

		e.preventDefault;

		var model = $(this);

		$('#insert_model').modal({ backdrop: 'static', keyboard: false }).one('click', '#selected_model', function(e) {


		 var itemText = $('#insert_model').find("option:selected").text();


		 $('#house_model').val(itemText);
	


		 //updateTotals('.calculate');
		 //calculateTotal();

		});

		return false;

	});

	
	// create customer
	$("#action_create_customer").click(function(e) {
		e.preventDefault();
	    actionCreateCustomer();
	});

   	
   	$(document).on('click', ".select-customer", function(e) {

		e.preventDefault;

		var customer = $(this);

		$('#insert_customer').modal({ backdrop: 'static', keyboard: false }).one('click', '.customer-select', function(e) {

			//old version
			var customer_last_name = $(this).attr('data-customer-lname');
			var customer_first_name = $(this).attr('data-customer-fname');
			var customer_middle_name = $(this).attr('data-customer-mname');
			var customer_suffix_name = $(this).attr('data-customer-sname');
	
			var customer_email = $(this).attr('data-customer-email');
			var customer_phone = $(this).attr('data-customer-phone');
	
			var customer_address_1 = $(this).attr('data-customer-address-1');
			var customer_zip_code = $(this).attr('data-customer-zip-code');
	
			var customer_address_abroad = $(this).attr('data-customer-address-abroad');
	
			var customer_viber = $(this).attr('data-customer-viber');
			var customer_birthday = $(this).attr('data-customer-birthday');
			var customer_age = $(this).attr('data-customer-age');
			var customer_gender = $(this).attr('data-customer-gender');
			var customer_civil = $(this).attr('data-customer-civil');
			var customer_ctzn = $(this).attr('data-customer-ctzn');

			//new version
			
		/* 	$('.buyer-last').val(customer_last_name); */
	
			$(customer).closest('tr').find('.buyer-last').val(customer_last_name);
			$(customer).closest('tr').find('.buyer-first').val(customer_first_name);
			$(customer).closest('tr').find('.buyer-middle').val(customer_middle_name);
			$(customer).closest('tr').find('.buyer-suffix').val(customer_suffix_name);
			$(customer).closest('tr').find('.buyer-address').val(customer_address_1);
			$(customer).closest('tr').find('.buyer-zipcode').val(customer_zip_code);
			$(customer).closest('tr').find('.buyer-add-abroad').val(customer_address_abroad);
			$(customer).closest('tr').find('.buyer-viber').val(customer_viber);
			$(customer).closest('tr').find('.buyer-bday').val(customer_birthday);
			$(customer).closest('tr').find('.buyer-age').val(customer_age);
			$(customer).closest('tr').find('.buyer-contact').val(customer_phone);
			$(customer).closest('tr').find('.buyer-email').val(customer_email);
			$(customer).closest('tr').find('.buyer-gender').val(customer_gender);
			$(customer).closest('tr').find('.buyer-civl').val(customer_civil);
			$(customer).closest('tr').find('.buyer-ctzn').val(customer_ctzn);

	
	
	
			$('#insert_customer').modal('hide');
	
		});





		return false;

   	});

		
	//select lot

	$(document).on('click', ".select-lot", function(e) {

		e.preventDefault;

		var lot = $(this);
		

		$('#insert_lot').modal({ backdrop: 'static', keyboard: false });
	

		return false;

	});

	//select lot

	
	$(document).on('click', ".lot-select", function(e) {

		let prod_lid = $(this).attr('data-lot-lid');
		let prod_h_lid = $(this).attr('data-house-lid');
		var prod_site =  $(this).attr('data-lot-site');
		var prod_block = $(this).attr('data-lot-block');
		var prod_lot = $(this).attr('data-lot-lot');

		var prod_lot_area = $(this).attr('data-lot-lot-area');
		var prod_price_sqm = $(this).attr('data-lot-per-sqm');

		var prod_floor_area = $(this).attr('data-floor-area');
		var prod_h_price_sqm = $(this).attr('data-house-price');
		var prod_house_model = $(this).attr('data-house-model');

		var lot_status = $(this).attr('data-lot-status');

		//alert(lot_status);
	
		$('#l_lid').val(prod_lid);
		$('#l_house_lid').val(prod_h_lid);
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

		
		if(prod_floor_area == "" & prod_h_price_sqm == ""){
			var prod_floor_area = 0
			var prod_h_price_sqm = 0
		}
		$('#house_model').val(prod_house_model);
		$('#floor_area').val(prod_floor_area);
		$('#h_price_per_sqm').val(prod_h_price_sqm);
		subtotal2 = parseInt(prod_floor_area) * parseFloat(prod_h_price_sqm);
		$('#hcp').val(subtotal2.toFixed(2))



		$('#insert_lot').modal('hide');

		compute_lot();
		compute_net_tcp();

	});

	/* $(document).on('click', ".house-select", function(e) {

		var house_model = $(this).attr('data-house-model');
		var house_floor_area = $(this).attr('data-house-floor-area');
		var house_price_sqm = $(this).attr('data-house-per-sqm');

	
		
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

	}); */

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
		var fullname = $(this).attr('data-ra-fname');

		var reserve_or_no = $(this).attr('data-or-no');
		var reserve_date = $(this).attr('data-reserve-date');
		/* var reserve_amt = $(this).attr('data-amt-paid'); */
		var reserve_amt = $(this).attr('data-res-remaining');
		var total_res = $(this).attr('data-ra-res');


		$('#ra_no').val(ra_no);
		$('#lot_lid').val(lot_lid);
		$('#csr_no').val(csr_no);
		$('#reserve_site').val(ra_site);
		$('#reserve_block').val(ra_block);
		$('#reserve_lot').val(ra_lot);
		$('#fullname').val(fullname);
		$('#or_no').val(reserve_or_no);
		$('#pay_date').val(reserve_date);
		$('#amount_paid').val(reserve_amt);
		$('#total_res').val(total_res);

		


		$('#insert_ra').modal('hide');

	});
// remove commission row
$('#comm_table').on('click', ".delete-row", function(e) {
	e.preventDefault();
		$(this).closest('tr').remove();
	//calculateTotal();
});
$('#buyer_table').on('click', ".delete-buyer-row", function(e) {
	e.preventDefault();
		$(this).closest('tr').remove();
	//calculateTotal();
});


// add new agent row on ra
var cloned = $('#comm_table tr:last').clone();
cloned.find('input').val('');
$(".add-row").click(function(e) {
	e.preventDefault();
	cloned.clone().appendTo('#comm_table'); 
});


var cloned2 = $('#buyer_table tr:last').clone();
cloned2.find('input').val('');
$(".add-buyer-row").click(function(e) {
	e.preventDefault();
	cloned2.clone().appendTo('#buyer_table'); 
});

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
	$(document).on('click', "#action_update_csr", function(e) {
		e.preventDefault();
		updateCSR();
	});

	$(document).on('click', "#action_update_reservation", function(e) {
		e.preventDefault();
		updateRes();
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

	$('#hire_date').datetimepicker({
		showClose: false,
		format : "YYYY-MM-DD"
	});
	
	$('#dos').datetimepicker({
		showClose: false,
		format: "YYYY-MM-DD"
	});

	$('#reserve_date').datetimepicker({
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
				$('#payment_type2').attr('readonly','readonly');
				/* $('#payment_type2').val('Spot Cash'); */
				$('#down_frm').hide();
				$('#monthly_frm').hide();
				$('#down_text').hide();
				$('#p1').hide();
				document.getElementById('p2').style.width='100%';
				document.getElementById('p2').style.marginLeft='0%';

				$("#down_percent").val(0);
				$("#net_dp").val(0);
				$("#terms").val(0);
				$("#first_dp_date").val("");
				$("#full_down_date").val("");
				$("#interest_rate").val(0);
				$("#fixed_factor").val(0);
				$("#monthly_amortization").val(0);
				

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
				$("#first_dp_date").val("");
				$("#full_down_date").val("");
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
			$("#fixed_factor").val(0);
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
		
		compute_lot();

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
			$("#fixed_facotr").val(0);
			$("#mothly_amortization").val(0);	
			$('#amt_to_be_financed').val(l_amt_2b_finance.toFixed(2));		
		}else if(l_payment_type2 == "Deferred Cash Payment"){
			/* if (l_terms == 0){
				return
			} */
			
			var l_loan_amt = $('.amt-to-be-financed').val();
			var l_terms = $('.terms-count').val();
			//alert(l_terms);
			var l_amt_2b_finance = parseFloat(l_loan_amt)/parseFloat(l_terms);
			l_amt_2b_finance = isFinite(l_amt_2b_finance) ? l_amt_2b_finance : 0;
			//$('#amt_to_be_financed').val(l_amt_2b_finance.toFixed(2));	
			$("#monthly_amortization").val(l_amt_2b_finance.toFixed(2));
		}else if (l_payment_type2 == "Monthly Amortization"){
			compute_no_payment();
			compute_net_dp();
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
			monthly_ma = isFinite(monthly_ma) ? monthly_ma : 0;
			$("#fixed_factor").val(l_factor.toFixed(8));
			$("#monthly_amortization").val(monthly_ma.toFixed(2));

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
					$("#save_reservation").remove();
					setInterval(redirectToRaList,2000);
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


	function deleteReservation(raId) {

        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: raId,
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




	function updateRes() {

	
		var $btn = $("#action_update_reservation").button("loading");
   		$("#update_reservation").find(':input:disabled').removeAttr('disabled');
		//setTimeout(function() {
        jQuery.ajax({

        	url: 'response.php',
            type: 'POST', 
            data: $("#update_reservation").serialize(),
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
   

	function actionAddComment() {
		
		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			var $btn = $("#action_add_comment").button("loading");
			
			$(".required").parent().removeClass("has-error");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#add_comment").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 2000);
					
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 2000);
				} 

			});
		}

	

	}


	function actionAddReply() {
		
		var errorCounter = validateForm();

		if (errorCounter > 0) {
		    $("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
		    $("#response .message").html("<strong>Error</strong>: It appear's you have forgotten to complete something!");
		    $("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
		} else {

			var $btn = $("#action_add_reply").button("loading");
			
			$(".required").parent().removeClass("has-error");

			$.ajax({

				url: 'response.php',
				type: 'POST',
				data: $("#add_reply").serialize(),
				dataType: 'json',
				success: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-warning").addClass("alert-success").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 2000);
					
				},
				error: function(data){
					$("#response .message").html("<strong>" + data.status + "</strong>: " + data.message);
					$("#response").removeClass("alert-success").addClass("alert-warning").fadeIn();
					$("html, body").animate({ scrollTop: $('#response').offset().top }, 1000);
					$btn.button("reset");
					setInterval('location.reload()', 2000);
				} 

			});
		}

	

	}

		
	$(document).on('click', ".tablinks", function(e) {
		e.preventDefault();
		opentab(evt, tabName);
	});


	$(document).on('click', "#compute-pmt", function(e) {
		e.preventDefault();
		alert("done");
		var interest_rate = $('.int-rate').val();
		var terms = $('.term-rate').val();
		var l_amt_financed = $('.loan-amt').val();
		$i = (interest_rate /100)/12;
		$n = terms;
		$fv  = 0;
		$pv =  l_amt_financed;
		$type = 0;

		$PMT = (($pv - $fv) * $i )/ (1 - pow((1 + $i), (-$n))); 
		/* pmt($interest_rate,$terms,$pv,$fv,$type); */


		alert($PMT);

	});

});


function pmt(rate_per_period, number_of_payments, present_value, future_value, type){
	future_value = typeof future_value !== 'undefined' ? future_value : 0;
	type = typeof type !== 'undefined' ? type : 0;

	if(rate_per_period != 0.0){
		// Interest rate exists
		var q = Math.pow(1 + rate_per_period, number_of_payments);
		return -(rate_per_period * (future_value + (q * present_value))) / ((-1 + q) * (1 + rate_per_period * (type)));

	} else if(number_of_payments != 0.0){
		// No interest rate, but number of payments exists
		return -(future_value + present_value) / number_of_payments;
	}

	return 0;

	
}
function pmt(rate_per_period, number_of_payments, present_value, future_value, type){
	var loanAmount = Number(this.inputValArray[0]),
	interest = Number(this.inputValArray[1]),
	numOfMonths = Number(this.inputValArray[2]),
	rate = interest / 1200,
	income_req = 0,
	monthlyPayment = 0;

	// Use toFixed method to round rate. The toFixed method converts a number to a string,
	// so we use Number() to convert it back.
	rate = Number(rate.toFixed(7));

	// Substitute the proper variables into our equation to get the monthlyPayment value.
	monthlyPayment = (rate + rate / (Math.pow(rate + 1, numOfMonths) - 1)) * loanAmount;

	income_req =  monthlyPayment / 0.4;
	// Round the monthlyPayment to the second decimal place. We can leave it as a string.
	monthlyPayment = monthlyPayment.toFixed(2);

	income_req = income_req.toFixed(2);
}
//** //////////////////////////////////////////////////////////////////*/

function redirectToClientList(){
	window.location.href = "?page=customer-list";
}

function redirectToProjectList(){
	window.location.href = "?page=project-list";
}

function redirectToHouseList(){
	window.location.href = "?page=house-list";
}

function redirectToLotList(){
	window.location.href = "?page=lot-list";
}

function redirectToCSRList(){
	window.location.href = "?page=csr-create";
}


function redirectToAgentList(){
	window.location.href = "?page=agent-list";
}

function redirectToUserList(){
	window.location.href = "?page=user-list";
}

function redirectToRaList(){
	window.location.href = "?page=reservation-list";
}




























