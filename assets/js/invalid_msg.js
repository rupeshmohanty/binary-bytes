var uname_input = document.getElementById('uname');

uname_input.oninvalid = (event) => {
    event.target.setCustomValidity('Username should only contain lowercase letters and numbers between 1 and 15. e.g. john');
}