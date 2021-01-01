export default () => {
    let modal = document.getElementById("contact-modal")
    let btn = document.getElementById("contact-btn")
    let span = document.getElementsByClassName("close")[0]

    btn.onclick = function () {
        modal.style.display = "block"
    }

    span.onclick = function () {
        modal.style.display = "none"
    }

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none"
        }
    }
}