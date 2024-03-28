const scrollButton = document.getElementById('scrollButton');
const segundaImagem = document.getElementById('segundaImagem');

console.log(scrollButton);

scrollButton.addEventListener('click', function(){
    segundaImagem.style.display = 'block';
})