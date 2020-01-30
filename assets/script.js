$(document).ready(function(){

$('#search_categorias').change(function(e){
    e.preventDefault();
    var sistema=getUrl();
    alert(sistema);
    //location.href = sistema+'buscar_productos.php?categoria='+$(this).val();
})

});

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);

function getUrl(){
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathname.length));
}
