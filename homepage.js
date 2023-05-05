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
  
  const apiKey = 'eda054d33c5533624be7306db4aadd60';
  const appId = 'f84041fc';  
  const query = 'chicken'; // Replace with the search term for the recipe you want to feature
  const apiUrl = `https://api.edamam.com/search?q=chicken&app_id=f84041fc&app_key=eda054d33c5533624be7306db4aadd60`;

  
