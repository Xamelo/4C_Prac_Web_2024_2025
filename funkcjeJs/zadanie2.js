const liczby2 = [10, 20, 30, 40];
const suma = function(arr) {
    let sum = 0;
    arr.forEach(element => {
        sum += element;
    });
    return sum;
};
console.log(suma(liczby2));