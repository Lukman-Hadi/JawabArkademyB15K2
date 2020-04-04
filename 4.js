function ValidateHex(input) {
    var check, code, len;
    if(typeof input == 'string'){
        if(input[0] === "#"){
            len = input.length;
            if (len === 4 || len === 7){
                input = input.toLowerCase();
                check = '#' + ('00000000' + parseInt(input.substr(1), 16).toString(16)).substr(1 - len);
                if(check === input){
                    return "BENAR!"
                }else{
                    return "SALAH!"
                }
            }
        }
    }
}
console.log(ValidateHex("#FFF"));
console.log(ValidateHex("#e3e3e3"));
console.log(ValidateHex("#ata910"));