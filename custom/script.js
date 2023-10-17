document.addEventListener("DOMContentLoaded", function () {
    let clickableDiv = document.querySelector(".clickable-div");
    console.log(clickableDiv);
    clickableDiv.addEventListener("click", function () {
    let link = clickableDiv.getAttribute("data-href");
    window.location.href = link;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let clickableDiv = document.querySelector(".clickable-div1");
    console.log(clickableDiv);
    clickableDiv.addEventListener("click", function () {
    let link = clickableDiv.getAttribute("data-href");
    window.location.href = link;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let clickableDiv = document.querySelector(".clickable-div2");
    console.log(clickableDiv);
    clickableDiv.addEventListener("click", function () {
    let link = clickableDiv.getAttribute("data-href");
    window.location.href = link;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let clickableDiv = document.querySelector(".clickable-div3");
    console.log(clickableDiv);
    clickableDiv.addEventListener("click", function () {
    let link = clickableDiv.getAttribute("data-href");
    window.location.href = link;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let clickableDiv = document.querySelector(".clickable-div4");
    console.log(clickableDiv);
    clickableDiv.addEventListener("click", function () {
    let link = clickableDiv.getAttribute("data-href");
    window.location.href = link;
    });
});
document.addEventListener("DOMContentLoaded", function () {
    let clickableDiv = document.querySelector(".clickable-div5");
    console.log(clickableDiv);
    clickableDiv.addEventListener("click", function () {
    let link = clickableDiv.getAttribute("data-href");
    window.location.href = link;
    });
});

$(document).ready(function() {
    // Handle the hover event for both "Reports" and "Summary" dropdowns
    $(".nav-item.dropdown").hover(
        function() {
            var $menu = $(this).find(".dropdown-menu");
            if (!$menu.is(":visible")) {
                $menu.stop().slideDown();
            }
        },
        function() {
            var $menu = $(this).find(".dropdown-menu");
            $menu.stop().slideUp();
        }
    );
});