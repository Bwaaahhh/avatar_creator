
function getScreenshot(){
    html2canvas($("#photoo"),{
        onrendered: function(canvas) {
            $('.jssora12l').remove();
            $('.jssora12r').remove();

            $('#last_creation').html("");
            $('#last_creation').append(canvas);
            $('#test').attr('href', canvas.toDataURL("images"));
            // $('#test').attr('download', 'Test file.png');
            $('#test')[0].click();
        }
    });
}
