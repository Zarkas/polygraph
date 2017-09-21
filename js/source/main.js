var POLIGRAPH = POLIGRAPH || {};

var _dW, _dH;
var urlValue;
var mainUrl;


POLIGRAPH.Qr = function(config) {
	var that = this;

	that.init = function(){
		// _$container = config.container;
	}

	var imgCode = '...';

	console.log('POLIGRAPH.Qr');

	console.log(urlValue);

	that.init(config);
};

/*
 * Este módulo tiene que poner un video de fondo
 * Tiene que recibir las notificaciones
 * Tiene que poder cambiar de minuto
 *
 */
POLIGRAPH.Video = function(config){

	var _$container,
			_sizeMobile = 992;

	var that = this;

	that.init = function(){
		// _$container = config.container;
	}
	console.log('POLIGRAPH.Video');

	that.init(config);
};

/*
 * Generate QR
 *
 */
var qrGenerator = function(urlValue) {
	const qr = new QRious({
    element: document.getElementById('qrimg'),
    value: urlValue
  })
}

/*
 * Get random string to make a channel
 * Usage: randomChannel(16, 'aA'); // '#aA', '#A!'
 *
 */
var randomChannel = function(length, chars){
    var mask = '';
    if (chars.indexOf('a') > -1) mask += 'abcdefghijklmnopqrstuvwxyz';
    if (chars.indexOf('A') > -1) mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if (chars.indexOf('#') > -1) mask += '0123456789';
    if (chars.indexOf('!') > -1) mask += '~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';

    var result = '';
    for (var i = length; i > 0; --i) result += mask[Math.round(Math.random() * (mask.length - 1))];

		return result;
};

/*
 * Get random string to make a channel
 * Usage: randomChannel(16, 'aA'); // '#aA', '#A!'
 *
 */
var screenDimension = function(){

		return result;
};

function initPoligraph(){

	var _$body = $("body"),
		_$window = $(window);


	_dH = _$window.height();
	_dW = _$window.width();

	urlValue = randomChannel(16, 'aA');

	console.log('height: ' + _dH + ' width: ' + _dW);
}

$(document).ready(function(){
  initPoligraph();

  POLIGRAPH.Video();
	POLIGRAPH.Qr();
});
