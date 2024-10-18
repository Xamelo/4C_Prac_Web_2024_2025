const obiekt = {
    imie: "Kamil",
    pokazImie: function(){
        console.log(this.imie);
    },
    pokazImie2: () => {
        console.log(this.imie);
    }
};

obiekt.pokazImie();
obiekt.pokazImie2();