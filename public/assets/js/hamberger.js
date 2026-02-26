const garah = document.getElementById('garah')

function Hamberger(state, element) {
    if (state == "open") {
        element.nextElementSibling.classList.remove('-right-full')
        element.nextElementSibling.classList.add('right-0')
        garah.classList.remove('right-full');
        garah.classList.add('right-0');
    }
    if (state == "close") {
        document.querySelector('.menu-mobile-slid').classList.remove('right-0')
        document.querySelector('.menu-mobile-slid').classList.add('-right-full')
        garah.classList.remove('right-0');
        garah.classList.add('right-full');
    }
}

// مدیریت منوی دسته‌بندی
document.addEventListener('DOMContentLoaded', function() {
    const categoryButton = document.querySelector('.labal_3 .svg');
    const categoryMenu = document.querySelector('.labal_3-3');
    const categorySvg = categoryButton?.querySelector('svg');
    
    if (categoryButton && categoryMenu) {
        categoryButton.addEventListener('click', function(e) {
            e.stopPropagation();
            
            // toggle منو
            if (categoryMenu.classList.contains('invisible')) {
                categoryMenu.classList.remove('invisible');
                categoryMenu.classList.add('visible');
                if (categorySvg) {
                    categorySvg.style.transform = 'rotate(180deg)';
                }
            } else {
                categoryMenu.classList.add('invisible');
                categoryMenu.classList.remove('visible');
                if (categorySvg) {
                    categorySvg.style.transform = 'rotate(0deg)';
                }
            }
        });
        
        // بستن منو با کلیک روی آیتم‌ها
        const categoryItems = document.querySelectorAll('.labal_3-3 button');
        categoryItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.stopPropagation();
                // اجرای عملیات مورد نظر
                console.log('Category selected:', this.getAttribute('data-cat-id'));
                
                // بستن منو بعد از کلیک
                categoryMenu.classList.add('invisible');
                categoryMenu.classList.remove('visible');
                if (categorySvg) {
                    categorySvg.style.transform = 'rotate(0deg)';
                }
            });
        });
        
        // بستن منو با کلیک بیرون
        document.addEventListener('click', function(e) {
            if (!categoryButton.contains(e.target) && !categoryMenu.contains(e.target)) {
                categoryMenu.classList.add('invisible');
                categoryMenu.classList.remove('visible');
                if (categorySvg) {
                    categorySvg.style.transform = 'rotate(0deg)';
                }
            }
        });
    }
    
    // جلوگیری از بسته شدن منو با کلیک روی خود منو
    if (categoryMenu) {
        categoryMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
});

// کد اسلایدر شما
let currentSlide = 0;
const slides = document.querySelector('.slides');
const totalSlides = document.querySelectorAll('.slide').length;

if (slides && totalSlides > 0) {
    function showSlide(index) {
        if (index >= totalSlides) currentSlide = 0;
        else if (index < 0) currentSlide = totalSlides - 1;
        else currentSlide = index;
        
        slides.style.transform = `translateX(${currentSlide * 100}%)`;
    }
    
    const nextBtn = document.querySelector('.next');
    const prevBtn = document.querySelector('.prev');
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => showSlide(currentSlide - 1));
    }
    if (prevBtn) {
        prevBtn.addEventListener('click', () => showSlide(currentSlide + 1));
    }
    
    setInterval(() => showSlide(currentSlide - 1), 5000);
    showSlide(0);
}