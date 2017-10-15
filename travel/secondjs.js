
/*Prints entire page */
function myFunction() {
    window.print();
}


/*Prints one paragraph */
function myyFunction() {
var prtContent = document.getElementById("paragraph");
var WindowPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WindowPrint.document.write(prtContent.innerHTML);
WindowPrint.document.close();
WindowPrint.focus();
WindowPrint.print();
WindowPrint.close();
}



