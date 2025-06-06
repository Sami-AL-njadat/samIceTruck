window.onscroll = function () {
    const btn = document.getElementById("scrollTopBtn");
    if (
        document.body.scrollTop > 200 ||
        document.documentElement.scrollTop > 200
    ) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

document.getElementById("scrollTopBtn").onclick = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
};
