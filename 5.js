function FindDuplicate(str){
    if(typeof str == 'string' && str!=''){
        charac = str.toLowerCase();
        charac = charac.split(' ').join('');
        let arr = charac.split('');
        arr.sort();
        let current = null;
        var count = 0;
        var dup = 1;
        for (let i = 0;i<arr.length;i++) {
            if (arr[i] != current) {
                if (count >1) {
                    console.log(current+" : "+count)
                    dup++;
                }
                current = arr[i];
                count=1;
            }else{
                count++;
            }
        }
    }else{
        return "MASUKAN HANYA STRING!";
    }
    if(dup==1){
        console.log("TIDAK ADA HURUF GANDA");
    }
}
FindDuplicate('hari apa saja saya bisa!');
FindDuplicate('adobe');