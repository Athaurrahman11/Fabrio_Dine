document.querySelector("form").addEventListener("submit", function(e){
  const name = document.querySelector("input[name='name']").value.trim();
  const email = document.querySelector("input[name='email']").value.trim();
  const phone = document.querySelector("input[name='phone']").value.trim();

  if(!name || !email || !phone){
    e.preventDefault();
    alert("Please fill all fields before submitting.");
  }
});
const cartButtons = document.querySelectorAll(".card-button button");
cartButtons.forEach(btn => {
  btn.addEventListener("click", () => {
    alert("Item added to cart!");
  });
});

const navBtn = document.querySelector('#navbtn');
  const closeBtn = document.querySelector('#nav-close-button');

  navBtn.addEventListener('click', () => {
    document.body.classList.add('mobile-menu');
  });


  closeBtn.addEventListener('click', () => {
    document.body.classList.remove('mobile-menu');
  });