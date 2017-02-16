
function getScreenshot(){

    var capture = {};

    html2canvas($("#photoo"),{
      onrendered: function(canvas) {
        $("#test").attr('href' , canvas.toDataURL('image/png'));
        $("#test").attr('download' , 'Votre avatar.png');
        $('#test')[0].click();
        capture.img = canvas.toDataURL( "image/png" );
  			capture.data = { '#photoo' : capture.img };
  			$.ajax({
  			url: "controller/ajax.php",
  			data: capture.data,
  			type: 'post',
  			success: function( result ) {
          $("#url").val(result);
  			}
			});
        }
    });
}


//--------------------------- COPIER URL ---------------------------

function copier()
{
  var url = document.querySelector('#url');
  url.select();

  document.execCommand('copy'); // cut
}
