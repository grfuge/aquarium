(function() {

    let images = document.querySelectorAll(".gallery--img");
    let modal = document.querySelector(".modal");
    let modalImg = document.querySelector(".modal--img");

    images.forEach(function(image) {
        image.addEventListener("click", function() { changeModalSrc(image.src) });
        image.addEventListener("click", showModal);
    });

    modal.addEventListener("click", closeModal);

    function showModal() {
        transitionModalShow();
        modal.style.display = "block";
    }

    function closeModal(e) {
        if (e.target.nodeName === "IMG") return;
        transitionModalClose();
        setTimeout(function() { modal.style.display = "none"; }, 200);
    }

    function changeModalSrc(imageSrc) {
        imageSrc = imageSrc.slice(imageSrc.indexOf("/img"), imageSrc.length);
        imageSrc = imageSrc.replace("--prev", "--full");
        imageSrc = "../.." + imageSrc;
        modalImg.src = imageSrc;
    }

    function transitionModalShow() {
        modal.style.transition = "opacity 200ms";
        modal.style.opacity = 0;
        setTimeout(function() { modal.style.opacity = 1; }, 1);
    }

    function transitionModalClose() {
        modal.style.transition = "opacity 200ms";
        modal.style.opacity = 1;
        setTimeout(function() { modal.style.opacity = 0; }, 1);
    }

})();