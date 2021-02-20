$(document).ready(function() {	//executed after the page has loaded
    $("#a-sur").click(function() {
        $("#dialog-sur").dialog("open");
        return false;
    });

    $("#a-arte").click(function() {
        $("#dialog-arte").dialog("open");
        return false;
    });
    
    $("#a-podminky").click(function() {
        $("#dialog-podminky").dialog("open");
        return false;
    });

    $("#a-ochrana").click(function() {
        $("#dialog-ochrana").dialog("open");
        return false;
    });

    $("#dialog-sur").dialog({
        autoOpen: false,
        modal: true,
        width: 500,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });

    $("#dialog-arte").dialog({
        autoOpen: false,
        modal: true,
        width: 500,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });
    
    $("#dialog-podminky").dialog({
        autoOpen: false,
        modal: true,
        width: 500,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });

    $("#dialog-ochrana").dialog({
        autoOpen: false,
        modal: true,
        width: 700,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });

    $(document).on('click', '.ui-widget-overlay', function() {
        $('#dialog-arte').dialog("close");
        $('#dialog-sur').dialog("close");
        $('#dialog-podminky').dialog("close");
        $('#dialog-ochrana').dialog("close");
    });

});
