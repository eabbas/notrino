const garah = document.getElementById('garah')
function Hamberger(state,element){
    if(state == "open"){
        element.nextElementSibling.classList.remove('-right-full')
        element.nextElementSibling.classList.add('right-0')
        garah.classList.remove('right-full');
        garah.classList.add('right-0');
    }
    if(state == "close"){
        element.parentElement.children[1].classList.remove('right-0')
        element.parentElement.children[1].classList.add('-right-full')
        garah.classList.remove('right-0');
        garah.classList.add('right-full');
    }
}

const closeFilter=document.getElementById("closeFilter");
function filterclick(name,element){
    if(name == "open"){
        element.nextElementSibling.classList.remove("bottom-full");
        element.nextElementSibling.classList.add("bottom-0");
    }
    if(name == "close"){
        closeFilter.classList.remove("bottom-0")
        closeFilter.classList.add("bottom-full")
    }
}

let currentSlide = 0;
const slides = document.querySelector('.slides');
const totalSlides = document.querySelectorAll('.slide').length;
function showSlide(index) {
    if (index >= totalSlides) currentSlide = 0;
    else if (index < 0) currentSlide = totalSlides - 1;
    else currentSlide = index;
    
    // تغییر جهت حرکت به راست (مثبت) برای RTL
    slides.style.transform = `translateX(${currentSlide * 100}%)`;
}
// معکوس کردن عملکرد دکمه‌ها برای RTL
document.querySelector('.next').addEventListener('click', () => showSlide(currentSlide - 1));
document.querySelector('.prev').addEventListener('click', () => showSlide(currentSlide + 1));
// تغییر جهت حرکت اتوماتیک
setInterval(() => showSlide(currentSlide - 1), 5000);

// مقداردهی اولیه
showSlide(0);


let dashboard = document.querySelectorAll('.dashboard')
dashboard.forEach((item)=>{
    item.addEventListener('click', ()=>{
        if (item.nextElementSibling.classList.contains('max-h-0')) {
            dashboard.forEach((element)=>{
                element.nextElementSibling.classList.remove('max-h-[500px]')
                element.children[0].classList.remove('rotate-180')
                element.nextElementSibling.classList.add('max-h-0')
            })
            item.nextElementSibling.classList.remove('max-h-0')
            item.nextElementSibling.classList.add('max-h-[500px]')
            item.children[0].classList.add('rotate-180')
        } else {
            item.nextElementSibling.classList.remove('max-h-[500px]')
            item.children[0].classList.remove('rotate-180')
            item.nextElementSibling.classList.add('max-h-0')
        }
    })
})
