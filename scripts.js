function getItemDetails(id) {
    fetch(`/api/getItemDetails?id=${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('imgDetails').src = data.imageUrl;
            document.getElementById('title').innerText = `Title: ${data.title}`;
            document.getElementById('count').innerText = `Count: ${data.count}`;
            document.getElementById('price').innerText = `Price: ${data.price}`;
            document.getElementById('description').innerText = `Description: ${data.description}`;
        })
        .catch(error => console.error('Error', error));
}
const urlParams = new URLSearchParams(window.location.search);
const itemId = urlParams.get('id');

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