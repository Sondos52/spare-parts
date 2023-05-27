//start menu

let menu = document.getElementById('#menu-btn');
let nav = document.querySelector(".main-nav");
let items = document.querySelector(".items");
let itemsUl = document.querySelector(".items ul");
let slider = document.querySelector(".carsal .slider");
let perviousBtn = document.getElementById("pervious");
let nextBtn = document.getElementById("next");
if (menu !== null) {
    menu.onclick = function () {
        if (nav.style.height === "500px") {
            if (document.body.offsetWidth <= 768) {
                nav.style.height = "70px";
            } else {
                nav.style.height = "100px";
            }
            items.style.display = "none";
            // nextBtn.style.cssText = "transform: translateY(auto);transition-duration: 0.3s;"
            // perviousBtn.style.cssText = "transform: translateY(auto);transition-duration: 0.3s;"
        } else {
            nav.style.cssText = "height:500px;"
            // nextBtn.style.cssText = "transform: translateY(600%);transition-duration: 0.3s;"
            // perviousBtn.style.cssText = "transform: translateY(600%);transition-duration: 0.3s;"
            items.style.cssText = "height:400px"
            setTimeout(_ => items.style.display = "block", 350);
            itemsUl.style.cssText = "flex-direction:column-reverse;align-items:flex-start";
        }
    }
}

//start casual

let imageIndex = 0;
if (nextBtn !== null) {
    nextBtn.addEventListener("click", val => {
        imageIndex = imageIndex == 0 ? 0 : imageIndex == 2 ? 0 : imageIndex - 1;
        slider.style.cssText = `transform: translateX(calc(calc(100% / 3 * -1) * ${imageIndex}));`
    });
    perviousBtn.addEventListener("click", val => {
        imageIndex = imageIndex >= 2 ? 0 : imageIndex + 1;
        slider.style.cssText = `transform: translateX(calc(calc(100% / 3 * -1) * -${imageIndex}));`
    });
}
//start timeline 
let tlNext = document.getElementById("tl-next-btn");
let tlPervious = document.getElementById("tl-pervious-btn");
let tlSlider = document.querySelector(".history .timeline .slider")
let tlIndex = 0;
if (tlPervious !== null) {
    tlPervious.setAttribute("disabled", "");
    tlNext.addEventListener("click", _ => {
        // if (Screen.width >= 992) {
        tlIndex = tlIndex === 1 ? 1 : tlIndex + 1;
        if (tlIndex === 1) {
            tlNext.setAttribute("disabled", "");
            tlPervious.removeAttribute("disabled");
        }
        tlSlider.style.cssText = `transform: translateX(calc(${tlIndex} * ${screen.width <= 1100 ? "33vw" : "30vw"}));`;
        // } else {
        // tlIndex = tlIndex === 5 ? 5 : tlIndex + 1;
        // if (tlIndex === 5) {
        //     tlNext.setAttribute("disabled", "");
        //     tlPervious.removeAttribute("disabled");
        // }
        // tlSlider.style.cssText = `transform: translateX(calc(${tlIndex} * ${tlIndex === 5 ? "200px" : "250px"}));`;
        // }
    });
    tlPervious.addEventListener("click", _ => {
        tlIndex = tlIndex === 0 ? 0 : tlIndex - 1;
        if (tlIndex === 0) {
            tlNext.removeAttribute("disabled");
            tlPervious.setAttribute("disabled", "");
        }
        tlSlider.style.cssText = `transform: translateX(calc(${tlIndex} * 45%));`;
    });
}
addEventListener("resize", e => {
    location.reload();
});

let userBtnD = document.getElementById("users-btn");
let groupBtnD = document.getElementById("groups-btn");
let productBtnD = document.getElementById("product-btn");
let controlBtnD = document.getElementById("control-btn");
let categoryBtnD = document.getElementById("category-btn");
let companyBtnD = document.getElementById("company-btn");
let msgBtnD = document.getElementById("msg-btn");
let leftSlider = document.querySelector(".left-slide");
let rightSlider = document.querySelector(".right-slide");
let menuBtnDash = document.getElementById("menu-btn-dash");
if (userBtnD !== null) {
    controlBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "control-panel") {
                element.style.display = "flex";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    userBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "users") {
                element.style.display = "flex";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    productBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "product-dash") {
                element.style.display = "block";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    groupBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "group-dash") {
                element.style.display = "block";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    categoryBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "category-dash") {
                element.style.display = "block";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    companyBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "company-dash") {
                element.style.display = "block";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    msgBtnD.addEventListener("click", child => {
        for (let i = 0; i < leftSlider.children.length; i++) {
            const element = leftSlider.children[i];
            element.style.display = "none";
            if (element.className == "msg-dash") {
                element.style.display = "block";
                if (document.body.offsetWidth <= 750)
                    menuBtnDash.click();
            }
        }
    });
    menuBtnDash.onclick = function () {
        if (document.body.offsetWidth <= 750) {
            if (rightSlider.style.height !== "auto") {
                rightSlider.style.height = "auto";
                leftSlider.style.cssText = "transition-duration: .3s;";
                setTimeout(_ => rightSlider.style.display = "block", 200);
            } else {
                rightSlider.style.cssText = "height :0;";
                leftSlider.style.cssText = "transition-duration: .3s;"
                setTimeout(_ => rightSlider.style.display = "none", 100);
            }
        } else {
            if (rightSlider.style.width != "7%") {
                rightSlider.style.cssText = "width:7%;transition-duration: .3s;";
                let spans = document.querySelectorAll(".right-slide li span");
                for (let i = 0; i < spans.length; i++) {
                    const element = spans[i];
                    element.style.display = "none";
                }
            } else {
                rightSlider.style.cssText = "width: 20%; transition-duration: .3s;";
                let spans = document.querySelectorAll(".right-slide li span");
                for (let i = 0; i < spans.length; i++) {
                    const element = spans[i];
                    setTimeout(_ => element.style.display = "block", 100);
                }
            }
        }
    }
    let editBtnUser = document.querySelectorAll(".edit-btn-user");
    editUser = document.querySelector(".edit-user-frame");
    editForm = document.querySelector(".edit-frame");
    for (let i = 0; i < editBtnUser.length; i++) {
        const element = editBtnUser[i];
        element.onclick = function () {
            editUser.style.height = `${document.body.offsetHeight}px`;
            editForm.style.marginTop = `${scrollY + 50}px`;
            editUser.style.display = "flex";
            document.body.style.overflow = "hidden";
            //console.log(editUser.children.item(0).children.item(2).children.item(1).value);
            //set ID
            editUser.children.item(0).children.id.value = element.dataset["id"];
            //Set Name
            editUser.children.item(0).children.item(1).children.item(1).value = element.parentElement.parentElement.children.item(0).dataset['name']
            //Set E-mail
            editUser.children.item(0).children.item(2).children.item(1).value = element.parentElement.parentElement.children.item(1).dataset['email']
            //Set Type
            if (element.parentElement.parentElement.children.item(3).dataset['type'] == 1)
                editUser.children.item(0).children.item(3).children.item(1).children.item(1).setAttribute("checked", element.parentElement.parentElement.children.item(3).dataset['type']);
            else
                editUser.children.item(0).children.item(3).children.item(1).children.item(3).setAttribute("checked", element.parentElement.parentElement.children.item(3).dataset['type']);
        };
    }
    let closeEditUser = document.querySelector(".close-user");
    closeEditUser.addEventListener("click", e => {
        e.preventDefault();
        editUser.style.display = "none";
        document.body.style.overflow = "hidden";
    });

    let noDeleteBtn = document.getElementById("no-delete");
    noDeleteBtn.onclick = function (event) {
        document.querySelector(".frame+.delete-user-frame").style.display = "none";
        event.preventDefault();
        document.body.style.overflowY = "scroll";
    }
    let deleteUserFrame = document.querySelector(".delete-user-frame");
    let deleteBtnUser = document.querySelectorAll(".delete-user-btn");
    let alterUser = document.querySelector(".alter-user");
    for (let i = 0; i < deleteBtnUser.length; i++) {
        const element = deleteBtnUser[i];
        element.onclick = function () {
            deleteUserFrame.style.height = `${document.body.offsetHeight}px`;
            deleteUserFrame.style.display = "flex";
            document.body.style.overflow = "hidden";
            alterUser.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - alterUser.style.height)}px`;
            deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value = element.dataset['id'];
        };
    }
    let addUser = document.querySelector(".btn-user");
    addUser.onclick = _ => {
        editUser = document.querySelector(".add-user-frame");
        editUser.style.display = "flex";
        editUser.style.height = `${document.body.offsetHeight}px`;
        // document.body.style.overflow = "hidden";
    };
    closeAddFrame = document.getElementById("close-add-frame");
    closeAddFrame.addEventListener("click", e => {
        e.preventDefault();
        document.querySelector(".add-user-frame").style.display = "none";
    });
    let searchUser = document.getElementById("search-user");
    searchUser.addEventListener("keyup", _ => {
        let listUser = document.querySelector(".table-user .scroll-tb .tb-users tbody").children;
        for (let i = 0; i < listUser.length; i++) {
            const element = listUser[i];
            for (let j = 0; j < element.children.length; j++) {
                const td = element.children[j];
                if (!td.innerHTML.includes(searchUser.value))
                    element.style.display = "none";
                else
                    element.style.display = "table-row";
                break;
            }
        }
    })

    let formsAddProduct = document.getElementById("form-add-product");
    let frameAddProduct = document.querySelector(".add-product-frame");
    let cancelAddProduct = document.querySelector(".add-product-form .btn-form button");
    let btnAddProduct = document.querySelector(".btn-add-product");
    btnAddProduct.onclick = function () {
        frameAddProduct.style.display = 'flex';
        frameAddProduct.style.height = `${document.body.offsetHeight}px`;
        formsAddProduct.style.marginTop = `${window.scrollY + 50}px`;
        // document.body.style.overflow = "hidden";
    }
    cancelAddProduct.onclick = function (event) {
        event.preventDefault();
        frameAddProduct.style.display = "none";
        document.body.style.overflowY = "scroll";
    };

    let deleteBtnProduct = document.querySelectorAll(".btn-delete-product");
    for (let i = 0; i < deleteBtnProduct.length; i++) {
        const element = deleteBtnProduct[i];
        element.onclick = function () {
            deleteUserFrame.style.display = "flex";
            deleteUserFrame.style.height = `${document.body.offsetHeight}px`;
            alterUser.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - alterUser.style.height)}px`;
            document.body.style.overflow = "hidden";
            deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value = element.dataset['id'];
        };
    }
    let editProductFrame = document.querySelector(".edit-product-frame");
    let editProductForm = document.getElementById("form-edit-product");
    let editProductBtn = document.querySelectorAll(".edit-product-btn");

    for (let i = 0; i < editProductBtn.length; i++) {
        const element = editProductBtn[i];
        element.onclick = e => {
            editProductFrame.style.display = 'flex';
            editProductForm.children.item(0).value = element.dataset['id'];
            editProductForm.children.item(1).children.item(1).value = element.parentElement.parentElement.children.item(1).dataset['title'];
            editProductForm.children.item(2).children.item(1).value = element.parentElement.parentElement.children.item(2).dataset['desc'];
            editProductForm.children.item(3).children.item(1).value = element.parentElement.parentElement.children.item(4).children.item(1).dataset['price'];
            editProductForm.children.item(5).children.item(0).children.item(1).src = element.parentElement.parentElement.children.item(0).src;
            //Set include of:
            editProductForm.children.item(4).children.item(1).children.item(0).children.item(1).value = element.dataset['gid'];
            editProductForm.children.item(4).children.item(1).children.item(1).children.item(1).value = element.dataset['cid'];
            editProductForm.children.item(4).children.item(1).children.item(2).children.item(1).value = element.dataset['coid'];
            //End
            editProductFrame.style.height = `${document.body.offsetHeight}px`;
            editProductForm.style.marginTop = `${scrollY + 10}px`;
            // document.body.style.overflow = "hidden";
        };
    }
    let cancelEditProduct = document.querySelector(".close-frame-user");
    cancelEditProduct.onclick = function (event) {
        event.preventDefault();
        editProductFrame.style.display = "none";
        document.body.style.overflowY = "scroll";
    };
    //work on it ..
    // let closeFrameUser = document.getElementById("close-frame-user");
    // let frameEdit = document.querySelectorAll(".frame");
    // closeFrameUser.onclick = function (event) {
    //     for (let i = 0; i < frameEdit.length; i++) {
    //         const element = frameEdit[i];
    //         element.style.display = "none";
    //     }
    //     event.preventDefault();
    //     document.body.style.overflowY = "scroll";
    // };

    let searchProduct = document.getElementById("search-product");
    searchProduct.addEventListener("keyup", _ => {
        let listProduct = document.querySelector(".scroll-pro .all-product").children;
        for (let i = 0; i < listProduct.length; i++) {
            const element = listProduct[i];
            if (element.children.item(1).innerHTML.includes(searchProduct.value))
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
    });

    //GROUP Process
    let groupFrame = document.querySelector(".add-group-frame");
    let editGroupFrame = document.querySelector(".edit-group-frame");
    let addGroupBtn = document.querySelector(".btn-add-group");
    let editGroupBtn = document.querySelectorAll(".edit-group-btn");
    for (let i = 0; i < editGroupBtn.length; i++) {
        const element = editGroupBtn[i];
        element.addEventListener("click", e => {
            editGroupFrame.style.display = 'flex';
            editGroupFrame.style.height = `${document.body.offsetHeight}px`;
            editGroupFrame.children.item(0).children.item(0).children.item(1).value = element.parentElement.parentElement.children.item(1).dataset['title'];
            editGroupFrame.children.item(0).children.item(2).children.item(0).children.item(1).src = element.parentElement.parentElement.children.item(0).dataset['img'];
            editGroupFrame.children.item(0).children.item(1).children.item(1).children.item(0).children.item(1).value = element.dataset['caid'];
            editCPFrame.children.item(0).children.item(3).value = element.dataset['id'];
            console.log(editCPFrame.children.item(0).children.item(3).value);
        });
    }
    addGroupBtn.onclick = e => {
        groupFrame.style.display = 'flex';
        groupFrame.style.height = `${document.body.offsetHeight}px`;
    };
    let cancelGp = document.querySelectorAll('.close-gp-frame');
    for (let i = 0; i < cancelGp.length; i++) {
        const element = cancelGp[i];
        element.addEventListener("click", e => {
            e.preventDefault();
            groupFrame.style.display = 'none';
            editGroupFrame.style.display = 'none';
        });
    }
    let deleteGroup = document.querySelectorAll(".btn-delete-group");
    for (let i = 0; i < deleteGroup.length; i++) {
        const element = deleteGroup[i];
        element.addEventListener("click", e => {
            deleteUserFrame.style.display = "flex";
            deleteUserFrame.style.height = `${document.body.offsetHeight}px`;
            alterUser.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - alterUser.style.height)}px`;
            document.body.style.overflow = "hidden";
            deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value = element.dataset['id'];
            console.log(deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value);
        });
    }

    let searchGp = document.getElementById("search-group");
    searchGp.addEventListener("keyup", _ => {
        let listProduct = document.querySelector(".scroll-pro .all-group").children;
        for (let i = 0; i < listProduct.length; i++) {
            const element = listProduct[i];
            if (element.children.item(1).innerHTML.includes(searchGp.value))
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
    });
    //End Group Process

    //Start Company Process
    let addCPBtn = document.getElementById("btn-add-cp");
    let addCPframe = document.querySelector(".add-company-frame");
    let cancelAddGp = document.querySelectorAll(".close-cp-frame");
    let editCPBtn = document.querySelectorAll(".edit-cp-btn");
    let editCPFrame = document.querySelector(".edit-company-frame");
    let editCPForm = document.getElementById("form-edit-company");
    let addCPForm = document.getElementById("form-add-company");
    addCPBtn.addEventListener("click",
        e => {
            addCPframe.style.display = 'flex';
            addCPframe.style.height = `${document.body.offsetHeight}px`;
            addCPForm.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - addCPForm.offsetHeight)}px`;
            console.log(window.scrollY + (window.innerHeight / 2 - addCPForm.offsetHeight))
            document.body.style.overflow = "hidden";
        });
    for (let i = 0; i < cancelAddGp.length; i++) {
        const element = cancelAddGp[i];
        element.addEventListener('click', (e) => {
            e.preventDefault();
            addCPframe.style.display = 'none';
            editCPFrame.style.display = 'none';
            document.body.style.overflowY = "scroll";
        });
    }
    for (let i = 0; i < editCPBtn.length; i++) {
        const element = editCPBtn[i];
        element.onclick = (e) => {
            editCPFrame.style.display = 'flex';
            editCPFrame.style.height = `${document.body.offsetHeight}px`;
            editCPForm.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - editCPForm.offsetHeight) + 120}px`;
            document.body.style.overflow = "hidden";
            editCPFrame.children.item(0).children.item(0).children.item(1).value = element.parentElement.parentElement.children.item(1).dataset['title'];
            editCPFrame.children.item(0).children.item(1).children.item(0).children.item(1).src = element.parentElement.parentElement.children.item(0).dataset['img'];
            editCPFrame.children.item(0).children.item(3).value = element.dataset['id'];
        };
    }
    let deleteCP = document.querySelectorAll(".btn-delete-cp");
    for (let i = 0; i < deleteCP.length; i++) {
        const element = deleteCP[i];
        element.addEventListener("click", e => {
            deleteUserFrame.style.display = "flex";
            deleteUserFrame.style.height = `${document.body.offsetHeight}px`;
            alterUser.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - alterUser.style.height)}px`;
            document.body.style.overflow = "hidden";
            deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value = element.dataset['id'];
            console.log(deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value);
        });
    }
    let searchCP = document.getElementById("search-cp");
    searchCP.addEventListener("keyup", _ => {
        let listProduct = document.querySelector(".scroll-pro .all-company").children;
        for (let i = 0; i < listProduct.length; i++) {
            const element = listProduct[i];
            if (element.children.item(1).innerHTML.includes(searchCP.value))
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
    });
    //End Company Process

    //Start Category Process
    let addCABtn = document.getElementById("btn-add-ca");
    let addCAframe = document.querySelector(".add-category-frame");
    let cancelAddCA = document.querySelectorAll(".close-ca-frame");
    let editCABtn = document.querySelectorAll(".edit-ca-btn");
    let editCAFrame = document.querySelector(".edit-category-frame");
    let editCAForm = document.getElementById("form-edit-category");
    let addCAForm = document.getElementById("form-add-category");
    addCABtn.addEventListener("click",
        e => {
            addCAframe.style.display = 'flex';
            addCAframe.style.height = `${document.body.offsetHeight}px`;
            addCAForm.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - addCAForm.style.height) - 120}px`;
            document.body.style.overflow = "hidden";
        });
    for (let i = 0; i < cancelAddCA.length; i++) {
        const element = cancelAddCA[i];
        element.addEventListener('click', (e) => {
            e.preventDefault();
            addCAframe.style.display = 'none';
            editCAFrame.style.display = 'none';
            document.body.style.overflowY = "scroll";
        });
    }
    for (let i = 0; i < editCABtn.length; i++) {
        const element = editCABtn[i];
        element.onclick = (e) => {
            editCAFrame.style.display = 'flex';
            editCAFrame.style.height = `${document.body.offsetHeight}px`;
            console.log(editCAForm);
            editCAForm.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - editCAForm.offsetHeight) + 150}px`;
            document.body.style.overflow = "hidden";
            editCAFrame.children.item(0).children.item(0).children.item(1).value = element.parentElement.parentElement.children.item(1).dataset['title'];
            editCAFrame.children.item(0).children.item(1).children.item(0).children.item(1).src = element.parentElement.parentElement.children.item(0).dataset['img'];
            editCAFrame.children.item(0).children.item(3).value = element.dataset['id'];
        };
    }

    let deleteCA = document.querySelectorAll(".btn-delete-ca");
    for (let i = 0; i < deleteCA.length; i++) {
        const element = deleteCA[i];
        element.addEventListener("click", e => {
            deleteUserFrame.style.display = "flex";
            deleteUserFrame.style.height = `${document.body.offsetHeight}px`;
            alterUser.style.marginTop = `${window.scrollY + (window.innerHeight / 2 - alterUser.style.height)}px`;
            document.body.style.overflow = "hidden";
            deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value = element.dataset['id'];
            console.log(deleteUserFrame.children.item(0).children.item(1).children.item(0).children.item(0).value);
        });
    }
    let searchCA = document.getElementById("search-ca");
    searchCA.addEventListener("keyup", _ => {
        let listProduct = document.querySelector(".scroll-pro .all-category").children;
        for (let i = 0; i < listProduct.length; i++) {
            const element = listProduct[i];
            if (element.children.item(1).innerHTML.includes(searchCA.value))
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
    });
    //End Category Process

    // Start Msg Process
    let searchMsg = document.getElementById("search-msg");
    searchMsg.addEventListener("keyup", _ => {
        let listProduct = document.querySelector(".scroll-pro .all-msg").children;
        for (let i = 0; i < listProduct.length; i++) {
            const element = listProduct[i];
            console.log(element.children.item(0).children.item(1).innerHTML);
            if (element.children.item(0).children.item(1).innerHTML.includes(searchMsg.value))
                element.style.display = 'block';
            else
                element.style.display = 'none';
        }
    });
}

let includeOfLi = document.querySelectorAll('.include-of .include-element li');
if (includeOfLi != null) {
    for (let i = 0; i < includeOfLi.length; i++) {
        const element = includeOfLi[i];
        element.onclick = function () {
            element.parentElement.parentElement.children.item(0).innerHTML = element.innerHTML;
            element.parentElement.parentElement.children.item(1).value = element.dataset['id'];
        }
    }

}
