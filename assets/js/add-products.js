$("#open_customer_add_responsive").click(function() {
    jQuery("#myCheckOutResponsive").modal("show");

});
$("#close_customer_add_responsive").click(function() {
    jQuery("#myCheckOutResponsive").modal("hide");

});

let max = 0;

$("#add-products").click(function() {


    $("[id^=buy_product_]").each(function() {
        if (parseInt(this.id.split('_')[2]) > max) {
            max = parseInt(this.id.split('_')[2]);
        }
    });
    max += 1;
    $("#sidebar .empty").fadeOut(1500);

    $("#sidebar").append(`
    <div class="product product-side-big mb-1 d-flex justify-content-between"  id="buy_product_` + max + `">
    <div class="product-image">
        <img class="img-products" src="assets/img/brands/Mask Group 1.png" alt="">
    </div>
    <div class="disc product-details mt-2">
        <a href="" class="name" data-toggle="modal" data-target="#myModalRight">Andora Full Sleeve Pullover</a>
        <div class="size">Small</div>
    </div>
    <div class="quan-salary">
        <div class="quant mt-1">
            <span class="increase-decrease-btn minus minus-side add-action" id="minus_` + max + `">
                <i class="fas fa-minus"></i>
            </span>
            <input type="text" name="quantity" id="" class="qt" value="1">

            <span class="increase-decrease-btn plus plus-side add-action" id="plus_` + max + `">
                <i class="fas fa-plus"></i>
            </span>
        </div>
        <div class="mt-1">
        <input type="text" name="pricequantity" id="price_` + max + `" class="price allparentprice" value="2.29$" disabled>

           
            <input type="text" name="puquantity" id="pu_` + max + `" class="pu d-none" value="2.29">

        </div>
    </div>
    <div class="op">
        <span class="remove remove-side" id="remove_` + max + `">
                <i class="fas fa-times remove-icon"></i>
            </span>
    </div>
</div>
    
    
    `)
    jQuery("#myModalRight").modal("hide");
});


$(document).on('click', '.remove-side', function() {
    $(this).closest(".product-side-big").remove();
    sum();

});



$(document).on('click', '.plus-side', function() {
    let productquantity = $(this).closest(".product-side-big").find(".qt");
    let productquantitypricenone = $(this).closest(".product-side-big").find(".pu");
    let productquantityprice = $(this).closest(".product-side-big").find(".price");

    productquantity.val(parseInt(productquantity.val()) + 1);
    productquantityprice.val((parseInt(productquantity.val()) * productquantitypricenone.val()).toFixed(2) + "$");


});

$(document).on('click', '.minus-side', function() {
    let productquantity = $(this).closest(".product-side-big").find(".qt");
    let productquantitypricenone = $(this).closest(".product-side-big").find(".pu");
    let productquantityprice = $(this).closest(".product-side-big").find(".price");
    productquantity.val(parseInt(productquantity.val()) - 1);
    productquantityprice.val((parseInt(productquantity.val()) * productquantitypricenone.val()).toFixed(2) + "$");




});

/* Products */

// $(document).on('click', '.product-width', function() {
//     let oneproductprice = $(this).closest(".product-width").find(".one-price");
//     alert(oneproductprice.val(parseInt(oneproductprice.val())) + 1);
// });


// $(document).ready(function() {
//     $("#sidebar .add-action").click(function() {
//         if ($(this).hasClass('plus-side')) {
//              var text = $(this).parent().parent().find("[name=quantity]", '.product-side-big')


//             text.val(parseInt(text.val()) + 1);
//             alert("heelo");
//         } else {
//             var text = $(this).parent().find("[name=quantity]", '.product-side-big')
//             if (parseInt(text.val()) > 1) {


//                 text.val(parseInt(text.val()) - 1);
//             }
//         }
//     });

// });