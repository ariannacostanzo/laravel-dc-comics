const inputUrl = document.getElementById("thumb");
const imgPlaceholder = document.getElementById("placeholder-thumb");
const emptyImg =
    "https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg";

inputUrl.addEventListener("input", () => {
    typedUrl = inputUrl.value;
    imgPlaceholder.src = typedUrl ? typedUrl : emptyImg;
});
