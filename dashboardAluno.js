document.addEventListener("DOMContentLoaded", function() {
    const cardInner = document.querySelector('.card-inner');
    const rotateBtn = document.querySelector('.rotate-btn');
    let rotated = false;

    rotateBtn.addEventListener('click', function() {
        cardInner.style.transform = rotated ? 'rotateY(0deg)' : 'rotateY(180deg)';
        rotated = !rotated;
    });
});
