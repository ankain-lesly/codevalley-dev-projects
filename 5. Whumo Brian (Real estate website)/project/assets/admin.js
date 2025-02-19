const form = document.querySelector('form'),
  continueBtn = form.querySelector('button')
const errorText = document.querySelector('.error-txt')

form.onsubmit = (e) => {
  e.preventDefault()
}

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest()
  xhr.open('POST', 'assets/admin.php', true)
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response
        if (data == 'success') {
          continueBtn.innerHTML = "<div class='loader'></div>"
          setTimeout(() => {
            continueBtn.innerHTML = 'Done'
            location.href = 'Admin.php'
          }, 4000)
          errorText.style.display = 'none'
        } else {
          errorText.textContent = data
          errorText.style.display = 'block'
        }
      }
    }
  }
  let formData = new FormData(form)
  xhr.send(formData)
}
