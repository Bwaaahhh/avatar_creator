$( function()
{

    $( "#draggable1" ).draggable();
    $( "#draggable2" ).draggable();
    $( "#draggable3" ).draggable();
    $( "#draggable4" ).draggable();
    $( "#draggable5" ).draggable();
    $( "#draggable6" ).draggable();
    $( "#draggable7" ).draggable();
    $( "#draggable8" ).draggable();
    $( "#draggable9" ).draggable();
    $( "#draggable10" ).draggable();
    $( "#draggable11" ).draggable();
    $( "#draggable12" ).draggable();
    $( "#draggable13" ).draggable();
    $( "#draggable14" ).draggable();
    $( "#draggable15" ).draggable();
    $( "#draggable16" ).draggable();

    $( "#photoo" ).droppable(
      {
        drop: function (event, ui)
        {
          draggable.resizable();
        }
      });

  });
