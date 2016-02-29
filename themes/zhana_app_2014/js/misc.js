/**
 * 
 */
function openAction(url) {
    var windowSize = "width=500,height=600,scrollbars=yes";    
    var windowName = "popUp";//$(this).attr("name");
    var windowSize = windowSize;

    window.open(url, windowName, windowSize);
    
    return false;
}

function openSubAction(url) {
    var windowSize = "width=500,height=600,scrollbars=yes";    
    var windowName = "popUp_sub";//$(this).attr("name");
    var windowSize = windowSize;

    window.open(url, windowName, windowSize);
    
    return false;
}

function openActionResize(url, w, h) {
    var windowSize = "width="+w+",height="+h+",scrollbars=yes,navbar=no";    
    var windowName = "popUp";//$(this).attr("name");
    var windowSize = windowSize;

    window.open(url, windowName, windowSize);
    
    return false;
}