
$(document).ready(function () {
    $('#sub_category_name').on('change', function () {
    let id = $(this).val();
    $('#sub_category').empty();
    $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
    $.ajax({
    type: 'GET',
    url: '/subCategory/' + id,
    success: function (response) {
    var response = JSON.parse(response);
    // console.log(response);   
    $('#sub_category').empty();
    $('#sub_category').append(`<option value="0" disabled selected>Select Sub Category</option>`);
    response.forEach(element => {
        $('#sub_category').append(`<option value="${element['id']}">${element['sub_category_name']}</option>`);
        });
    }
});
});
});