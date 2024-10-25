function powitaj(name, age = 18) {
    return `Cześć ${name}! Masz ${age}`;
}

console.log(powitaj("Adam", 1));
console.log(powitaj("Adam"));