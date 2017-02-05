$(function() {
//	мобільне меню
	$('.b-menuBtn').click(function() {
		$('.b-menu__nav_mobile').slideDown(200);
	});
	$('.b-menu__close_mobile').click(function() {
		$('.b-menu__nav_mobile').slideUp(200);
	});
// datepicker
	$.datepicker.regional['ru'] = {
		closeText: 'Закрыть',
		prevText: 'Пред',
		nextText: 'След',
		currentText: 'Сегодня',
		monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
		'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
		monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
		'Июл','Авг','Сен','Окт','Ноя','Дек'],
		dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
		dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
		dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false
	};

$.datepicker.setDefaults($.datepicker.regional['ru']);
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 2
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 2
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    };
//	стилізуємо select
	$('select').selectric({
		onInit: function() {
			$(".selectric-wrapper>.selectric-items ul>li.disabled").remove();	//прибираємо з меню неактивний пункт
		}
	});
  // $('.js-masonryGrid').masonry({
	// // options
	// itemSelector: '.js-masonryGrid__item',
	// fitWidth: true
  // })
//	ініціалізація слайдера
	// main slider
	$('.b-slider').slick({
	infinite: false,
	speed: 300,
	slidesToShow: 3,
	slidesToScroll: 3,
	responsive: [{
			breakpoint: 992,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 2,
			}
		},
		{
			breakpoint: 768,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1
			}
		}]
	});
	// apartment page slider 
	$('.b-apartmentSlider').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		vertical: true,	
		verticalSwiping: true,
		arrows: false,
		infinite: true,
		speed: 800,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 550,
			  settings: {
					vertical: false,	
					verticalSwiping: false,
					slidesToShow: 3,
					slidesToScroll: 1
			  }
			}
		]
	});
	
//	модальні вікна
	$(".fancybox-thumb").fancybox({
		padding : 0,
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	//вивід кількості файлів для відвантаження
	$('.b-responseForm input[type="file"]').change(function () {
		var  filesNum = this.files.length
			,filesText = filesNum  + " файл"
			,filesField = $('.b-responseForm .b-upload__text')	//вивід тексту к-ті файлів
			;
			console.log("dsclsdofcbsdklb");
		if (filesNum > 4){
			filesText+="ов";
		} else if (filesNum > 1){
			filesText+="а";
		}
		filesField.text(filesText + " выбрано");
	});
});
