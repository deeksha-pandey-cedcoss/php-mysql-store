$(document).ready(function(){

})

function addcart(id){
    // console.log(id);
    $.ajax({
        url:"../cart.php",
        data:{"id":id},
        type:"POST",
        success:function(result){
            console.log(result);
            // header.location.href="../view/cartview.php";
        }
    })
}

function wishlist(id){
    console.log(id);
    $.ajax({
        url:"../wishlist.php",
        data:{"id":id},
        type:"POST",
        success:function(result){
            console.log(result);
        }
    })
}
function removecart(id){
    console.log(id);
    $.ajax({
        url:"../removecart.php",
        data:{"id":id},
        type:"POST",
        success:function(result){
            console.log(result);
        }
    })
   

}
function removewish(id){
    // console.log(id);
    $.ajax({
        url:"../removewish.php",
        data:{"id":id},
        type:"POST",
        success:function(result){
            console.log(result);
        }
    })
   

}
function full(id)
{
    $.ajax({
        url:"../singlepage.php",
        data:{"id":id},
        type:"POST"
    }).done(function(result){
        window.location="../single.php"
        console.log(result);
        // header.location.href="../single.php"
    })
}
function buynow(id)
{
 $quantity=$("#inputquantity").val();

    // console.log($quantity);
    $.ajax({
        url:"../checkout.php",
        data:{"id":id,'quantity':$quantity},
        type:"POST"
    }).done(function(result){
        console.log(result);
        alert(result);
    })
}