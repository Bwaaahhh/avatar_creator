console.log("1");
function getScreenshot(){
    console.log("2");
    html2canvas($("#photoo"),{
        onrendered: function(canvas) {
            $('#last_creation').html("");
            $('#last_creation').append(canvas);

            $('#test').attr('href', canvas.toDataURL("images"));
            $('#test').attr('download', 'Test file.png');
            $('#test')[0].click();
        }
    });
}
