$wzd_v_form = $( '.verticalDashboard' ).validate({ onsubmit: false });
                
$( '.verticalDashboard' ).wizard({
    orientation: 'vertical', 
    buttonContainerClass: 'mws-button-row',
    submitButtonName: "submit-btn",
    onStepLeave: function(wizard, step) {
        return $wzd_v_form.form();
    }, 
    onBeforeSubmit: function() {
        return $wzd_v_form.form();
    }
});

// Select2
if( $.fn.select2 ) {
    $("select.mws-select2").select2();
}
//Calender Js
// jQuery-UI Datepicker
if( $.fn.datepicker ) {
    $(".mws-datepicker").datepicker({
        showOtherMonths: true
    });

    $(".mws-datepicker-wk").datepicker({
        showOtherMonths: true,
        showWeek: true
    });

    $(".mws-datepicker-mm").datepicker({
        showOtherMonths: true,
        numberOfMonths: 3
    });

    $( "#mws-datepicker-from" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
        showOtherMonths: true,
        onSelect: function( selectedDate ) {
            $( "#mws-datepicker-to" ).datepicker( "option", "minDate", selectedDate );
        }
    });
    $( "#mws-datepicker-to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
        showOtherMonths: true,
        onSelect: function( selectedDate ) {
            $( "#mws-datepicker-from" ).datepicker( "option", "maxDate", selectedDate );
        }
    });

    if( $.fn.timepicker ) {
        $(".mws-dtpicker").datetimepicker();

        $(".mws-tpicker").timepicker({});
    }
}