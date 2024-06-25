$(document).on('click', '.submit-product', function(){
    var product = JSON.parse($('.product_list').find(':selected').val());
    var key = $(".invoice-tbody tr").length - 1;

    var tableRow = '<tr class=""><td id="' + product.id + '">' + product.name + ' (' + product.price + ' Rs)' + '<input type="hidden" name="invoice_purchase['+ key +'][item]" value="'+ product.name +'"></td><td><button type="button" class="btn btn-secondary me-1 btn-sm minus-btn"><i class="fa-solid fa-minus"></i></button><input type="text" name="invoice_purchase['+ key +'][quantity]" class="quantity" style="padding:7px;" value="1" readonly><button type="button" class="btn btn-secondary ms-1 btn-sm plus-btn"><i class="fa-solid fa-plus"></i></button></td><td class="row-total d-flex"><input type="text" name="invoice_purchase['+ key +'][price]" class="form-control" style="padding:7px;width:60%;" value="' + product.price + '" data-id="' + product.price + '" readonly><button type="button" class="btn btn-danger ms-1 delete-row">Delete</button></td></tr>';

    if (product != '') {
        $('.invoice-tbody').prepend(tableRow);
        updateTotal();
    }
});

// Function to update the total
function updateTotal() {
    var total = 0;
    var gstRate = parseFloat($('.gst_rate').val());
    $('.row-total input').each(function() {
        total += parseFloat($(this).val());
    });

    if (isNaN(gstRate)) {
        gstRate=0;
    }
    
    var finalRate = (gstRate * total) / 100;
    $('.total').val((total + finalRate).toFixed(2));
}

$(document).on('click', '.plus-btn', function(){
    var quantityInput = $(this).prev('input.quantity');
    var quantity = parseInt(quantityInput.val());
    var rowTotalInput = $(this).parent('td').next('td').find('input');
    var originalPrice = parseFloat(rowTotalInput.data('id'));

    quantityInput.val(quantity + 1);
    rowTotalInput.val(originalPrice * (quantity + 1));
    updateTotal();
});

$(document).on('click', '.minus-btn', function(){
    var quantityInput = $(this).next('input.quantity');
    var quantity = parseInt(quantityInput.val());
    var rowTotalInput = $(this).parent('td').next('td').find('input');
    var originalPrice = parseFloat(rowTotalInput.data('id'));

    if (quantity > 1) {
        quantityInput.val(quantity - 1);
        rowTotalInput.val(originalPrice * (quantity - 1));
        updateTotal();
    }
});

$(document).on('keyup', '.gst_rate', function(){
    var gstRate = parseFloat($(this).val());
    
    if (!isNaN(gstRate) && gstRate >= 0) {
        var total = 0;
        $('.row-total input').each(function() {
            total += parseFloat($(this).val());
        });

        var finalRate = (gstRate * total) / 100;
        $('.total').val((total + finalRate).toFixed(2));
    } else {
        updateTotal();
    }
});

$(document).on('click', '.delete-row', function(){
    $(this).parents('tr').remove();
    updateTotal();
});

$(document).on('click', '.form-submit-btn', function(){
    var tr = $(".invoice-tbody tr").length - 2;

    if (tr != 0) {
        $('.invoice-form').submit();
    }else{
        alert('Please Select any Item.');
    }
});