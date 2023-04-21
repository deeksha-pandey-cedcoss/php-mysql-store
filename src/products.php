<?php
include "config.php";
$sql="SELECT * FROM `products` ";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);
if($num>0){
    echo "<div class=\"row\" style = 'box-sizing: border-box;'>";
    while($row=mysqli_fetch_assoc($result)){  
         // see how to give box-sizing border-box here
        echo "<div class=\"col-lg-4 col-md-8 col-sm-6 d-flex single\">
            <div class=\"card w-100 my-2 shadow-2-strong\">
                <img src=\"$row[image]\" class=\"card-img-top\"
                    style=\"aspect-ratio: 1 / 1\"   id='$row[id]' onclick='full(this.id)'/>
                <div class=\"card-body d-flex flex-column\">
                    <h5 class=\"card-title\">$row[name]</h5>
                    <p class=\"card-text\">$ $row[price]</p>
                    <div class=\"card-footer d-flex align-items-end pt- px-0 pb-0 mt-auto\">
                    <a class=\"m-0 btn btn-secondary shadow-0 me-0 add-cart\" id='$row[id]' onclick = 'addcart(this.id)'>AddCart</a>&nbsp&nbsp
                    
                    <button type='button' class='btn  btn-primary btn-sm mb-2' id='".$row['id']."' onclick='wishlist(this.id)' data-mdb-toggle='tooltip'
                    title='Move to the wish list'>
                    <i class='fas fa-heart fa-lg text-danger px-1'></i>
                    </button>
                        </div>
                         
                </div>
            </div>
        </div>"; 
    }
  echo "  </div>";
}
?>

