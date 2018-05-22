(function() {

    let slide = {
        element: document.querySelector(".reviews--container--slides"),
        marginLeft: 0,
        num: 0,
        max: document.querySelectorAll(".review").length - 1
    };

    const button = {
        left: document.querySelector(".review--arrow--left"),
        right: document.querySelector(".review--arrow--right")
    };

    (function addEventListeners() {
        button.left.addEventListener("click", moveSlideLeft);
        button.right.addEventListener("click", moveSlideRight);
    })();

    function hideButtons() {
        if (slide.num === 0) {
            button.right.style.display = "block";
            button.left.style.display = "none";
        }
        else if (slide.num === slide.max) {
            button.right.style.display = "none";
            button.left.style.display = "block";
        }
        else {
            button.right.style.display = "block";
            button.left.style.display = "block";
        }
    }

    function moveSlideLeft() {
        slide.num--;
        slide.marginLeft += 800;
        slide.element.style.marginLeft = slide.marginLeft + "px";
        hideButtons();
    }

    function moveSlideRight() {
        slide.num++;
        slide.marginLeft -= 800;
        slide.element.style.marginLeft = slide.marginLeft + "px";
        hideButtons();
    }

})();