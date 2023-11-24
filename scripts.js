getItemDetails(itemId);
function sendClick(){
    document.addEventListener("DOMContentLoaded", function () {
        var form = document.querySelector('form');
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            alert('Данные успешно отправлены');
            location.reload();
        });
    });
}