<?php  require 'core_functions.php' ;
if($_SESSION['api_user']=='')
{
	header('Location: login.php');	
}
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] =  $GLOBALS['api_key'];
$data['type'] = 'account_info';
$data['account_id'] =  $GLOBALS['account_id'];
 
 
 
/*$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'account_info';
$data['account_id'] =  $GLOBALS['account_id']; 
$data['user_name']	=	'hwtest';
*/
//print_r($data);
$contents	=	 submit_cURL ($data);

$parse_array = array();
$parse_array = xml2array($contents, $get_attributes=1, $priority = 'tag');
if($parse_array['response']['account']['language'] == 'DE')
{
	include('Translations/DE.php');
}
if(empty($parse_array['response']['account']['language']) || $parse_array['response']['account']['language'] == 'EN' || $parse_array['response']['account']['language'] == '')
{
	
	include('Translations/EN.php');
}
if($parse_array['response']['account']['language'] == 'ES')
{
	include('Translations/ES.php');
}
if($parse_array['response']['account']['language'] == 'FR')
{
	include('Translations/FR.php');
}
if($parse_array['response']['account']['language'] == 'GE')
{
	include('Translations/GE.php');
}
if($parse_array['response']['account']['language'] == 'IT')
{
	include('Translations/IT.php');
}
if($parse_array['response']['account']['language'] == 'PT')
{
	include('Translations/PT.php');
}
if($parse_array['response']['account']['language'] == 'NO')
{
	include('Translations/NO.php');
}
if($parse_array['response']['account']['language'] == 'TR')
{
	include('Translations/TR.php');
}
if($parse_array['response']['account']['language'] == 'PT-BR')
{
	include('Translations/PT-BR.php');
}



$data['type'] = 'user_info';
//var_dump($data);
$user_contents	=	 submit_cURL ($data);

$parse_array_user_info = array();
$parse_array_user_info = xml2array($user_contents, $get_attributes=1, $priority = 'tag');

//print_r($parse_array_user_info);
//echo "micasony".$parse_array['response']['user']['user_timezone'];
//print_r($parse_array);
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);
*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
	<title>ClientToolbox | User Info</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
<link rel="stylesheet" type="text/css" href="include/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link href="include/assets/bootstrap-rowlink/bootstrap-rowlink.css" rel="stylesheet" />
    <link type="text/css" href="include/assets/jquery.datepick.css" rel="stylesheet">
	<link href="include/assets/bootstrap/css/bootstrap.css" rel="stylesheet" />
	<link href="include/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="include/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="include/assets/css/style.css" rel="stylesheet" />
	<link href="include/assets/css/style_responsive.css" rel="stylesheet" />
	<link href="include/assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="#" rel="stylesheet" id="style_metro" />
    <link rel="stylesheet" type="text/css" href="include/assets/chosen-bootstrap/chosen/chosen.css" />
	<link href="include/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="include/assets/uniform/css/uniform.default.css" />
	<link rel="stylesheet" href="include/assets/data-tables/DT_bootstrap.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="include/assets/bootstrap-daterangepicker/daterangepicker.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
function chng(id)
{
	//alert(id);
	 //var id1 = $("#form3 input:hidden").attr("id");
	 //alert(id);
	 var val1 = 'show_'+id;
	 var val	=	 document.getElementById(val1).value;
	 
//alert(document.getElementById('show_'+id).checked)
	if(val == 'Y')
	{
		document.getElementById('chng_'+id).value = 'N';
		
	}
	else
	{
		document.getElementById('chng_'+id).value = 'Y';
		
		//alert(val);	
	}
	//alert(document.getElementById(id).value);	
}
function chng1(id)
{
	//alert(id);
	 //var id1 = $("#form3 input:hidden").attr("id");
	 //alert(id);
	 var val1 = 'show1_'+id;
	 var val	=	 document.getElementById(val1).value;
	 //alert(val);
	 //return false;
//alert(document.getElementById('show_'+id).checked)
	if(val == 'Y')
	{
		document.getElementById('chng1_'+id).value = 'N';
		//alert(document.getElementById('chng1_'+id).value);
	}
	else
	{
		document.getElementById('chng1_'+id).value = 'Y';
		//alert(document.getElementById('chng1_'+id).value);
		//alert(val);	
	}
	//alert(document.getElementById(id).value);	
}

function generate_card_number()
{
	//alert('hello');
	$.ajax({
                            url: 'generate_card_number.php',
                            
                            success: function(data) {
 								//alert(data);
                                document.getElementById('card').value = data;
                            }
                        });	
}
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});

function validateEmail(email) {
	var status = false;
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
	if (email.search(emailRegEx) == -1) {
		status = false;
	} else {
		status = true;
	}
	return status;
}
function limit()
{
  	
} 
function setSelectedIndex(s, valsearch)
{
	
// Loop through all the items in drop down list
for (i = 0; i< s.options.length; i++)
{ 
if (s.options[i].value == valsearch)
{
	
// Item is found. Set its property and exit
s.options[i].selected = true;
break;
}
}
return;
}
function change_label()
{
	
}
function load_fun()
{
	
	
	//checked_box();
	
	//alert('hello');
	setSelectedIndex(document.getElementById('user_timezone'),"<?php echo $parse_array['response']['account']['timezone'];?>");
	setSelectedIndex(document.getElementById('c_symbol'),"<?php echo $parse_array['response']['account']['symbol'];?>");
	setSelectedIndex(document.getElementById('lang'),"<?php echo $parse_array['response']['account']['language'];?>");
	
	
}
function submit_form()
{
	
	var p1 = document.getElementById('password').value;
	var email = document.getElementById('email').value;
	var p2 = document.getElementById('c_password').value;
	var proceed= true;
	if(p1!=p2)
	{
		document.getElementById('c_pwd_label').innerHTML = 'Password does not match';	
		proceed=false;
		
	}	
	if(!validateEmail(email)) {
		document.getElementById('email_label').innerHTML = 'Invalid email address';
		proceed=false;
	}
	if(proceed==true)
	{
		document.forms["form1"].submit();
		
	}
}
function submit_form1()
{
	
	var p1 = document.getElementById('password').value;
	//var email = document.getElementById('email').value;
	var p2 = document.getElementById('c_password').value;
	var proceed = true;
	if(p1!=p2)
	{
		document.getElementById('c_pwd_label').innerHTML = 'Password does not match';	
		proceed = false;
		
	}	
	
	if(proceed == true)
	{
		document.forms["form2"].submit();
		
	}
}
function submit_add_user(id)
{
	var username = document.getElementById('username').value;
	var p1 = document.getElementById('password').value;
	//var email = document.getElementById('email').value;
	var p2 = document.getElementById('c_password').value;
	var proceed = true;
	
	if(username == '')
	{
		//alert(username);
		document.getElementById('u_name').innerHTML = 'username is required';	
		proceed = false;	
	}
	if(p1!=p2)
	{
		document.getElementById('c_pwd_label').innerHTML = 'Password does not match';	
		proceed = false;
		
	}	
	
	if(proceed == true)
	{
		if(id == '1')
		{
			document.forms["add_user_form"].submit();
		}
		else if(id == '2')
		{
			document.forms["edit_user_form"].submit();
		}
		
	}
}

function submit_form3()
{
	
	var email = document.getElementById('email').value;
	var proceed = true;
	if(!validateEmail(email)) {
		//alert(email);
		document.getElementById('email_label').innerHTML = 'Invalid email address';
		
		proceed=false;
	}
	if(proceed==true)
	{
		document.forms["form3"].submit();
		
	}
}

function resetme()
{
	document.getElementById('b_name').value = '';
	document.getElementById('adr1').value = '';
	document.getElementById('adr2').value = '';
	document.getElementById('city').value = '';
	document.getElementById('cntry').value = '';
	document.getElementById('state').value = '';
	document.getElementById('user_first_name').value = '';
	document.getElementById('user_last_name').value = '';
	document.getElementById('email').value = '';
	document.getElementById('phno').value = '';
	document.getElementById('password').value = '';
	document.getElementById('c_password').value = '';
	///document.getElementById('').value = '';
//document.forms["form1"].reset();

}
function reset_values()
{
	document.getElementById('username').value = '';
	document.getElementById('password').value = '';
	document.getElementById('c_password').value = '';
	document.getElementById('f_name').value = '';
	document.getElementById('l_name').value = '';
	document.getElementById('info').value = '';
	document.getElementById('pin').value = '';
	
}
function resetme1()
{
	//document.getElementById('b_name').value = '';
	//document.getElementById('adr1').value = '';
	/*document.getElementById('adr2').value = '';
	document.getElementById('city').value = '';
	document.getElementById('cntry').value = '';
	document.getElementById('state').value = '';*/
	document.getElementById('user_first_name').value = '';
	document.getElementById('user_last_name').value = '';
	//document.getElementById('email').value = '';
	//document.getElementById('phno').value = '';
	document.getElementById('password').value = '';
	document.getElementById('c_password').value = '';
	///document.getElementById('').value = '';
//document.forms["form1"].reset();

}
function resetme23()
{
	//document.getElementById('b_name').value = '';
	//document.getElementById('adr1').value = '';
	/*document.getElementById('adr2').value = '';
	document.getElementById('city').value = '';
	document.getElementById('cntry').value = '';
	document.getElementById('state').value = '';*/
	window.location = "custom_fields.php";
	//document.getElementById('card').value = '';
	///document.getElementById('').value = '';
//document.forms["form1"].reset();

}

function resetme2()
{
	//document.getElementById('b_name').value = '';
	//document.getElementById('adr1').value = '';
	/*document.getElementById('adr2').value = '';
	document.getElementById('city').value = '';
	document.getElementById('cntry').value = '';
	document.getElementById('state').value = '';*/
	
	document.getElementById('card').value = '';
	///document.getElementById('').value = '';
//document.forms["form1"].reset();

}
function resetme_customer()
{
	//document.getElementById('chk1').checked = false;
	//$("#check1").removeAttr("checked");
	//alert(document.getElementById('chk1').checked);
	
	document.getElementById('card').value = '';
	document.getElementById('f_name').value = '';
	document.getElementById('l_name').value = '';
	document.getElementById('phno').value = '';
	document.getElementById('email').value = '';
	document.getElementById('DOB').value = '';
	document.getElementById('street1').value = '';
	document.getElementById('street2').value = '';
	document.getElementById('city').value = '';
	document.getElementById('state').value = '';
	document.getElementById('cntry').value = '';
	document.getElementById('zip').value = '';
	//$(this).attr({checked: false});
	document.getElementById('check1').checked = false;
	document.getElementById('check2').checked = false;
	$(".checked").removeAttr("class");
	//$('#check1').trigger('click');
	//return true;
	 //$('#check1').attr('checked', false);
	 //$("#check1").removeAttr("checked");
	 
}


function exefunction(id){
	var chk = document.getElementById(id).checked;
	if(chk == true)
	{
		//alert('true'+id);
		document.getElementById(id).value = 'Y';	
	}
	if(chk == false)
	{
		//alert('false'+id);
		document.getElementById(id).value = 'N';
		//alert(document.getElementById(id).value);	
	}
}
$(function(){
 
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
 
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
});
function get_checked(id)
{
	var chk_arr =  document.getElementsByName("case[]");
var chklength = chk_arr.length;
	var str = '';
	for(k=0;k< chklength;k++)
{
    if(chk_arr[k].checked == true)
	{
		str = str+','+chk_arr[k].value;
	}
	
} 	
//alert(str);

	if(str == ',')
	{
		alert('Nothing is selected to delete');	
	}
	else
	{
		if(id == '1')
		{
			window.location = 'delete_customers.php?customers='+str;
		}
		else if(id == '2')
		{
			window.location = 'delete_users.php?users='+str;	
		}
	}
}
function show_text()
{
	//alert('hello');
	if(document.getElementById('typ').value == 'List' || document.getElementById('typ').value == 'Pick')
	{
		document.getElementById('list').style.display = 'block';
	}	
	else
	{
		document.getElementById('list').style.display = 'none';	
	}
}
function do_action(id)
{
	var chk_arr =  document.getElementsByName("case[]");
var chklength = chk_arr.length;

	var str = '';
	for(k=0;k< chklength;k++)
{
    if(chk_arr[k].checked == true)
	{
		str = str+','+chk_arr[k].value;
	}
	
} 	
	if(str == ',')
	{
		alert('No Campaign selected');	
	}
	else
	{
		if(id == '1')
		
		{
			window.location = 'deactive_camp.php?campaigns='+str;
		}
		else if(id == '2')
		{
			window.location = 'active_camp.php?campaigns='+str;
		}
		else if(id == '3')
		{
			window.location = 'delete_camp.php?campaigns='+str;
		}
		
	}
}
function redir(id)
{
	//history.back();
		if(id == '1')
		{
			document.getElementById('interval').value = '';
			document.getElementById('percent').value = '';
		}
		if(id == '2')
		{
			document.getElementById('much').value = '';
			document.getElementById('desc').value = '';
		}
		if(id == '3')
		{
			document.getElementById('desc').value = '';
			document.getElementById('need').value = '';
			document.getElementById('item').value = '';
		}
		if(id == '4')
		{
			document.getElementById('time').value = '';
			document.getElementById('amount').value = '';
			document.getElementById('desc').value = '';
		}
		if(id == '5')
		{
			
			document.getElementById('name').value = '';
			document.getElementById('points_ratio').value = '';
			document.getElementById('reward_ratio').value = '';
			document.getElementById('email').value = '';
			//document.getElementById('reward_ratio').value = '';
		}
		if(id == '6')
		{
			
			document.getElementById('name').value = '';
			document.getElementById('email').value = '';
			//document.getElementById('reward_ratio').value = '';
		}
		if(id == '7')
		{
			
			document.getElementById('need').value = '';
			document.getElementById('desc').value = '';
			document.getElementById('promo_id1').value = '';
			//document.getElementById('reward_ratio').value = '';
		}
		if(id == '8')
		{
			
			document.getElementById('name').value = '';
			document.getElementById('email').value = '';
			//document.getElementById('reward_ratio').value = '';
		}
	
}
function add_field(id)
{
	var d = new Date();
var t = d.getTime();
	var element = document.getElementById('field'+id);
	
	var copy = element.cloneNode(true);
	var destination = document.getElementById('parent');
	destination.appendChild(copy);
	//var id = hid;
	var hid = id+1;
	$("#field"+id).attr('id', 'field'+hid);
	/*$("#cust_field"+id).attr('id', 'cust_field'+hid);
	$("#cust_field"+hid).attr('name', 'cust_field'+hid);*/
	/*$("#cust_value"+id).attr('id', 'cust_value'+hid);
	$("#cust_value"+hid).attr('name', 'cust_value'+hid);*/
	$("#cust_field"+id).attr('id', 'cust_field'+hid)
           .attr('name', 'cust_field'+t);
	$("#cust_value"+id).attr('id', 'cust_value'+hid)
           .attr('name', 'cust_value'+t);
    document.getElementById('cust_value'+id).value = '';
	//var hid = id+1;
	//alert(id);
	$('#hid'+id).remove();
	
	
}
function submit_search_form()
{
	
	document.getElementById('search_form').submit();	
}
function search_form1(value1)
{
	//document.getElementById('search_form').submit();
	//alert(value1);
	document.getElementById('cust_value').value = value1; 
	document.getElementById('search_form').submit();	
}

</script>
</head>

<body class="fixed-top" onload="load_fun()">

