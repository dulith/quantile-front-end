	var ww = document.body.clientWidth;

	$(document).ready(function() {
	$(".nav li a").each(function() {
	if ($(this).next().length > 0) {
	$(this).addClass("parent");
	};
	})

	$(".toggleMenu").click(function(e) {
	e.preventDefault();
	$(this).toggleClass("active");
	$(".nav").toggle();
	});
	adjustMenu();
	})

	$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
	});

	var adjustMenu = function() {
	if (ww < 768) {
	$(".toggleMenu").css("display", "inline-block");
	if (!$(".toggleMenu").hasClass("active")) {
	$(".nav").hide();
	} else {
	$(".nav").show();
	}
	$(".nav li").unbind('mouseenter mouseleave');
	$(".nav li a.parent").unbind('click').bind('click', function(e) {
	// must be attached to anchor element to prevent bubbling
	e.preventDefault();
	$(this).parent("li").toggleClass("hover");
	});
	} 
	else if (ww >= 768) {
	$(".toggleMenu").css("display", "none");
	$(".nav").show();
	$(".nav li").removeClass("hover");
	$(".nav li a").unbind('click');
	$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
	// must be attached to li so that mouseleave is not triggered when hover over submenu
	$(this).toggleClass('hover');
	});
	}
	}


	$(document).ready(function() {
	//Set the carousel options
	$('#quote-carousel').carousel({
	pause:'hover',
	interval: 6000,
	});
	});


	/*Float Label Form JS*/
	$(document).ready(function(){
	// Floating Labels
	//==============================================================
	$('[data-toggle="floatLabel"]').attr('data-value', $(this).val()).on('keyup change', function() {
	$(this).attr('data-value', $(this).val());
	});
	});


	$(document).ready(function() {
	$('#rootwizard').bootstrapWizard({'nextSelector': '.button-next', 'previousSelector': '.button-previous'});
	});


	/*Add Tabel row*/
	function addRow(tableID) {

	var table = document.getElementById(tableID);

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	cell1.innerHTML = rowCount + 0;

	var cell2 = row.insertCell(1);
	var element1 = document.createElement("input");
	element1.type = "text";
	element1.name="txtbox[]";
	element1.placeholder="Task [required]";
	element1.className="form-group, form-control , input-sm";
	cell2.appendChild(element1);



	var cell3 = row.insertCell(2);
	var element2 = document.createElement("input");
	element2.type = "text";
	element2.name = "txtbox[]";
	element2.placeholder="# of Days [required]";
	element2.className="form-group, form-control , input-sm";
	cell3.appendChild(element2);


	}
