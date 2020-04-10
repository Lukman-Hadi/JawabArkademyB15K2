function BagiArray(arr,pembagi){
    var index = 0;
    var length = arr.length;
    var tempArray = [];
    var isi;
    if (pembagi==1) {
        for(index=0;index<length;index += pembagi){
            isi = arr.slice(index,index+pembagi);
            tempArray.push(isi);
        }
        return tempArray;
    }else{
        while(index<length){
            if((length-index)-pembagi == 1){
                isi = arr.slice(index);
                tempArray.push(isi);
                index += pembagi;
            }else{
                isi = arr.slice(index,index+pembagi);
                tempArray.push(isi);
            }
            index += pembagi;
        }
        return tempArray;
    }
}
console.log(BagiArray([1,2,3,4,5],2));
console.log(BagiArray([1,2,3,4,5],3));
console.log(BagiArray([1,2,3,4,5],1));