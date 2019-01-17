function viewHoroscope(){
    $.ajax({
        url:"viewHoroscope.php",
        method: "GET",
        success: function(data){
            $('.sign').html(data);
        }
    });
}

function addHoroscope() {
    $datum = $("#datum").val();
    $.ajax({
        url:"addHoroscope.php",
        method: "POST",
        data: {
            datum: $datum
        },
        success: function(){
        }
    });
    viewHoroscope();
}



function updateHoroscope() {
    $datum = $("#datum").val();
    $.ajax({
        url:"updateHoroscope.php",
        method: "PUT",
        data: {
            datum: $datum
        },
        success: function(){

        }
    });
    viewHoroscope();

}

function deleteHoroscope() {
    $.ajax({
        url:"deleteHoroscope.php",
        method: "DELETE",
        success: function(){
            alert('Borttagen!');
            $("#datum").val('');
        }
    });
    viewHoroscope();

}

