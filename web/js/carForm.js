$(function() {
    prepareFormMarkup();

    $('#addFotoLink').click(function(e) {
        e.preventDefault();
        $(("div.sf_admin_form_field_Fotos > div")).append(addNewField(newfieldscount));
        newfieldscount = newfieldscount + 1;
    });
});

function prepareFormMarkup() {
    var $fotosTable = $("div.sf_admin_form_field_Fotos div.content table");
    var $fotosContainer = $("div.sf_admin_form_field_Fotos > div");

    var $addFotoLink = $("<a />").attr("href", "#").attr("id", "addFotoLink").html("Add another foto");

    $fotosContainer.append($addFotoLink);
}

newfieldscount = 0;

function addNewField(num) {
    return $.ajax({
        type: 'GET',
        url: '/addNewFoto?num=' + num,
        async: false
    }).responseText;
}