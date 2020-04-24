function An()
{var isAdmin = confirm("Let me know your horoscope sign and the site will choose the right picture for you according to the sign of your horoscope. You can reject this offer and choose for yourself what you like.\r\nДайте мне узнать знак вашего гороскопа, и сайт выберет для вас подходящую картину. Вы можете отклонить предложение или продолжить.");
{if (isAdmin== true)

{ this.run=function ()
{this.name = prompt('What is your name?\r\nВведите ваше имя.');
	this.years = +prompt(this.name + ', Specify the year of your birth. Enter in the format YYYY.\r\nУкажите год вашего рождения. Введите в формате ГГГГ');

{if (!this.years) 
{alert('You did not specify years of your birth !\r\nВы не указали годы своего рождения!');

this.years = +prompt(this.name +', Specify the year of your birth. Enter in the format YYYY.\r\nУкажите год вашего рождения. Введите в формате ГГГГ');}

if ((this.years - 1950)%12 == 0 )
alert ( this.name +', You were born in the year of the Tiger!\r\nВы родились в год Тигра.'); 
if ((this.years - 1951)%12 == 0 )
alert ( this.name +', You were born in the year of the Rabbit!\r\nВы родились в год Кролика.'); 
if ((this.years - 1952)%12 == 0 )
alert ( this.name +', You were born in the year of the Dragon!\r\nВы родились в год Дракона.');
if ((this.years - 1953)%12 == 0 )
alert ( this.name +', You were born in the year of the Snake!\r\nВы родились в год Змеи.');
if ((this.years - 1954)%12 == 0 )
alert ( this.name +', You were born in the year of the Horse!\r\nВы родились в год Лошади.');
if ((this.years - 1955)%12 == 0 )
alert ( this.name +', You were born in the year of the Goat!\r\nВы родились в год Козла.');
if(this.years!=0)
if ((this.years - 1956)%12 == 0 )
alert ( this.name +', You were born in the year of the Monkey!\r\nВы родились в год Обезьяны.'); 
if ((this.years - 1957)%12 == 0 )
alert ( this.name +', You were born in the year of the Rooster!\r\nВы родились в год Петуха.');
if ((this.years - 1958)%12 == 0 )
alert ( this.name +', You were born in the year of the Dog!\r\nВы родились в год Собаки.');
if ((this.years - 1959)%12 == 0 )
alert ( this.name +', You were born in the year of the Pig!\r\nВы родились в год Свиньи.');
if ((this.years - 1960)%12 == 0 )
alert ( this.name +', You were born in the year of the Rat!\r\nВы родились в год Крысы.');
if ((this.years - 1961)%12 == 0 )
alert ( this.name +', You were born in the year of the Ox!\r\nВы родились в год Быка.');

this.month = prompt('Enter the month of your birth in digital format.\r\nВведите месяц вашего рождения в цифровом формате.');

{if (!this.month) 
{alert('You did not specify the month of your birth!\r\nВы не ввели месяц вашего рождения.');
this.month = prompt('Enter the month of your birth in digital format.\r\nВведите месяц вашего рождения.');}
this.day = prompt('Specify your birthday.\r\nУкажите ваш день рождения.');
{if (!this.day) 
{alert('You did not specify your birthday!\r\nВы не ввели день вашего рождения.');this.day = prompt('Specify your birthday!\r\nУкажите месяц вашего рождения.');}

if ( this.month == '11' && this.day >= '22'|| this.month == '12' && this.day <= '20')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img1").animate({height: "show"}, 5000); 
	$("#demo1").show(("slow"),5000);   
	
});
}
if ( this.month == '12' && this.day >= '21'|| this.month == '1' && this.day <= '20')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img2").animate({height: "show"}, 5000); 
	$("#demo2").show(("slow"),5000);   
});
}
if ( this.month == '1' && this.day >= '21'|| this.month == '2' && this.day <= '18')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img3").animate({height: "show"}, 5000); 
	$("#demo3").show(("slow"),5000);   
});
}

if ( this.month == '2' && this.day >= '19'|| this.month == '3' && this.day <= '20')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img4").animate({height: "show"}, 5000); 
	$("#demo4").show(("slow"),5000);   
});
}

if ( this.month == '3' && this.day >= '21'|| this.month == '4' && this.day <= '20')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img5").animate({height: "show"}, 5000); 
	$("#demo5").show(("slow"),5000);   
});
}

if ( this.month == '4' && this.day >= '21'|| this.month == '5' && this.day <= '20')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img6").animate({height: "show"}, 5000); 
	$("#demo6").show(("slow"),5000);   
});}

if ( this.month == '5' && this.day >= '21'|| this.month == '6' && this.day <= '20')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img7").animate({height: "show"}, 5000); 
	$("#demo7").show(("slow"),5000);   
});}

if ( this.month == '6' && this.day >= '21'|| this.month == '7' && this.day <= '21')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img8").animate({height: "show"}, 5000); 
	$("#demo8").show(("slow"),5000);   
});}

if ( this.month == '7' && this.day >= '22'|| this.month == '8' && this.day <= '22')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img9").animate({height: "show"}, 5000); 
	$("#demo9").show(("slow"),5000);   
});}

if ( this.month == '8' && this.day >= '23'|| this.month == '9' && this.day <= '22')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img10").animate({height: "show"}, 5000); 
	$("#demo10").show(("slow"),5000);   
});}

if ( this.month == '9' && this.day >= '23'|| this.month == '10' && this.day <= '22')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img11").animate({height: "show"}, 5000); 
	$("#demo11").show(("slow"),5000);   
});}

if ( this.month == '10' && this.day >= '23'|| this.month == '11' && this.day <= '21')
{$(document).ready(function(){
	$("#test2").animate({height: "show"}, 1000);
    $("#img12").animate({height: "show"}, 5000); 
	$("#demo12").show(("slow"),5000);   
});}
}}}}}}}
 
var an = new An ();
u=an.run();




