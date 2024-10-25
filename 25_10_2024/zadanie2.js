let even = x => {
    if (x % 2 == 0) {
        return x + " Parzysta";
    } else {
        return x + " Nieparzysta";
    }
};

console.log(even(4));
console.log(even(5));
console.log(even(6));
console.log(even(7));