// Toggling menu
document.querySelector(".menu-icon").addEventListener("click", () => {
    document.querySelector(".mobile").style.width = "100vw";
});
document.querySelector(".btn-close").addEventListener("click", () => {
    document.querySelector(".mobile").style.width = 0;
});

var config = {
    extraPlugins: "codesnippet",
    codeSnippet_theme: "monokai_sublime"
};
CKEDITOR.replace("body", config);
