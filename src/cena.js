var myArray = [1,2,3,4,5,6,7,8,9];
myArray.reverse();

function rev(){

    var msrray = [1,2,3,4,5,6,7,8,9];
    var newarray = [];

    for(let i = msrray.length; i>0;i--){
        newarray.push(msrray[i - 1]);
    }

    console.log(newarray);
}

rev();