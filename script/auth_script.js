$('.vinyl-wrapper-login').mouseenter(show_vinyl_login);
$('.vinyl-wrapper-login').mouseleave(hide_vinyl_login);
$('.vinyl-wrapper-register').mouseenter(show_vinyl_register);
$('.vinyl-wrapper-register').mouseleave(hide_vinyl_register);
$('.vinyl-wrapper-login').click(show_login);
$('.vinyl-wrapper-register').click(show_register);

function show_vinyl_login() {
  $('.vinyl-login').css('transform','translate(2rem,0)');
}

function hide_vinyl_login() {
  $('.vinyl-login').css('transform','translate(0rem,0)');
}

function show_vinyl_register() {
  $('.vinyl-register').css('transform','translate(2rem,0)');
}

function hide_vinyl_register() {
  $('.vinyl-register').css('transform','translate(0rem,0)');
}

function show_login(){
  $('.sign-up-input').css('display','none');
  $('.login-input').css('display', 'block');
}

function show_register() {
  $('.login-input').css('display','none');
  $('.sign-up-input').css('display', 'block');
}
