$(document).ready(function() {	//executed after the page has loaded

    function stripTrailingSlash(str) {
        if (str.substr(-1) === '/') {
            return str.substr(0, str.length - 1);
        }
        return str;
    }

    var url = window.location.pathname;
    var activePage = stripTrailingSlash(url);

    $('.nav li a').each(function() {
        var currentPage = stripTrailingSlash($(this).attr('href'));

        if (activePage === currentPage) {
            $(this).parent().addClass('active');
        }
    });


    $("#a-sur").click(function() {
        $("#dialog-sur").dialog("open");
        return false;
    });
    
    $("#a-arte").click(function() {
        $("#dialog-arte").dialog("open");
        return false;
    });

    $("#dialog-sur").dialog({
        autoOpen: false,
        width: 500,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });

    $("#dialog-arte").dialog({
        autoOpen: false,
        width: 500,
        buttons: {
            Ok: function() {
                $(this).dialog("close");
            }
        }
    });
});
