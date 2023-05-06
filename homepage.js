const wrapper = document.querySelector('.wrapper');
const indicators = [...document.querySelectorAll('.indicators button')];

let currentTestimonial = 0; // Default 0

indicators.forEach((item, i) => {
    item.addEventListener('click', () => {
        indicators[currentTestimonial].classList.remove('active');
        wrapper.style.marginLeft = `-${100 * i}%`;
        item.classList.add('active');
        currentTestimonial = i;
    })
})


function openNav() {
    document.getElementById("sidebar").style.width = "250px";
    document.getElementById("hero").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("hero").style.marginLeft = "0";
  }




