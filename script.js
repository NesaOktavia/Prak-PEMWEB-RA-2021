function changecolor(x){
    if(x=="Black"){
        var element = document.body
        element.className="dark"
    }
    else if (x=="White"){
        var element = document.body
        element.className="white"
    }
    else if (x=="Green"){
        var element = document.body
        element.className="green"
    }
    else if (x=="Aqua"){
        var element = document.body
        element.className="aqua"
    }
}

function weather(x){
    if(x == "Rainy"){
        message.innerHTML= "Rainy is falling outside; take a rain coat and a brolly, and don't stay out for too long";
    }
    if(x == "Sunny"){
        message.innerHTML= "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream.";
    }
}

function faktorial(){
    a=document.getElementById('num').value
    if(a==''){
        document.getElementById('hasil').innerHTML="Please Enter the Number"
    }else if(a==0 || a==1){
        document.getElementById('hasil').innerHTML="The factorial of " + a + " is "+ 1
    }else{
        f=a
        for(var i = a-1; i>=1; i--){
            a*=i;
        }
        document.getElementById('hasil').innerHTML="The factorial of " + f + " is "+ a;
    }
}