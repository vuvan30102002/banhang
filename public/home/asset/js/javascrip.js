const sliderItem = document.querySelectorAll(".slider-item");
for (let index = 0; index < sliderItem.length; index++) {
    sliderItem[index].style.left = index * 100 + "%";
}
const sliderItems = document.querySelector(".slider-items");
const arrowleft = document.querySelector(".arrowleft");
const arrowright = document.querySelector(".arrowright");
let i = 0;
if (arrowright != null && arrowleft != null) {
    arrowright.addEventListener("click", () => {
        if (i < sliderItem.length - 1) {
            i++;
            sliderItems.style.left = -i * 100 + "%";
        } else {
            return false;
        }
    });
    arrowleft.addEventListener("click", () => {
        if (i <= 0) {
            return false;
        }
        {
            i--;
            sliderItems.style.left = -i * 100 + "%";
        }
    });
}

const imageSmall = document.querySelectorAll(".product-images-items img");
const imageMain = document.querySelector(".main-image");
for (let index = 0; index < imageSmall.length; index++) {
    imageSmall[index].addEventListener("click", () => {
        imageMain.src = imageSmall[index].src;
    });
}

const flus = document.querySelectorAll(".flus");
const subtraction = document.querySelectorAll(".subtraction");
const valueinput = document.querySelectorAll(".value-input");
let v = 1;
for (let index = 0; index < subtraction.length; index++) {
    flus[index].addEventListener("click", () => {
        inputValue = valueinput[index].value;
        inputValue++;
        valueinput[index].value = inputValue;
        // v++;
    });
    subtraction[index].addEventListener("click", () => {
        inputValue = valueinput[index].value;
        if (inputValue <= 1) {
            return false;
        } else {
            inputValue--;
            valueinput[index].value = inputValue;
        }
    });
}
