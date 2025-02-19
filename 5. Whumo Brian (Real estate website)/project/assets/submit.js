const form = document.querySelector('form'),
  continueBtn = form.querySelector('button'),
  errorText = form.querySelector('.error-txt')

form.onsubmit = (e) => {
  e.preventDefault()
}

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest()
  xhr.open('POST', 'assets/submit.php', true)
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response
        if (data == 'success') {
          continueBtn.innerHTML = "<div class='loader'></div>"
          setTimeout(() => {
            continueBtn.innerHTML = 'Done'
            alert("Submited Succesfuly")
          }, 4000)
          errorText.style.display = 'none'
        } else {
          errorText.textContent = data
          errorText.style.display = 'flex'
          setTimeout(() => {
            // errorText.textContent = data
            errorText.style.display = 'none'
          }, 1500)
        }
      }
    }
  }
  let formData = new FormData(form)
  xhr.send(formData)
}
