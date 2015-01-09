$(document).ready(function() {	//executed after the page has loaded
    $("#a-price-detail").click(function() {
        $("#dialog-price-detail").dialog("open");
        return false;
    });

    $("#dialog-price-detail").dialog({
        autoOpen: false,
        modal: true,
        width: 500,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });
    
    $(document).on('click', '.ui-widget-overlay', function() {
        $('#dialog-price-detail').dialog("close");
    });
});