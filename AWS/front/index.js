
const imageForm = document.querySelector("#imageForm")
const imageInput = document.querySelector("#imageInput")
const imageForm: Element
imageForm.addEventListener("submit", async event => {
    event.preventDefault()
    const file = imageInput.files[0]

    //get a secure url from server

    //post the image directly to s3 bucket

    //post reqst to my server to store any extra data

})
