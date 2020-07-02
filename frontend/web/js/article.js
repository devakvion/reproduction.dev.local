var grid = document.querySelector(".grid-article");var masonry = new TinyMasonry(grid);
$('#more').click(function() {
    $.ajax({
        url: '/articles?page=' + page,
        type: 'get',
        success: function (response) {
            if(response){
                $('.art-it').append(response);
                // masonry.items.push(response);
                page++;
               // masonry.update();

            } else {
                $('#more').hide();
            }

        }
    });
});