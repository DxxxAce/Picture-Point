document.addEventListener('click', e => {
    const isDropDownButton = e.target.matches("#dropdown")
    if (!isDropDownButton && e.target.closest('#dropdown') != null) return

    let dropDown;
    if (isDropDownButton) {
        dropDown = e.target.closest('#dropdown')
        dropDown.classList.toggle('show')
    }

    document.querySelectorAll("#dropdown.show").forEach(d => {
        if (d == dropDown) return
        dropDown.classList.remove('show')
    })
})