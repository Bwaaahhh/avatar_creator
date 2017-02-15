
function getScreenshot(){

    var capture = {};

    html2canvas($("#photoo"),{
        onrendered: function(canvas) {
            capture.img = canvas.toDataURL( "image/png" );
			capture.data = { '#photoo' : capture.img };
			$.ajax({
			url: "controller/ajax.php",
			data: capture.data,
			type: 'post',
			success: function( result ) {
				console.log( result );
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
