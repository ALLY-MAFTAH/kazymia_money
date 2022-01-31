/*
 * DataTables - Tables
 */


$(function () {

	
	/*
	
  // Simple Data Table

  $('#data-table-simple').DataTable({
    "responsive": true,
  });

  // Row Grouping Table

  var table = $('#data-table-row-grouping').DataTable({
    "responsive": true,
    "columnDefs": [{
      "visible": false,
      "targets": 2
    }],
    "order": [
      [2, 'asc']
    ],
    "displayLength": 25,
    "drawCallback": function (settings) {
      var api = this.api();
      var rows = api.rows({
        page: 'current'
      }).nodes();
      var last = null;

      api.column(2, {
        page: 'current'
      }).data().each(function (group, i) {
        if (last !== group) {
          $(rows).eq(i).before(
            '<tr class="group"><td colspan="5">' + group + '</td></tr>'
          );

          last = group;
        }
      });
    }
  });

  */
  
  
	$("#page-length-option").DataTable({
		"responsive": false, 
		// "scrollY": 400, 
		// "scrollX": true, 
		/* "lengthMenu": [
			[10, 25, 50, -1],
			[10, 25, 50, "All"]
		], */ 
		"language": {
			"emptyTable": globalLang["default_listing_no_record_found"], 
			"info"		: globalLang["default_listing_pagination_showing"] + " _START_ " + globalLang["default_listing_pagination_to"] + " _END_ " + globalLang["default_listing_pagination_of"] + " _TOTAL_ " + globalLang["default_listing_view_records"],
			"infoEmpty"	: "", 
			// "infoEmpty"	: globalLang["default_listing_pagination_empty"], 
			"search"	: globalLang["default_listing_view_filter"] + " _INPUT_", 
			// "searchPlaceholder"	: "Search...", 
			// "lengthMenu": "Show _MENU_ entries", 
			"lengthMenu": globalLang["default_listing_view_show"] + ' <select>'+
				'<option value="5">5</option>'+
				'<option value="10">10</option>'+
				'<option value="20">20</option>'+
				'<option value="50">50</option>'+
				'<option value="-1">' + globalLang["default_listing_view_all"] + '</option>'+
				'</select> ' + globalLang["default_listing_view_records"], 
			"paginate": {
				"first"		: globalLang["default_listing_pagination_first"], 
				"last"		: globalLang["default_listing_pagination_last"], 
				"next"		: globalLang["default_listing_pagination_next"], 
				"previous"	: globalLang["default_listing_pagination_prev"], 
			}, 
		}
	});
	
	
	/*
	
  // Dynmaic Scroll table

  $('#scroll-dynamic').DataTable({
    "responsive": true,
    scrollY: '50vh',
    scrollCollapse: true,
    paging: false
  })

  // Horizontal And Vertical Scroll Table

  $('#scroll-vert-hor').DataTable({
    "scrollY": 400, 
    "scrollX": true, 
    // "responsive": true, 
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
        ]
  })

  // Multi Select Table

  $('#multi-select').DataTable({
    responsive: true,
    "paging": true,
    "ordering": false,
    "info": false,
    "columnDefs": [{
      "visible": false,
      "targets": 2
    }],


  });
  
  */
  
});

/*

// Datatable click on select issue fix
$(window).on('load', function () {
  $(".dropdown-content.select-dropdown li").on("click", function () {
    var that = this;
    setTimeout(function () {
      if ($(that).parent().parent().find('.select-dropdown').hasClass('active')) {
        // $(that).parent().removeClass('active');
        $(that).parent().parent().find('.select-dropdown').removeClass('active');
        $(that).parent().hide();
      }
    }, 100);
  });
});

*/
















var checkbox = $("table tbody tr th input");
var selectAll = $("table input.select-all");


// Select A Row Function
$(document).ready(function () {
	checkbox.on("click", function () {
		$(this).parent().parent().parent().toggleClass("selected");
	})
	
	checkbox.on("click", function () {
		if ($(this).attr("checked")) {
			$(this).attr("checked", false);
		} 
		else {
			$(this).attr("checked", true);
		}
	})
	
	// Select Every Row on the table containing the checkbox.
	selectAll.on("click", function () {
		var _table = $(this);
		var _tableId = _table.data("table");
		
		checkbox = $("table#" + _tableId + " tbody tr th input");
		
		$(this).toggleClass("clicked");
		if (selectAll.hasClass("clicked")) {
			$("#" + _tableId + " tbody tr").addClass("selected");
		} 
		else {
			$("#" + _tableId + " tbody tr").removeClass("selected");
		}
		
		if ($("#" + _tableId + " tbody tr").hasClass("selected")) {
			checkbox.prop("checked", true);
		} 
		else {
			checkbox.prop("checked", false);
		}
	})
})