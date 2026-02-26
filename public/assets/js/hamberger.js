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


// اضافه کنید به کدهای جاوااسکریپت موجود در فایل
document.addEventListener('DOMContentLoaded', function() {
    // منوی دسته‌بندی در موبایل
    const mobileCategoryBtn = document.querySelector('.menu-mobile-slid .labal_3 .svg');
    const mobileCategoryMenu = document.querySelector('.menu-mobile-slid .labal_3-3');
    
    if (mobileCategoryBtn && mobileCategoryMenu) {
        mobileCategoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // تغییر وضعیت منو
            if (mobileCategoryMenu.classList.contains('invisible')) {
                mobileCategoryMenu.classList.remove('invisible');
                // چرخاندن آیکون
                const svg = this.querySelector('svg');
                if (svg) {
                    svg.style.transform = 'rotate(180deg)';
                }
            } else {
                mobileCategoryMenu.classList.add('invisible');
                const svg = this.querySelector('svg');
                if (svg) {
                    svg.style.transform = '';
                }
            }
        });
    }
    
    // بستن منو با کلیک روی لینک‌های داخل آن
    const categoryLinks = document.querySelectorAll('.menu-mobile-slid .labal_3-3 button');
    categoryLinks.forEach(link => {
        link.addEventListener('click', function() {
            const menu = this.closest('.labal_3-3');
            if (menu) {
                menu.classList.add('invisible');
                const svg = document.querySelector('.menu-mobile-slid .labal_3 .svg svg');
                if (svg) {
                    svg.style.transform = '';
                }
            }
        });
    });
    
    // بستن منو با کلیک روی آیتم‌های دیگر
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.labal_3')) {
            const menu = document.querySelector('.menu-mobile-slid .labal_3-3');
            const svg = document.querySelector('.menu-mobile-slid .labal_3 .svg svg');
            
            if (menu && !menu.classList.contains('invisible')) {
                menu.classList.add('invisible');
                if (svg) {
                    svg.style.transform = '';
                }
            }
        }
    });
});