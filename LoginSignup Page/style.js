const loginBtn = document.querySelector('.loginBtn')
const signupBtn = document.querySelector('.signupBtn')
const formBox = document.querySelector('.formBox')
const body = document.querySelector('body')

signupBtn.onclick = function(){
    formBox.classList.add('active')
    body.classList.add('active')
}

loginBtn.onclick = function(){
    formBox.classList.remove('active')
    body.classList.remove('active')
}