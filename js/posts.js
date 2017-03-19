function searchWeb() {
var b = document.getElementById('search-btn').value;
        window.location.href = 'http:/localhost/PetBuster/views/post-view.html'+b;
}

$("#search-btn").change(function() {
      $.post("do_search.php", { roll:$("#search-btn").val() })
     .done(function( data ) {
         $("#result").html(data);
     });
}); 