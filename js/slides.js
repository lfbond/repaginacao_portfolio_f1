$(function(){
	$('.web .container').slick({
		centerMode:true,
		slidesToShow:3,
		arrows:false,
		dots:true,
		infinite:true,
		responsive:[

			{
				breakpoint: 1000,
				settings:{
					arrows:false,
					dots:true,
					infinite:false,
					centerMode:false,
					slidesToShow:2
				}
			},
			{
				breakpoint: 810,
				settings:{
					arrows:false,
					dots:true,
					infinite:false,
					centerMode:false,
					slidesToShow:1
				}
			}
		]
	});
})

$(function(){
	$('.apps .container').slick({
		centerMode:true,
		slidesToShow:3,
		arrows:false,
		dots:true,
		infinite:true,
		responsive:[

			{
				breakpoint: 1000,
				settings:{
					arrows:false,
					dots:true,
					infinite:false,
					centerMode:false,
					slidesToShow:2
				}
			},
			{
				breakpoint: 810,
				settings:{
					arrows:false,
					dots:true,
					infinite:false,
					centerMode:false,
					slidesToShow:1
				}
			}
		]
	});
})

$(function(){
	$('.games .container').slick({
		centerMode:true,
		slidesToShow:3,
		arrows:false,
		dots:true,
		infinite:true,
		responsive:[

			{
				breakpoint: 1000,
				settings:{
					arrows:false,
					dots:true,
					infinite:false,
					centerMode:false,
					slidesToShow:2
				}
			},
			{
				breakpoint: 810,
				settings:{
					arrows:false,
					dots:true,
					infinite:false,
					centerMode:false,
					slidesToShow:1
				}
			}
		]
	});
})