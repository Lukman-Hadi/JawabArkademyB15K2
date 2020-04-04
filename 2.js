function ValidateUsername(username) {
    let usernameRegex = /^[A-Z]{7}$/gm;
    if (username.match(usernameRegex)) {
        return true;
    }else {
        return false;
    }
}
function ValidatePassword(password) {
    let passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&.,/()])([A-Za-z\d@$!%*#?&.,/()]){9,15}/;
    if (password.match(passwordRegex)) {
        return true;
    }else {
        return false;
    }
}

console.log(ValidateUsername("SABRINA"));
console.log(ValidateUsername("KEVIN"));
console.log(ValidatePassword("#DirumahAj4"));
console.log(ValidatePassword("Cuci#Tangan"));
