function divide(num1, num2) {
    if (num2 == 0) {
        console.log("Nie można dzielić przez 0");
        return "Błąd!";
    } else {
        return num1/num2;
    }
}

console.log(divide(2, 1));