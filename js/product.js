gpNext = document.getElementById("gp-next-btn");
gpPervious = document.getElementById("gp-pervious-btn");
gpIndex = 0;

gpCont = document.querySelector(".slider-group .cont");
mainCard = document.querySelectorAll('.product-group .main-card');
//? Add condition for num of group and if group more then 4 add custom style else add anther style change in ~WIDTH~ 
if (document.body.offsetWidth <= 992) {
    for (let i = 0; i < document.styleSheets[0].cssRules.length; i++) {
        const element = document.styleSheets[0].cssRules[i];
        if (element.selectorText == undefined) {
            if (element.conditionText == "(max-width: 768px)") {
                for (let j = 0; j < element.cssRules.length; j++) {
                    const e = element.cssRules[j];
                    if (e.selectorText == ".slider-group .cont") {
                        if (gpCont.dataset["num"] <= 4)
                            e.style.cssText = `width:calc(101% * ${gpCont.dataset["num"]} + 100px) !important`;
                        else
                            e.style.cssText = `width:calc(100% * ${gpCont.dataset["num"]}) !important`;
                    }
                }
            } else if (element.conditionText == "(max-width: 992px)") {
                for (let j = 0; j < element.cssRules.length; j++) {
                    const e = element.cssRules[j];
                    if (e.selectorText == ".slider-group .cont") {
                        if (gpCont.dataset["num"] <= 4)
                            e.style.cssText = `width: calc(${(gpCont.dataset["num"] * 100) / 3}% + 110px) !important`;
                        else
                            e.style.cssText = `width: ${(gpCont.dataset["num"] * 100) / 3}% !important`;
                    }
                }
            }
        }
    }
}
if ((document.body.offsetWidth >= 977 && gpCont.dataset["num"] <= 4) || ((document.body.offsetWidth <= 977 && document.body.offsetWidth >= 750) && gpCont.dataset["num"] <= 3) || (document.body.offsetWidth > 750 && gpCont.dataset["num"] <= 2)) {
    gpNext.style.display = 'none';
    gpPervious.style.display = 'none';
} else {
    //! DONE
    gpNext.addEventListener("click", function () {
        if (gpCont.dataset["num"] <= 4)
            if (document.body.offsetWidth <= 750) {
                gpIndex = gpCont.dataset["num"] - 1 == gpIndex ? gpIndex : gpIndex + 1;
                gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * 23.6%));transition: 0.5s;`;
            } else if (document.body.offsetWidth <= 992) {
                gpIndex = gpCont.dataset["num"] - 3 == gpIndex ? gpIndex : gpIndex + 1;
                gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (95% / ${gpCont.dataset["num"]})));transition: 0.5s;`;
            }
            else {
                gpIndex = gpCont.dataset["num"] - 4 == gpIndex ? gpIndex : gpIndex + 1;
                gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;width: ${gpCont.dataset["num"] * 25}% !important;`;
            }
        else
            if (document.body.offsetWidth <= 768) {
                gpIndex = gpCont.dataset["num"] - 1 == gpIndex ? gpIndex : gpIndex + 1;
                gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;`;
            } else if (document.body.offsetWidth <= 992) {
                gpIndex = gpCont.dataset["num"] - 3 == gpIndex ? gpIndex : gpIndex + 1;
                gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;`;
            } else {
                gpIndex = gpCont.dataset["num"] - 4 == gpIndex ? gpIndex : gpIndex + 1;
                gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;width: ${gpCont.dataset["num"] * 25}% !important;`;
            }
    });
    //! DONE
    gpPervious.addEventListener("click", function () {
        if (document.body.offsetWidth <= 768) {
            gpIndex = (gpIndex <= gpCont.dataset["num"] - 1) && gpIndex != 0 ? gpIndex - 1 : 0;
            gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;`;
        } else if (document.body.offsetWidth <= 992) {
            gpIndex = (gpIndex <= gpCont.dataset["num"] - 3) && gpIndex != 0 ? gpIndex - 1 : 0;
            gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;`;
        }
        else {
            gpIndex = (gpIndex <= gpCont.dataset["num"] - 4) && gpIndex != 0 ? gpIndex - 1 : 0;
            gpCont.style.cssText = `transform: translateX(calc(${gpIndex} * (100% / ${gpCont.dataset["num"]})));transition: 0.5s;width: ${gpCont.dataset["num"] * 25}% !important;`;
        }
    });
}